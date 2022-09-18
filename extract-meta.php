<?php
function getUrlData($url)
{
    $result = false;

    $contents = getUrlContents($url);

    if (isset($contents) && is_string($contents))
    {
        $title = null;
        $metaTags = null;

        preg_match('/<title>([^>]*)<\/title>/si', $contents, $match );

        if (isset($match) && is_array($match) && count($match) > 0)
        {
            $title = strip_tags($match[1]);
        }

        preg_match_all('/<[\s]*meta[\s]*(name|property)="?([^>"]*)"?[\s]* content="?([^>"]*)"?[\s]*[\/]?[\s]*>/si', $contents, $match);
        if (isset($match) && is_array($match) && count($match) == 4)
        {
            $originals = $match[0];
            $names = $match[2];
            $values = $match[3];


            if (count($originals) == count($names) && count($names) == count($values))
            {
                $metaTags = array();

                for ($i=0, $limiti=count($names); $i < $limiti; $i++)
                {
                    $metaTags[$names[$i]] = array (
                        'html' => htmlentities($originals[$i]),
                        'value' => $values[$i]
                    );
                }
            }
        }

        $result = array (
            'title' => $title,
            'metaTags' => $metaTags
        );
    }

    return $result;
}
function getUrlContents($url, $maximumRedirections = null, $currentRedirection = 0)
{
    $result = false;

    $contents = @file_get_contents($url);

    // Check if we need to go somewhere else

    if (isset($contents) && is_string($contents))
    {
        preg_match_all('/<[\s]*meta[\s]*http-equiv="?REFRESH"?' . '[\s]*content="?[0-9]*;[\s]*URL[\s]*=[\s]*([^>"]*)"?' . '[\s]*[\/]?[\s]*>/si', $contents, $match);

        if (isset($match) && is_array($match) && count($match) == 2 && count($match[1]) == 1)
        {
            if (!isset($maximumRedirections) || $currentRedirection < $maximumRedirections)
            {
                return getUrlContents($match[1][0], $maximumRedirections, ++$currentRedirection);
            }

            $result = false;
        }
        else
        {
            $result = $contents;
        }
    }

    return $contents;
}
$proj_dir = '/Users/maxkuba/Desktop/Projects/Trembit/';
$directory = new RecursiveDirectoryIterator($proj_dir);
$iterator = new RecursiveIteratorIterator($directory);
$meta_array = [];
foreach ($iterator as $file){
    if(in_array($file->getFilename(), ['.', '..'])){
        continue;
    }
    if(strpos($file->getFilename(), '.html') === false){
        continue;
    }
    if(strpos($file->getPathName(), 'blog') !== false){
        continue;
    }
    $route = str_replace([$proj_dir, '.html'], '', $file->getPathName());
    $meta = getUrlData($file->getPathName());
    $meta_data = [];
    $meta_data['title'] = $meta['title'] ?? '';
    $meta_data['description'] = $meta['metaTags']['description']['value'] ?? '';
    $meta_data['keywords'] = $meta['metaTags']['keywords']['value'] ?? '';
    $meta_data['og:title'] = $meta['metaTags']['og:title']['value'] ?? '';
    $meta_data['og:description'] = $meta['metaTags']['og:description']['value'] ?? '';
    $meta_array[$route] = $meta_data;
}
file_put_contents('config/meta.php', var_export($meta_array, true));
