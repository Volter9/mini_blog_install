<?php

/**
 * Action initialize
 */
function action_init () {
    session('admin') && session('database') or redirect('?route=database');
    
    load_language();
}

/**
 * GET method of finish action
 * 
 * @param array $input
 */
function action_get ($input) {
    view('layout', [
        'title'    => lang('finish.title'),
        'view'     => 'views/finish',
        'database' => session('database'),
        'admin'    => array_except(session('admin'), ['password_confirmation']),
        'url'      => url('?route=finish')
    ]);
}

/**
 * POST method of finish action
 * 
 * @param array $input
 */
function action_post ($input) {
    try {
        modify_config(
            sprintf('%s/app/config.php', mb_basepath()), 
            sprintf('%s/install/resources/config', basepath())
        );
        
        upload_dump(sprintf('%s/mini_blog.sql', mb_basepath()));
        
        @unlink(sprintf('%s/index.php', basepath()));
        
        view('views/start');
    }
    catch (Exception $e) {
        die($e->getMessage());
    }
}

/**
 * Upload mini_blog mysql dump
 * 
 * @param string $file
 */
function upload_dump ($file) {
    $pdo = create_pdo(session('database'));
    $pdo->exec(file_get_contents($file));
}

/**
 * Modify config
 * 
 * @param string $original
 * @param string $modified
 */
function modify_config ($original, $modified) {
    $file = file_get_contents($modified);
    
    $array = array_values(session('database'));
    $array[] = cookie('language');
    
    array_unshift($array, $file);
    file_put_contents($original, call_user_func_array('sprintf', $array));
}

/**
 * Remove recursively directory
 * 
 * @link http://us3.php.net/rmdir#110489
 * @param string $path
 * @return bool
 */
function remove_directory ($path) {
    // Planning to add option to "delete installer after install"
    $files = array_diff(scandir($path), ['.', '..']); 
    
    foreach ($files as $file) { 
        is_dir("$path/$file") 
            ? remove_directory("$path/$file") 
            : unlink("$path/$file"); 
    } 
    
    return rmdir($path);
}