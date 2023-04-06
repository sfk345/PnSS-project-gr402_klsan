<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])->middleware('auth');
Route::add('GET', '/user', [Controller\Doctor::class, 'user'])->middleware('auth');
Route::add('GET', '/patient', [Controller\Admin::class, 'patient'])->middleware('auth');

Route::add('GET', '/diagnosises', [Controller\Admin::class, 'diagnosises'])->middleware('auth');
Route::add('GET', '/offices', [Controller\Admin::class, 'offices'])->middleware('auth');

Route::add(['GET', 'POST'], '/addPatient', [Controller\Register::class, 'addPatient'])->middleware('auth');
Route::add(['GET', 'POST'], '/addAdmission', [Controller\Register::class, 'addAdmission'])->middleware('auth');
Route::add(['GET', 'POST'], '/addOffice', [Controller\Admin::class, 'addOffice'])->middleware('auth');
Route::add(['GET', 'POST'], '/addDiagnosis', [Controller\Admin::class, 'addDiagnosis'])->middleware('auth');

Route::add('GET', '/onePatient', [Controller\Doctor::class, 'onePatient'])->middleware('auth');
Route::add(['GET', 'POST'], '/oneAdmission', [Controller\Register::class, 'oneAdmission'])->middleware('auth');


Route::add(['GET', 'POST'], '/updateDiagnosis', [Controller\Doctor::class, 'updateDiagnosis'])->middleware('auth');
Route::add('GET', '/admission', [Controller\Doctor::class, 'admission'])->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
