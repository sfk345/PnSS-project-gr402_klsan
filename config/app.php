<?php
return [
   //Класс аутентификации
   'auth' => \Src\Auth\Auth::class,
   //Клас пользователя
   'identity' => \Model\User::class,
   //Классы для middleware
   'routeMiddleware' => [
       'auth' => \Middlewares\AuthMiddleware::class,
       'admin' => \Middlewares\AdminMiddleware::class,
       'reg' => \Middlewares\RegMiddleware::class,
       'doc' => \Middlewares\DocMiddleware::class,
   ],
   'routeAppMiddleware' => [
       'csrf' => \Middlewares\CSRFMiddleware::class,
       'trim' => \Middlewares\TrimMiddleware::class,
       'specialChars' => \Middlewares\SpecialCharsMiddleware::class,
   ],
   'validators' => [
       'required' => \Validators\RequireValidator::class,
       'unique' => \Validators\UniqueValidator::class,
       'password' => \Validators\PasswordValidator::class,
       'varchar' => \Validators\VarcharValidator::class,
       'cyrillic' => \Validators\CyrillicValidator::class,
       'sizeavatar' => \Validators\SizeAvatarValidator::class,
       'formatavatar' => \Validators\FormatAvatarValidator::class,
//       'unique' => \Validators\UniqueValidator::class,
   ]
];
