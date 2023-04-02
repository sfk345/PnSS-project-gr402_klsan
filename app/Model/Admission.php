<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'admission';
    protected $fillable = [
        'id',
        'ID_patient',
        'ID_doctor',
        'ID_office',
        'Date_of_admission',
        'ID_diagnosis'
    ];

    protected static function booted()
    {
        static::created(function ($admissions) {
            $admissions->save();
        });
    }
}