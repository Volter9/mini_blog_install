<?php

/**
 * Render a view
 * 
 * @param string $__view__
 * @param array $__data__
 */
function view ($__view__, array $__data__ = array()) {
    $__view__ = path("install/html/$__view__");
    
    extract($__data__);
    include $__view__;
}

/**
 * Path to file
 * 
 * @param string $file
 */
function path ($file) {
    return sprintf('%s/%s.php', basepath(), $file);
}

/**
 * Get url to an asset
 * 
 * @param string $file
 * @return string
 */
function asset ($file) {
    return sprintf('/%s/%s', baseurl(basepath()), $file);
}