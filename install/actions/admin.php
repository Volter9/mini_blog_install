<?php

/**
 * Action initialize
 */
function action_init () {
    load_language();
}

/**
 * GET method of database action
 * 
 * @param array $input
 * @param array $errors
 */
function action_get ($input, array $errors = []) {
    view('layout', [
        'errors'      => $errors,
        'input'       => $input,
        'title'       => lang('admin.title'),
        'fields'      => lang('admin.form'),
        'description' => lang('admin.description'),
        'url'         => url('?route=admin'),
        'view'        => 'views/form',
        'prefix'      => 'admin.fields'
    ]);
}

/**
 * POST method of admin action
 * 
 * @param array $input
 * @param array $errors
 */
function action_post ($input) {
    $keys  = ['username', 'password', 'password_confirmation', 'mail'];
    $input = array_extract($input, $keys);
    
    try {
        required_fields($input, $keys, 'admin.errors.empty');
        
        validate(
            $input['password'] === $input['password_confirmation'],
            'admin.errors.passwords_not_match'
        );
        
        validate(
            filter_var($input['mail'], FILTER_VALIDATE_EMAIL),
            'admin.errors.invalid_mail'
        );
    }
    catch (Exception $e) {
        return action_get($input, [lang($e->getMessage())]);
    }
    
    session('admin', $input);
    redirect('?route=finish');
}

/**
 * Rather an assert than validation
 * 
 * @throws \Exception
 * @param bool $condition
 * @param string $message
 */
function validate ($condition, $message) {
    if (!$condition) {
        throw new Exception($message);
    }
}