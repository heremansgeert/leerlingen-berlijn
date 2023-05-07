<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    use HasFactory;

    protected $table='mutualiteiten';
    
    //specify a relationship between the Insurance and Student models
    public function students()
    {
        return $this->hasMany(Student::class,'mutualiteit_id');
    }
}
