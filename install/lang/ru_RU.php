<?php 

return [
    'common' => [
        'continue' => 'Продолжить',
        'install'  => 'Установить'
    ],
    
    'steps' => [
        'language' => 'Выбор языка',
        'database' => 'Настройка соеденения',
        'admin'    => 'Создание администратора',
        'finish'   => 'Конец установки'
    ],
    
    'post' => [
        'title' => 'Привет мир!',
        'url'   => 'hello-world',
        'description' => 'Это твоя первая заметка! :)',
        'text'  => 'Здраствуй. Как можешь догадаться, это твая **первая заметка в блоге**!',
    ],
    
    'database' => [
        'title' => 'Настройка БД',
        'description' => 'Для работы c mini_blog, необходима база данных MySQL. Укажите в форме ниже данные для подключения к базе данных:',
        
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
        'text'  => 'Все готово к установке mini_blog на сайт. Проверьте введенные данные и, если все данные верны, окончите установку.',
        
        'database' => 'Данные соеденения к базе данных',
        'admin'    => 'Данные администратора',
        'installed' => 'mini_blog утсановлен! ',
        
        'visit' => [
            'admin' => 'Зайти в админку',
            'site'  => 'Зайти на сайт'
        ]
    ]
];