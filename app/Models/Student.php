<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Student extends Model
{
    use HasFactory;

    protected $table='leerlingen';

    //specify a relationship between the Student and Group models
    public function group()
    {
        return $this->belongsTo(Group::class,'klas_id');
    }

    //specify a relationship between the Student and Insurance models
    public function insurance()
    {
        return $this->belongsTo(Insurance::class,'mutualiteit_id');
    }

    //specify a relationship between the Student and Doctor models



}
