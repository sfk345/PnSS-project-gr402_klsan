<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Src\Auth\IdentityInterface;

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

    // public function adm():BelongTo
    // {
    //     return $this->BelongTo(
    //         Admissions::class,
    //         ''
    //     )
    // }

    protected static function booted()
    {
        static::created(function ($admissions) {
            $admissions->save();
        });
    }
}