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
//        'id',
        'Surname',
        'Name',
        'Patronymic',
        'Date_of_birth',
    ];
    protected static function booted()
    {
        static::created(function ($patients) {
            $patients->save();
        });
    }

    public function admissions()
    {
        return $this->hasMany(Admission::class,'ID_patient', 'id');
    }

//    public function ()
//    {
//        return $this->hasMany(Admission::class,'ID_patient', 'id');
//    }
}
