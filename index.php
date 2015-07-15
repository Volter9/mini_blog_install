<?php

/**
 * mini_blog installation wizard
 * 
 *               ___
 *        '     /*\ \*
 *  \/v\/   ___/*_*\__   '
 *  ) * ( .   |-. -./   . 
 *   '^'\      \/\/\.__    *
 *  .    \  ._/ \/ * A '.    
 *    '  `z)_| * l .    '\   '
 *         \  \   l  /\* '
 *          \  | l* '\ \ / . *  '
 *      *    \/*  l  '\[z)
 *           /     l  .\     .
 *      .   '  *   l   '\ 
 *  *       |?    l   * '\  *
 *         /_____l_______'\_
 *  
 *  [=--==--==--==--=] Installing
 * 
 * @package mini_blog
 */

$time = microtime(true);

define('BASEPATH', __DIR__);

require 'install/functions/boot.php';

session_start();

route(
    array_get($_GET, 'route', 'default'),
    array_merge($_GET, $_POST)
);

printf('<!-- %.5f -->', microtime(true) - $time);