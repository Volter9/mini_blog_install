<?php

/** 
 * Global variables 
 */
$lang = [];

/**
 * Get base path
 * 
 * @return string
 */
function basepath () {
    return BASEPATH;
}

/**
 * Get document root
 * 
 * @return string
 */
function document_root () {
    return array_get($_SERVER, 'DOCUMENT_ROOT') ?: '';
}

/**
 * Load language
 */
function load_language () {
    $language = cookie('language') or redirect();
    
    load_lang("install/lang/$language");
}

require 'array.php';
require 'routing.php';
require 'view.php';
require 'database.php';
require 'forms.php';
require 'lang.php';
require 'input.php';
require 'validation.php';