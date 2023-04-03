<?php
namespace Controller;


//use Illuminate\Support\Facades\Request;
use Model\Admission;
use Model\Diagnosis;
use Model\Patient;
use Model\User;
use Src\View;
use Src\Request;

class Doctor
{
    public function admission(Request $request): string
    {
//        $patients = Patient::all();
//        $diagnosis = Diagnosis::all();
//        $doctors = Doctor::find(4)->Patronymic;
        $admissions = Admission::all();
        return (new View())->render('site.admission', ['admissions' => $admissions, /*'patients'=>$patients, 'diagnosis'=>$diagnosis,*/ ]);
    }

    public function user(): string
    {
        $users = User::where('Name', app()->auth->user()->Name)->first();
        return (new View())->render('site.user', ['users' => $users]);
    }

    public function onePatient(Request $request): string
    {
        $patients = Patient::where('id', $request->id)->first();
        //$admissions = Admission::where('id', $request->id)->first();
        return (new View())->render('site.onePatient', ['patients' => $patients, /*'admissions' => $admissions*/]);
    }
}
