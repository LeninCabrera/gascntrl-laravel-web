<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Customer;
use App\Http\Livewire\ComponentContractInterface;

class CustomerComponent extends Component implements ComponentContractInterface
{
    // Public Properties
    public $name;
    public $email;
    public $idCard;
    public $address;
    public $lastName;
    public $cellphone;

    public function render()
    {
        return view('livewire.customer-component',[
           'customers' => Customer::all()
        ]);
    }

    public function resetFilters()
    {
        $properties = [
            'name',
            'email',
            'idCard',
            'address',
            'lastName',
            'cellphone'
        ];
        foreach ($properties as $property) {
            $this->reset($property);
        }
    }

    public function saveNewCustomer()
    {
        $this->saveModelObject();
        $this->resetFilters();
    }

    // Public functions from ComponentContractInterface

    public function saveModelObject()
    {
        Customer::Create([
            'name'          => $this->name,
            'email'         => $this->email,
            'address'       => $this->address,
            'id_Card'       => $this->idCard,
            'last_Name'     => $this->lastName,
            'cellphone'     => $this->cellphone,
        ]);
    }

    public function updateModelObjectById($objectId)
     {
         // TODO: se debe crear la acción de eliminar para el registro de este componente
     }

    public function deleteModelObjectById($objectId)
     {
         // TODO: se debe crear la acción de eliminar para el registro de este componente
     }
}
