<?php

namespace Controller;

use Model\Office;
use Model\Patient;
use Model\Doctor;
use Src\Request;
use Src\View;

class Admin
{
    public function patient(): string
    {
        $patients = Patient::all();
        return (new View())->render('site.patient', ['patients' => $patients]);
    }

    public function addUser(): string
    {
        return (new View())->render('site.addUser', ['users' => $users]);
    }

    // public function addDoctor(Request $request): string
    // {
    //     if ($request->method === 'POST' && Doctor::create($request->all())) {
    //         app()->route->redirect('/hello');
    //     }
    //     return new View('site.addDoctor');
    // }

    public function addOffice(): string
    {
        if ($request->method === 'POST' && Office::create($request->all())) {
            app()->route->redirect('/hello');
        }
        return new View('site.addOffice');
    }
}
