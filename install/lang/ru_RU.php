<?php 

return [
    'common' => [
        'continue' => 'Продолжить'
    ],
    
    'database' => [
        'title' => 'Настройка БД',
        'description' => 'Для работы c mini_blog, необходима база данных MySQL. Укажите в форме ниже данные для подключения:',
        
        'fields' => [
            'host'     => 'Хост MySQL базы данных',
            'database' => 'Имя базы данных',
            'username' => 'Имя пользователя БД',
            'password' => 'Пароль пользователя БД'
        ],
        
        'errors' => [
            'connection' => 'Не удалось подключится к MySQL',
            'database'   => 'Не удалось подключится к БД',
            'empty'      => 'Форма не была заполнена'
        ],
        
        'form' => [
            'database' => 'text', 
            'host'     => 'text', 
            'username' => 'text', 
            'password' => 'password'
        ]
    ],
    
    'admin' => [
        'title' => 'Создание администратора',
        'description' => 'Вам необходимо создать главного администратора для mini_blog:',
        
        'fields' => [
            'username' => 'Имя админа',
            'password' => 'Пароль админа',
            'password_confirmation' => 'Подтвердить пароль',
            'mail'     => 'Адрес почты'
        ],
        
        'errors' => [
            'empty' => 'Форма не была заполнена',
            'passwords_not_match' => 'Пароли не совпадают',
            'invalid_mail' => 'Не валидный адрес почтового ящика'
        ],
        
        'form' => [
            'username' => 'text', 
            'password' => 'password',
            'password_confirmation' => 'password',
            'mail'     => 'text'
        ]
    ],
    
    'finish' => [
        'title' => 'Установка',
        'end'   => 'mini_blog был установлен!',
        'visit' => [
            'admin' => 'Зайти в админку',
            'site'  => 'Зайти на сайт'
        ]
    ]
];