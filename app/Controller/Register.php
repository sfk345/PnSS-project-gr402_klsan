<?php

namespace Controller;

use Model\Admission;
use Model\Patient;
use Src\Request;
use Src\View;

class Register
{
    public function addPatient(Request $request): string
    {
        if ($request->method === 'POST' && Patient::create($request->all())) {
            app()->route->redirect('/patient');
        }
        return (new View())->render('site.addPatient');

    }

    public function addAdmission(Request $request): string
    {

        if ($request->method === 'POST' && Admission::create($request->all())) {
            app()->route->redirect('/admission');
        }
        return (new View())->render('site.addAdmission');
    }
}