<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    
    
    protected $table='artsen';
    
    //specify a relationship between the doctor and Student models
    public function students()
    {
        return $this->hasMany(Student::class,'huisarts_id');
    }
}
