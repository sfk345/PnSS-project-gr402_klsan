<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'patient';
    protected $fillable = [
        'Surname',
        'Name',
        'Patronymic',
        'Date_of_birth',
    ];
}
