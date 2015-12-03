<?php
$start = 'http://radio567.vtuner.com/setupapp/radio567/asp/BrowseXPA/LoginXML.asp';

fetch($start);

function fetch($url)
{
    echo "Fetching " . $url . "\n";
    $cacheFile = str_replace(array('/'), '-', $url);
    if (file_exists($cacheFile)) {
        $url = $cacheFile;
    } else {
        if (strpos($url, '?') !== false) {
            $url .= '&';
        } else {
            $url .= '?';
        }
        $url .= 'mac=000000004C3B4B60322F&fver=3.8.36.6921&dlang=ger&hwid=13062&startitems=1&enditems=1000';
    }
    $content = file_get_contents($url);
    if ($content === false) {
        echo "error fetching\n";
        return false;
    }
    if ($url != $cacheFile) {
        file_put_contents($cacheFile, $content);
    }

    $sx = simplexml_load_string($content);
    foreach ($sx->Item as $xItem) {
        if ($xItem->ItemType == 'Dir') {
            fetch($xItem->UrlDir);
        } else if ($xItem->ItemType == 'ShowOnDemand') {
            fetch($xItem->ShowOnDemandURL);
        }
    }
    //echo $content . "\n";
}
?>
