<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Office extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $table = 'office';
    protected $fillable = [
        'ID_office',
        'Office'
    ];

    protected static function booted()
    {
        static::created(function ($offices) {
            $offices->save();
        });
    }

}