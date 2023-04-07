<?php

namespace Controller;

use Validators\AllValidator;
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
        $allValidator = new AllValidator();

        if ($request->method === 'POST') {

            $validator = new Validator($request->all(), $allValidator->signupValidator,
                $allValidator->signupValidatorMessages);

            if ($validator->fails()) {
                return new View('site.signup',
                    ['message' => $validator->errors()]);
            }

            $img = $_FILES['img'];
         //       var_dump($img);die();
            $user = User::create($request->all());
            $user->photo($img);
//                var_dump(photo($img));die();
            $user->save();
            app()->route->redirect('/login');
            return false;

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

