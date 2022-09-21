<?php

namespace App\Http\Controllers;

class PageController
{
    function page($page=null){
        $meta = config('meta')[request()->route()->parameter('page')] ?? config('meta')[''];
        $view = 'pages.index';
        if($page){
            $page = str_replace('/', '.', $page);
            $view = "pages.$page";
        }
        if(!view()->exists($view)){
            abort(404);
        }
        return view($view, compact('meta'));
    }
    function htmlmap(){
        $sitemap = [];
        $directory = new \RecursiveDirectoryIterator(base_path('resources/views/pages'));
        $iterator = new \RecursiveIteratorIterator($directory);
        foreach ($iterator as $idx => $item){
            if(in_array($item->getFilename(), ['.', '..'])){
                continue;
            }
            $route_part = str_replace([base_path('resources/views/pages/'), '.blade.php'], '', $item->getPathName());
            echo "<a href='/$route_part.html'>  $route_part </a><br>";

        }
    }
    function sitemap(){
        $sitemap = [];
        $directory = new \RecursiveDirectoryIterator(base_path('resources/views/pages'));
        $iterator = new \RecursiveIteratorIterator($directory);
        foreach ($iterator as $item){
            if(in_array($item->getFilename(), ['.', '..'])){
                continue;
            }
            $route_part = str_replace([base_path('resources/views/pages/'), '.blade.php'], '', $item->getPathName());
            $sitemap_item = [];
            if($route_part == 'index'){
                $sitemap_item['loc'] = route('home');
                $sitemap_item['priority'] = '1.00';
            } else {
                $sitemap_item['loc'] = route('page', ['page' => $route_part]);
                $sitemap_item['priority'] = '0.8';
            }
            $sitemap_item['lastmod'] = date('Y-m-dTH:i:s+00:00', strtotime('last Monday'));
            $sitemap[] = $sitemap_item;
        }
        $xml = new \DOMDocument();
        $xml->encoding = 'utf-8';
        $xml->xmlVersion = '1.0';
        $xml->formatOutput = true;
        $root = $xml->createElement('urlset');
        $root->setAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');
        $root->setAttribute('xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance');
        $root->setAttribute('xsi:schemaLocation', 'http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd');
        foreach ($sitemap as $sitemap_item){
            $url = $xml->createElement('url');
            $loc = $xml->createElement('loc');
            $lastmod = $xml->createElement('lastmod');
            $priority = $xml->createElement('priority');
            $loc->nodeValue = $sitemap_item['loc'];
            $lastmod->nodeValue = $sitemap_item['lastmod'];
            $priority->nodeValue = $sitemap_item['priority'];
            $url->appendChild($loc);
            $url->appendChild($priority);
            $url->appendChild($lastmod);
            $root->appendChild($url);
        }
        $xml->appendChild($root);
        return response($xml->saveXML(), 200, [
            'Content-Type' => 'application/xml'
        ]);
    }
}
