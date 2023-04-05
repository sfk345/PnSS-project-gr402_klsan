<?php

namespace Middlewares;

use Src\Auth\Auth;
use Src\Request;

class DocMiddleware
{
    public function handle(Request $request)
    {
        //Если не врач, то редирект на страницу входа
        if (app()->auth->user()->Role_id != 3) {
            app()->route->redirect('/login');
        }
    }
}