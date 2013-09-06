<?php
foreach (scandir(dirname(__FILE__) . '/classes') as $filename) {
    $path = dirname(__FILE__) . '/classes/' . $filename;

    if (is_file($path)) {
        require_once $path;
    }
}