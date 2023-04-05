<?php

namespace Controller;

use Src\Validator\Validator;
use Model\Patient;
use Model\User;
use Src\Request;
use Src\View;
use Src\Auth\Auth;

class Site
{
    public function hello(): string
    {
        return new View('site.hello');
    }

    public function signup(Request $request): string
    {
        if ($request->method === 'POST') {

            $uploads_dir = $_SERVER['DOCUMENT_ROOT']. '/public/img/';
            $img = $_FILES['img'];
            // var_dump($_FILES['img']);
            $tmp_file = $img['tmp_name'];
            // var_dump($img['tmp_name']);
            move_uploaded_file($tmp_file, $uploads_dir . $img['name']);
            // var_dump($tmp_file, $uploads_dir . $img['name']);die();

            $validator = new Validator($request->all(), [
                'Name' => ['required', 'cyrillic:users, name'],
                'Surname' => ['required', 'cyrillic:users, surname'],
                'Patronymic' => ['required', 'cyrillic:users, patronymic'],
                'Date_of_birth' => ['required'],
//                'Gender' => ['required'],
                'Password' => ['required', 'password:users, password', 'varchar:users, password']
            ], [
                'required' => 'Поле :field пусто',
//                'unique' => 'Поле :field должно быть уникально',
                'password' => 'Поле :field должен содержать не менее 5 символов',
                'varchar' => 'Поле :field должен содержать только латинские символы',
                'cyrillic' => 'Поле :field должен содержать только кирилические символы',
            ]);

            if($validator->fails()){
                return new View('site.signup',
                    ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
            }

            if (User::create($request->all())) {
                app()->route->redirect('/login');
            }
        }
        return new View('site.signup');
    }


    public function login(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.login');
        }
        //Если удалось аутентифицировать пользователя, то редирект
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/hello');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/hello');
    }

    
}

