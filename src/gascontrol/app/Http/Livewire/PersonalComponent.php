<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Personal;
use App\Http\Livewire\ComponentContractInterface;

class PersonalComponent extends Component implements ComponentContractInterface
{
    // Public Properties
    public $name;
    public $email;
    public $salary;
    public $idCard;
    public $address;
    public $lastName;
    public $cellphone;
    public $jobPosition;

    // Public functions from livewire/component
    public function render()
    {
        return view('livewire.personal-component',[
            'personals' => Personal::all()
        ]);
    }

    //Public functions

    public function resetFilters()
    {
        /*$properties = [
            "name",
            "email",
            "salary",
            "idCard",
            "address",
            "lastName",
            "cellphone",
            "jobPosition",
        ];
        foreach ($properties as $property) {
            $this->reset($property);
        }*/
    }

    public function saveNewPersonal()
    {
        $this->saveModelObject();
        $this->resetFilters();
    }

    public function updatePersonal($personalId)
    {
        updateModelObjectById($personalId);
    }

    //TODO aun no funciona este metodo necesita probar el editar en la misma vista
    public function updateViewPersonal($personalId)
    {
        $personal = Personal::findOrFail($personalId);
            $personal->name = $this->name = 'name';
            /*$this->email = $personal->email;
            $this->salary = $personal->salary;
            $this->idCard = $personal->id_Card;
            $this->address = $personal->address;
            $this->lastName = $personal->last_Name;
            $this->cellphone = $personal->cellphone;
            $this->jobPosition = $personal->job_Position;*/
    }

    // Public functions from ComponentContractInterface

    public function saveModelObject()
    {
        Personal::Create(
            [
                'name'          =>      $this->name,
                'email'         =>      $this->email,
                'salary'        =>      $this->salary,
                'id_Card'       =>      $this->idCard,
                'address'       =>      $this->address,
                'last_Name'     =>      $this->lastName,
                'cellphone'     =>      $this->cellphone,
                'job_Position'  =>      $this->jobPosition,
            ]);
    }

    //TODO Esta incompleto este metodo
    public function updateModelObjectById($objectId)
     {
        $personal = Personal::findOrFail($personalId);

        $personal->name           =       'name';
        $personal->email          =       'email';
        $personal->salary         =       'salary';
        $personal->id_Card        =       'idCard';
        $personal->address        =       'address';
        $personal->last_Name      =       'lastName';
        $personal->cellphone      =       'cellphone';
        $personal->job_Position   =       'jobPosition';
     }

    public function deleteModelObjectById($objectId)
     {
         // TODO: se debe crear la acción de eliminar para el registro de este componente
     }

}
