<?php
namespace Controller;


use Model\Admission;
use Model\User;
use Src\View;

class Doctor
{
    public function admission(): string
    {
        $admissions = Admission::all();
        return (new View())->render('site.admission', ['admissions' => $admissions]);
    }

    public function user(): string
    {
        $users = User::where('Name', app()->auth->user()->Name)->first();
        return (new View())->render('site.user', ['users' => $users]);
    }
}
