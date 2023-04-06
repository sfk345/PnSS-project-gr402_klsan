<?php

namespace Controller;

use Validators\AllValidator;
use Src\Validator\Validator;
use Model\Admission;
use Model\Office;
use Model\Patient;
use Model\Diagnosis;
use Model\Post;
use Model\User;
use Src\Request;
use Src\View;

class Admin
{
    // public function patient(Request $request): string
    // {
    //     $users = User::all();
    //     $admissions = Admission::all();
    //     $patients = Patient::all();
    //     if ($request->method === 'POST'){
    //         $date = Admission::where('id', $request->Date_of_admission)->first();
    //         $doc = User::where('id', $request->Surname)->first();
    //         $patients = Patient::where('Date_of_admission', $date->id)->where('Surname', $doc->id)->get();
    //         return (new View()) -> render('site.patient', [
    //             'users'=>$users,
    //             'admissions'=>$admissions,
    //             'patients'=>$patients]);
    //     }
    //     return (new View())->render('site.patient', ['patients' => $patients]);
    // }

    public function patient(Request $request): string
    {
        $patient = Patient::all();
        if ($request->method === 'POST') {
            $patient = Patient::where('Surname', $request->find)->get();
            return (new View())->render('site.patient', ['patient' => $patient]);
        }
        return (new View())->render('site.patient', ['patient' => $patient]);
    }

    public function addOffice(Request $request): string
    {
        $allValidator = new AllValidator();

        if ($request->method === 'POST') {

            $validator = new Validator($request->all(), $allValidator->addOfficeValidator,
            $allValidator->addOfficeMessages);

            if($validator->fails()){
                return new View('site.addOffice',
                    ['message' => $validator->errors()]);
            }else{
                $offices = Office::create($request->all());
                app()->route->redirect('/addOffice');
            }
        }
        return (new View())->render('site.addOffice');
    }

    public function addDiagnosis(Request $request): string
    {

        $allValidator = new AllValidator();

        if ($request->method === 'POST') {

            $validator = new Validator($request->all(), $allValidator->addDiagnosisValidator,
            $allValidator->addDiagnosisMessages);

            if($validator->fails()){
                return new View('site.signup',
                    ['message' => $validator->errors()]);
            }else{
                $diagnosis = Diagnosis::create($request->all());
                app()->route->redirect('/diagnosises');
            }
        }
        return (new View())->render('site.addDiagnosis');
    }

    public function diagnosises(): string
    {
        $diagnosises = Diagnosis::all();
        return (new View())->render('site.diagnosises', ['diagnosises' => $diagnosises]);
    }

    public function offices(): string
    {
        $offices = Office::all();
        return (new View())->render('site.offices', ['offices' => $offices]);
    }

}
