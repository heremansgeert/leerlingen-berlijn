<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;

class Index extends Component
{
    protected $students;
    
    public $search='';
    
    
    public function students(){
        if($this->search == ''){
            return \App\Models\Student::OrderBy('familienaam')
                                      ->OrderBy('voornaam')
                                      ->get();
        }else{
            return \App\Models\Student::Where('familienaam','LIKE',$this->search."%")
                                      ->OrWhere('voornaam','LIKE',$this->search."%")
                                          ->get();
        }
    }
    public function render()
    {
        return view('livewire.student.index');
    }
}
