<?php
if(count($argv) < 3){
    die('Loss arguments');
}
$pageTemplate = "@extends('skeleton')\n
@section('critical_styles')
{critical_styles}
@endsection
@section('content')
{sections}
@endsection";

$path = $argv[1];
$prefix = $argv[2];
$saveTo = "resources/views/sections/$prefix";
$pagePath = "resources/views/pages/$prefix.blade.php";
if(!file_exists(dirname($pagePath))){
    mkdir(dirname($pagePath), 0755, true);
}
if(!is_dir($saveTo)){
    mkdir($saveTo, 0755, true);
}
if(!file_exists($pagePath)){
    file_put_contents($pagePath, $pageTemplate);
}
$file = @file_get_contents($path) or die('File not loaded');
$dom = new DOMDocument();
@$dom->loadHTML($file);
$sections = $dom->getElementsByTagName('section');
$sections_list = [];
foreach ($sections as $idx=>$section){
    $blank = new DOMDocument();
    $node = $blank->importNode($section->cloneNode(true), true);
    $name = '';
    $id = '';
    $class = trim($node->getAttribute('class'));
    if(empty($class)){
        $id = trim($node->getAttribute('id'));
    }
    $name = $class;
    if(empty($name)){
        $name = $id;
    }
    if(empty($name)){
        $name = $idx;
    }
    $blank->appendChild($node);
    $html = $blank->saveHTML();
    if(!$html){
        echo "Section empty\n";
        continue;
    }
    $sections_list[$name] = $html;
}
$sections_string = '';
foreach ($sections_list as $name=>$html){
    file_put_contents("$saveTo/$name.blade.php", $html);
    $prefix = str_replace('/', '.', $prefix);
    $sections_string.="\t@include('sections.$prefix.$name')\n";
}
$pageHtml = str_replace(['{sections}', '{critical_styles}'],[$sections_string, "\t@inlineCss(css/$prefix.css)"], $pageTemplate);
file_put_contents($pagePath, $pageHtml);
