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

            /*$uploads_dir = $_SERVER['DOCUMENT_ROOT']. '/public/img/';
            $img = $_FILES['img'];
            // var_dump($_FILES['img']);
            $tmp_file = $img['tmp_name'];
            // var_dump($img['tmp_name']);
            move_uploaded_file($tmp_file, $uploads_dir . $img['name']);
            // var_dump($tmp_file, $uploads_dir . $img['name']);die();*/
            /*$img = $_FILES['img'];
            $imgname = md5(time()). '.'. explode('/', $img['type'])[1];
            $this->filename = $imgname;
            move_uploaded_file($img['tmp_name'], __DIR__. '/../../public/img/' . $imgname);*/

            $validator = new Validator($request->all(), $allValidator->signupValidator,
            $allValidator->signupValidatorMessages);

            if($validator->fails()){
                return new View('site.signup',
                    ['message' => $validator->errors()]);
            }else{
                $img = $_FILES['img'];
                $user = User::create($request->all());
                $user->photo($img);
                $user->save();
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

