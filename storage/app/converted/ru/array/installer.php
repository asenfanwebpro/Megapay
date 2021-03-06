<?php
return [
    'welcome'           => [
        'name'      => 'Платить деньги',
        'version'   => 'В 1.7',
        'title'     => 'Добро пожаловать в установщик!',
        'sub-title' => 'Ваш сервер имеет все требования и разрешения для этого приложения. Перед запуском нам понадобится информация о вашей базе данных:',
        'item1'     => 'Имя базы данных',
        'item2'     => 'Вход в базу данных',
        'item3'     => 'Пароль базы данных',
        'item4'     => 'Хост базы данных',
        'message'   => 'Мы будем использовать эту информацию для обновления файла среды',
        'button'    => 'Поехали !',

    ],
    'database'          => [
        'title'          => 'Настройка базы данных',
        'sub-title'      => 'Если вы не знаете, как заполнить эту форму, свяжитесь с вашим хостингом.',
        'dbname-label'   => 'Имя базы данных (где вы хотите, чтобы ваше приложение было)',
        'username-label' => 'Имя пользователя (Ваш логин базы данных)',
        'password-label' => 'Пароль (пароль вашей базы данных)',
        'host-label'     => 'Имя хоста (должно быть "localhost", если оно не работает, спросите вашего хостера)',
        'button'         => 'послать',
        'wait'           => 'Немного терпения ...',

    ],
    'database-error'    => [
        'title'     => 'Ошибка подключения к базе данных',
        'sub-title' => 'Мы не можем подключиться к базе данных с вашими настройками:',
        'item1'     => 'Вы уверены, что ваше имя пользователя и пароль?',
        'item2'     => 'Вы уверены, что ваше имя хоста?',
        'item3'     => 'Вы уверены, что ваш сервер базы данных работает?',
        'message'   => 'Если вы не уверены, что понимаете все эти условия, вам следует обратиться к вашему хостеру.',
        'button'    => 'Попробуйте снова !',

    ],
    'requirement-error' => [
        'title'       => 'Ошибка требования',
        'requirement' => 'Мы не можем установить это приложение, потому что это требование PHP отсутствует:',
        'php-version' => 'Версия PHP должна быть как минимум 5.5.9, но ваша версия',
        'message'     => 'Вы должны исправить эту ошибку, чтобы продолжить установку!',

    ],
    'permission-error'  => [
        'title'     => 'Ошибка разрешения',
        'sub-title' => 'Мы не можем установить это приложение, потому что эта папка недоступна для записи:',
        'message'   => 'Вы должны исправить эту ошибку, чтобы продолжить установку!',

    ],
    'register'          => [
        'title'      => 'Создание администратора',
        'sub-title'  => 'Теперь необходимо ввести информацию для создания администратора',
        'base-label' => 'Ваш',
        'message'    => 'Для входа вам понадобится пароль, так что держите его в безопасности!',
        'button'     => 'послать',

    ],
    'register-fields'   => [
        'first_name' => 'Имя',
        'last_name'  => 'Фамилия',
        'email'      => 'Эл. адрес',
        'password'   => 'пароль',

    ],
    'end'               => [
        'title'     => 'Удачной установки!',
        'sub-title' => 'Приложение и сейчас установлено, и вы можете использовать его',
        'login'     => 'Ваш логин:',
        'password'  => 'Ваш пароль :',
        'button'    => 'Авторизоваться',

    ]];
