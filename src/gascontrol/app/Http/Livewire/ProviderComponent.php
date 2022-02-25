<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Provider;

class ProviderComponent extends Component
{
    //definicion de variables
    public $providers, $id, $seller, $address,
    $town, $conventionalTelephone, $cellphone,
    $rucNumber, $dgiRegistration, $lineBussiness;

    public function render()
    {
        $this->providers =Provider::all();
        return view('livewire.provider-component');
    }

    public function Saved(){

    }
}
