<?php

/**
 * Load language file
 * 
 * @param string $file
 */
function load_lang ($file) {
    global $lang;
    
    $file = sprintf('%s/%s.php', basepath(), $file);
    
    file_exists($file) and $lang = require $file;
}

/**
 * Get language string
 * 
 * @param string $string
 * @return mixed
 */
function lang ($string) {
    global $lang;
    
    return array_get($lang, $string);
}