<?php
namespace Validators;

use Src\Validator\AbstractValidator;

class AllValidator
{
    public array $signupValidator = [
        'img' => ['sizeavatar:users, img'],
        'Name' => ['required', 'unique' 'cyrillic:users, name'],
        'Surname' => ['required', 'cyrillic:users, surname'],
        'Patronymic' => ['required', 'cyrillic:users, patronymic'],
        'Date_of_birth' => ['required'],
        'Password' => ['required', 'password:users, password', 'varchar:users, password']
    ];

    public array $signupValidatorMessages = [
        'required' => 'Поле :field обязательно для заполнения',
        'unique' => 'Поле :field должно быть уникально',
        'password' => 'Поле :field должно содержать не менее 5 символов',
        'varchar' => 'Поле :field должно содержать только латинские символы',
        'cyrillic' => 'Поле :field должно содержать только кирилические символы',
        'sizeavatar' => 'Размер картинки должен быть в пределах двух мегабайт',
    ];

    public array $addDiagnosisValidator = [
        'Diagnosis' => ['required', 'cyrillic:diagnosis, Diagnosis'],
    ];

    public array $addDiagnosisMessages = [
        'required' => 'Поле :field обязательно для заполнения',
        'cyrillic' => 'Поле :field должно содержать только кирилические символы',
    ];

    public array $addOfficeValidator = [
        'Office' => ['required'],
    ];

    public array $addOfficeMessages = [
        'required' => 'Поле :field обязательно для заполнения'
    ];

    public array $addPatientValidator = [
        'Name' => ['required', 'cyrillic:users, name'],
        'Surname' => ['required', 'cyrillic:users, surname'],
        'Patronymic' => ['required', 'cyrillic:users, patronymic'],
        'Date_of_birth' => ['required'],
    ];

    public array $addPatientMessages = [
        'required' => 'Поле :field обязательно для заполнения',
        'varchar' => 'Поле :field должно содержать только латинские символы',
        'cyrillic' => 'Поле :field должно содержать только кирилические символы',
    ];
    
}