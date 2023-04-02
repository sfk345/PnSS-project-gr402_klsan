<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Diagnosis extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $table = 'diagnosis';
    protected $fillable = [
        'id',
        'Diagnosis'
    ];

    protected static function booted()
    {
        static::created(function ($diagnosises) {
            $diagnosises->save();
        });
    }

}