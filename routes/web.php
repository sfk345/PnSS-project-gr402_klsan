<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
   ->middleware('auth');
// Route::add('GET', '/doctor', [Controller\Site::class, 'doctor'])
//    ->middleware('auth');
Route::add('GET', '/patient', [Controller\Site::class, 'patient'])
   ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
