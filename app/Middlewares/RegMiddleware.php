<?php

namespace Middlewares;

use Src\Auth\Auth;
use Src\Request;

class RegMiddleware
{
   public function handle(Request $request)
   {
       //Если не регистратура, то редирект на страницу входа
       if (app()->auth->user()->Role_id != 2) {
           app()->route->redirect('/login');
       }
   }
}
