<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Customer;

class CustomerComponent extends Component
{
    public $idCard, $name, $lastName, $address,
    $cellphone, $email;

    public function render()
    {
        return view('livewire.customer-component',[
           'customers' => Customer::all()
        ]);
    }

    public function saveNewCustomer(){
        Customer::Create([
            'id_Card' => $this->idCard,
            'name' => $this->name,
            'last_Name' => $this->lastName,
            'cellphone' => $this->cellphone,
            'address' => $this->address,
            'email' => $this->email,
        ]);
    }
}
