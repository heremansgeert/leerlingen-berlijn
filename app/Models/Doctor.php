<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Student;

class Doctor extends Model
{
    use HasFactory;

    protected $table='artsen';

    //specify a relationship between the Doctor and Student models
    public function students()
    {
        return $this->hasMany(Student::class,'arts_id');
    }



}
