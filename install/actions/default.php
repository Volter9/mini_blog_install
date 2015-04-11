<?php

/**
 * GET method of default action
 */
function action_get () {
    cookie('language') and redirect('?route=database');
    
    view('layout', [
        'view'  => 'views/language',
        'title' => 'Choose installation language',
        'url'   => url()
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