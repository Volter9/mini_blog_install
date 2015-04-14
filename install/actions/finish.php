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
    view('layout', [
        'title'    => lang('finish.title'),
        'view'     => 'views/finish',
        'database' => session('database'),
        'admin'    => array_except(session('admin'), ['password_confirmation']),
        'url'      => url('?route=finish'),
        'step'     => 4
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
        
        $user = array_merge(['group_id' => 1], array_except(
            session('admin'), ['password_confirmation']
        ));
        
        $pdo = create_pdo(session('database'));
        
        upload_dump($pdo, sprintf('%s/install/resources/dump.sql', basepath()));
        
        $id   = insert($pdo, 'users', $user);
        $post = array_merge(['user_id' => $id, 'category_id' => 1], lang('post'));
        
        insert($pdo, 'posts', $post);
        
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
    $files = array_diff(scandir($path), ['.', '..']); 
    
    foreach ($files as $file) { 
        is_dir("$path/$file") 
            ? remove_directory("$path/$file") 
            : unlink("$path/$file"); 
    } 
    
    return rmdir($path);
}