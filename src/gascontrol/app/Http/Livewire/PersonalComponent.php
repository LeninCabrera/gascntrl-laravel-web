<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Personal;

class PersonalComponent extends Component
{
    public $idCard, $name, $lastName, $address,
    $cellphone, $email, $jobPosition, $salary;

    public function render()
    {
        return view('livewire.personal-component',[
            'personals' => Personal::all()
        ]);
    }

    public function saveNewPersonal(){
        Personal::Create([
            'id_Card' => $this->idCard,
            'name' => $this->name,
            'last_Name' => $this->lastName,
            'address' => $this->address,
            'cellphone' => $this->cellphone,
            'email' => $this->email,
            'job_Position' => $this->jobPosition,
            'salary' => $this->salary
        ]);
    }
}
