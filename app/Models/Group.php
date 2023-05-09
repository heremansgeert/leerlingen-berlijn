u<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $table='klassen';

    //specify a relationship between the Group and Student models
    public function students()
    {
        return $this->hasMany(Student::class,'klas_id');
    }
}
