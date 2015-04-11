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
        extract_archive(basepath() . '/mini_blog.zip', basepath());
        upload_dump(basepath() . '/mini_blog.sql');
    }
    catch (Exception $e) {
        die($e->getMessage());
    }
}

/**
 * Extract archive
 * 
 * @throws \Exception
 * @param string $file
 * @param string $destination
 */
function extract_archive ($file, $destination) {
    $zip = new ZipArchive;
    
    if ($zip->open($file)) {
        $zip->extractTo($destination);
        $zip->close();
        
        unlink($file);
    }
    else {
        throw new Exception("File '$file' cannot be opened!");
    }
}

/**
 * Upload mini_blog mysql dump
 * 
 * @param string $file
 */
function upload_dump ($file) {
    $pdo = create_connection(session('database'));
    
    $pdo->exec(file_get_contents($file));
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