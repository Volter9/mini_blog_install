<?php

/**
 * Here are some thoughts:
 * 
 * I need to create a action which checks writing permissions on:
 * - MB_BASEPATH/app/config.php
 * - MB_BASEPATH/app/install
 * 
 * I need to came up with some logic that checks permissions...
 */

/**
 * GET method of default action
 */
function action_get () {
    load_lang('install/lang/en_US');
    
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