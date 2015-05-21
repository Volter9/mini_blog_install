<?php

/**
 * GET method of default action
 */
function action_get () {
    $lang = cookie('language');
    $lang = $lang ? $lang : 'en_US';
    
    load_lang("install/lang/$lang");
    
    view('layout', array(
        'view'  => 'views/language',
        'title' => 'Choose installation language',
        'url'   => url(),
        'step'  => 1
    ));
}

/**
 * POST method of default action
 * 
 * @param array $input
 */
function action_post ($input) {
    if (!array_get($input, 'language')) {
        redirect_with_errors('', array('Language field must be filled.'));
    }
    
    setcookie('language', array_get($input, 'language'));
    
    redirect('?route=database');
}