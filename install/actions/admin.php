<?php

/**
 * Action initialize
 */
function action_init () {
    unset($_SESSION['errors']);
    
    load_language();
}

/**
 * GET method of database action
 * 
 * @param array $input
 * @param array $errors
 */
function action_get ($input, array $errors = array()) {
    $admin = session('admin');
    
    view('layout', array(
        'errors'      => $errors,
        'input'       => array_merge($input, $admin ? $admin : array()),
        'title'       => lang('admin.title'),
        'fields'      => lang('admin.form'),
        'description' => lang('admin.description'),
        'url'         => url('?route=admin'),
        'view'        => 'views/form',
        'prefix'      => 'admin.fields',
        'step'        => 3
    ));
}

/**
 * POST method of admin action
 * 
 * @param array $input
 * @param array $errors
 */
function action_post ($input) {
    $keys  = array('username', 'password', 'password_confirmation', 'mail');
    $input = array_extract($input, $keys);
    
    try {
        required_fields($input, $keys, 'admin.errors.empty');
        
        $confirm = $input['password'] === $input['password_confirmation'];
        $mail    = filter_var($input['mail'], FILTER_VALIDATE_EMAIL);
        
        validate($confirm, 'admin.errors.passwords_not_match');
        validate($mail   , 'admin.errors.invalid_mail');
    }
    catch (Exception $e) {
        return action_get($input, array(lang($e->getMessage())));
    }
    
    session('admin', $input);
    redirect('?route=finish');
}