<?php

namespace Controller;

use Model\Patient;
use Src\Request;
use Src\View;

class Site
{
    public function index(): string
    {
        $patients = Patient::all();
        return (new View())->render('site.patient', ['patients' => $patients]);
    }

    public function indx(Request $request): string
    {
        $patients = Patient::where('ID_patient', $request->ID_patient)->get();
        return (new View())->render('site.patient', ['patients' => $patients]);
    }

    public function hello(): string
    {
        return new View('site.hello', ['message' => 'hello working']);
    }
}

