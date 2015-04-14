<?php 

return [
    'common' => [
        'continue' => 'Continue',
        'install'  => 'Установить'
    ],
    
    'steps' => [
        'language' => 'Choose language',
        'database' => 'Database setup',
        'admin'    => 'Administrator creation',
        'finish'   => 'Done!'
    ],
    
    'database' => [
        'title' => 'Database setup',
        'description' => 'To work with mini_blog, you need a MySQL database. In the form below, please, specify connection details:',
        
        'fields' => [
            'host'     => 'MySQL database host',
            'database' => 'Database name',
            'username' => 'Database user',
            'password' => 'Database user\'s password'
        ],
        
        'errors' => [
            'connection' => 'Couldn\'t connect to MySQL',
            'database'   => 'Couldn\'t connect to MySQL database',
            'empty'      => 'The form isn\'t completely filled'
        ],
        
        'form' => [
            'database' => 'text', 
            'host'     => 'text', 
            'username' => 'text', 
            'password' => 'password'
        ]
    ],
    
    'admin' => [
        'title' => 'Administrator creation',
        'description' => 'You have to create an admin for mini_blog:',
        
        'fields' => [
            'username' => 'Admin username',
            'password' => 'Admin password',
            'password_confirmation' => 'Confirm admin password',
            'mail'     => 'Admin email'
        ],
        
        'errors' => [
            'empty'               => 'The form isn\'t completely filled',
            'passwords_not_match' => 'Passwords don\'t match',
            'invalid_mail'        => 'Admin email isn\'t a valid email address'
        ],
        
        'form' => [
            'username' => 'text', 
            'password' => 'password',
            'password_confirmation' => 'password',
            'mail'     => 'text'
        ]
    ],
    
    'finish' => [
        'title' => 'Finishing install',
        'end'   => 'mini_blog was installed!',
        'text'  => 'Everything is ready for mini_blog installation. Check the supplied data below, and, if everything is correct, finish the installation.',
        
        'database' => 'MySQL database connection details',
        'admin'    => 'Administrator data',
        'installed' => 'mini_blog was installed! ',
        
        'visit' => [
            'admin' => 'Visit the admin panel',
            'site'  => 'Visit your site'
        ]
    ]
];