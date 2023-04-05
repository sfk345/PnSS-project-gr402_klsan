<?php
namespace Validators;

use Src\Validators\AbstractValidator;

class AllValidator
{
    public array $signupValidator = [
        'img' => ['sizeavatar', 'formatavatar'],
        'Name' => ['required', 'cyrillic:users, name'],
        'Surname' => ['required', 'cyrillic:users, surname'],
        'Patronymic' => ['required', 'cyrillic:users, patronymic'],
        'Date_of_birth' => ['required'],
//                'Gender' => ['required'],
        'Password' => ['required', 'password:users, password', 'varchar:users, password']
    ];

    public array $signupValidatorMessages = [
        'required' => 'Поле :field обязательно для заполнения',
//                'unique' => 'Поле :field должно быть уникально',
        'password' => 'Поле :field должен содержать не менее 5 символов',
        'varchar' => 'Поле :field должен содержать только латинские символы',
        'cyrillic' => 'Поле :field должен содержать только кирилические символы',
        'sizeavatar' => 'Размер картинки должен быть в пределах двух мегабайт',
        'formatavatar' => 'Непозволительный формат картинки'
    ];

    
}