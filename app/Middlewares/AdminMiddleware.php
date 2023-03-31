<?php

namespace Middlewares;

use Src\Auth\Auth;
use Src\Request;

class AdminMiddleware
{
   public function handle(Request $request)
   {
       //Если не админ, то редирект на страницу входа
       if (app()->auth->user()->Role_id != 1) {
           app()->route->redirect('/login');
       }
   }
}
