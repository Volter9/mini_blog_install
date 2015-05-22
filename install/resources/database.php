<?php

/**
 * Database configuration
 * 
 * - autoload - automatically connect on boot to database
 * - default - connection group by default
 */

return array(
    'autoload' => true,
    'default'  => array(
        'host'     => ':host',
        'name'     => ':database',
        'user'     => ':username',
        'password' => ':password',
        'charset'  => 'utf8'
    )
);