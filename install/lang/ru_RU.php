<?php 

return array(
    'common' => array(
        'continue' => 'Продолжить',
        'install'  => 'Установить'
    ),
    
    'steps' => array(
        'language' => 'Выбор языка',
        'database' => 'Настройка соеденения',
        'admin'    => 'Создание администратора',
        'finish'   => 'Конец установки'
    ),
    
    'post' => array(
        'title' => 'Привет мир!',
        'url'   => 'hello-world',
        'description' => 'Это твоя первая заметка! :)',
        'text'  => 'Здраствуй. Как можешь догадаться, это твая **первая заметка в блоге**!',
    ),
    
    'database' => array(
        'title' => 'Настройка БД',
        'description' => 'Для работы c mini_blog, необходима база данных MySQL. Укажите в форме ниже данные для подключения к базе данных:',
        
        'fields' => array(
            'host'     => 'Хост MySQL базы данных',
            'database' => 'Имя базы данных',
            'username' => 'Имя пользователя БД',
            'password' => 'Пароль пользователя БД'
        ),
        
        'errors' => array(
            'connection' => 'Не удалось подключится к MySQL',
            'database'   => 'Не удалось подключится к БД',
            'empty'      => 'Форма не была заполнена'
        ),
        
        'form' => array(
            'database' => 'text', 
            'host'     => 'text', 
            'username' => 'text', 
            'password' => 'password'
        )
    ),
    
    'admin' => array(
        'title' => 'Создание администратора',
        'description' => 'Вам необходимо создать главного администратора для mini_blog:',
        
        'fields' => array(
            'username' => 'Имя админа',
            'password' => 'Пароль админа',
            'password_confirmation' => 'Подтвердить пароль',
            'mail'     => 'Адрес почты'
        ),
        
        'errors' => array(
            'empty' => 'Форма не была заполнена',
            'passwords_not_match' => 'Пароли не совпадают',
            'invalid_mail' => 'Не валидный адрес почтового ящика'
        ),
        
        'form' => array(
            'username' => 'text', 
            'password' => 'password',
            'password_confirmation' => 'password',
            'mail'     => 'text'
        )
    ),
    
    'finish' => array(
        'title' => 'Установка',
        'end'   => 'mini_blog был установлен!',
        'text'  => 'Все готово к установке mini_blog на сайт. Проверьте введенные данные и, если все данные верны, окончите установку.',
        
        'database' => 'Данные соеденения к базе данных',
        'admin'    => 'Данные администратора',
        'installed' => 'mini_blog утсановлен! ',
        
        'visit' => array(
            'admin' => 'Зайти в админку',
            'site'  => 'Зайти на сайт'
        )
    )
);