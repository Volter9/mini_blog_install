<?php

/**
 * mini_blog installation wizard
 * 
 *      ______    \|/
 *     /* /   \   -*-
 *     __/ /|\ \  /|\
 *    /  \o..o/|__ |
 *   / /  \/\/ |__|=|
 *  / /_/  \/  |   |
 * /____/\___/\|  /|\
 * 
 * [=====>--] 75%/100%  
 * 
 * @package mini_blog
 */

$time = microtime(true);

define('BASEPATH', __DIR__);

require 'install/functions/boot.php';

session_start();

route(
    array_get($_GET, 'route') ?: 'default', 
    array_merge($_GET, $_POST)
);

printf('<!-- %.5f -->', microtime(true) - $time);