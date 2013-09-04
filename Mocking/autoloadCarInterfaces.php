<?php

foreach (scandir(dirname(__FILE__) . '/carInterface') as $filename) {
    $path = dirname(__FILE__) . '/carInterface/' . $filename;
    
    if (is_file($path)) {
        require_once $path;
    }
}