<?php

namespace Controller;

use Model\Admission;
use Model\Patient;
use Model\User;
use Model\Diagnosis;
use Model\Office;
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
        $patients = Patient::all();
        $users = User::all();
        $diagnosises = Diagnosis::all();
        $offices = Office::all();

        if ($request->method === 'POST' && Admission::create($request->all())) {
            return new View('site.addAdmission');
        }
        // return (new View())->render('site.addAdmission');
        return new View('site.addAdmission',
            ['patients'=>$patients,
                'users'=>$users,
                'diagnosises'=>$diagnosises,
                'offices'=>$offices]);
    }

    public static function oneAdmission(Request $request): string
    {
        $admissions = Admission::where('id', $request->id)->first();
        $patients = Patient::where('id', $admissions->ID_patient)->first();
        $users = User::where('id', $admissions->ID_doctor)->first();
        $diagnosises = Diagnosis::all();
        $diagnos = Diagnosis::where('ID_diagnosis', $admissions->ID_diagnosis)->first();
        if ($request->method === 'POST' && $admissions->where('id', $request->id)->update(['ID_diagnosis' => $request->ID_diagnosis])) {
            
            return new View('site.oneAdmission',
                ['patients' => $patients,
                'users' => $users,
                'diagnosises' => $diagnosises,
                'admissions' => $admissions,
                'diagnos' => $diagnos,]);
        }
        return (new View())->render('site.oneAdmission', [
            'patients' => $patients,
            'users' => $users,
            'diagnosises' => $diagnosises,
            'admissions' => $admissions,
            'diagnos' => $diagnos
        ]);


    }

    // public function addAdmission(Request $request): string
    // {
    //     if ($request->method === 'POST' && Admission::create($request->all())) {
    //         app()->route->redirect('/addAdmission');
    //     }
    //     $patients = Patient::all;
    //     $users = User::all();
    //     $offices = Office::all();
    //     $diagnosises = Diagnosis::all();
    //     return new View('site.addAdmission', ['patients' => patients, 'users' => users, 'offices' => offices, 'diagnosises' => diagnosises]);
    // }
}