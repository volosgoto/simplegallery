<?php

$images = scandir(__DIR__ . '/img/');

function dir_files($images){
    $filesInFolder = '';
    foreach ($images as $key => $file) {
        if ( !is_dir($file) ) {
            $filesInFolder .= $file . ',';
            
        }
    }
    $arrayFiles = (explode(",", $filesInFolder));
    $unsetLastElement = array_pop($arrayFiles);
    return $arrayFiles;
}

//echo dir_files($images);