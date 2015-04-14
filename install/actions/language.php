<?php

/**
 * GET method of default action
 */
function action_get () {
    load_lang('install/lang/en_US');
    
    view('layout', [
        'view'  => 'views/language',
        'title' => 'Choose installation language',
        'url'   => url(),
        'step'  => 1
    ]);
}

/**
 * POST method of default action
 * 
 * @param array $input
 */
function action_post ($input) {
    if (!array_get($input, 'language')) {
        redirect_with_errors('', [
            'Language field must be filled.'
        ]);
    }
    
    setcookie('language', array_get($input, 'language'));
    
    redirect('?route=database');
}