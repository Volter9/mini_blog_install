<?php

/** 
 * Global variables 
 */
$lang = array();

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
    $root = array_get($_SERVER, 'DOCUMENT_ROOT');
    
    return  $root ? $root : '';
}

/**
 * Load language
 */
function load_language () {
    $language = cookie('language') or redirect('?route=language');
    
    load_lang("install/lang/$language");
}

/**
 * Get mini_blog's basepath (constant MF_APP_DIR should be defined already,
 * additional check is just in case)
 * 
 * @return string
 */
function mb_basepath () {
    return defined('MF_BASEPATH') ? MF_BASEPATH : BASEPATH;
}

/**
 * Get mini_blog's version
 * 
 * @return string
 */
function mb_version () {
    return defined('MB_VERSION') ? MB_VERSION : 'v1.0';
}

require 'array.php';
require 'routing.php';
require 'view.php';
require 'database.php';
require 'forms.php';
require 'lang.php';
require 'input.php';
require 'validation.php';