<?php

/**
 * Action initialize
 */
function action_init () {
    session('database') or redirect('?route=database');
    session('admin') or redirect('?route=admin');
    
    load_language();
}

/**
 * GET method of finish action
 * 
 * @param array $input
 */
function action_get ($input) {
    view('layout', array(
        'title'    => lang('finish.title'),
        'view'     => 'views/finish',
        'database' => session('database'),
        'admin'    => array_except(session('admin'), array('password_confirmation')),
        'url'      => url('?route=finish'),
        'step'     => 4
    ));
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
        
        $pdo = create_pdo(session('database'));
        
        upload_dump($pdo, sprintf('%s/install/resources/dump.sql', basepath()));
        create_post($pdo, create_user($pdo));
        
        @unlink(sprintf('%s/index.php', basepath()));
        
        view('views/start', array('title' => lang('finish.end')));
    }
    catch (Exception $e) {
        die($e->getMessage());
    }
}

/**
 * Create a user
 * 
 * @param \PDO $pdo
 * @return int
 */
function create_user (PDO $pdo) {
    $user = array_except(session('admin'), array('password_confirmation'));
    $user = array_merge(array('group_id' => 1), $user);
    
    $user['password'] = md5($user['password']);
    
    return insert($pdo, 'users', $user);
}

/**
 * Create a post
 * 
 * @param \PDO $pdo
 * @param int $id
 */
function create_post (PDO $pdo, $id) {
    $post = array('user_id' => $id, 'category_id' => 1);
    $post = array_merge($post, lang('post'));
    
    insert($pdo, 'posts', $post);
}

/**
 * Upload mini_blog mysql dump
 * 
 * @param \PDO $pdo
 * @param string $file
 */
function upload_dump (PDO $pdo, $file) {
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
    $files = array_diff(scandir($path), array('.', '..')); 
    
    foreach ($files as $file) { 
        is_dir("$path/$file") 
            ? remove_directory("$path/$file") 
            : unlink("$path/$file"); 
    } 
    
    return rmdir($path);
}