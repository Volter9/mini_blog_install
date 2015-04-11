<?php

/**
 * Render a view
 * 
 * @param string $__view__
 * @param array $__data__
 */
function view ($__view__, array $__data__ = []) {
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