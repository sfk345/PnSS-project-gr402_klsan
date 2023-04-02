<?php

namespace Controller;

use Model\Office;
use Model\Patient;
use Model\Doctor;
use Model\Diagnosis;
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

    public function addAdm(): string
    {
        return (new View())->render('site.addAdm', ['adms' => $adms]);
    }    

    public function addOffice(Request $request): string
    {
        if ($request->method === 'POST' && Office::create($request->all())) {
            app()->route->redirect('/hello');
        }
        return new View('site.addOffice');
    }

    public function addDiagnosis(Request $request): string
    {
        if ($request->method === 'POST' && Diagnosis::create($request->all())) {
            app()->route->redirect('/hello');
        }
        return new View('site.addDiagnosis');
    }
}
