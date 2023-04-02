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
        'id',
        'Office'
    ];

    protected static function booted()
    {
        static::created(function ($offices) {
            $offices->save();
        });
    }

}