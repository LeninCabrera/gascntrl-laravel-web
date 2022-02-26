<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Provider;

class ProviderComponent extends Component
{
    //definicion de variables
    public $companyName;
    public $seller;
    public $address;
    public $town;
    public $conventionalTelephone;
    public $cellphone;
    public $rucNumber;
    public $dgiRegistration;
    public $lineBussiness;

    public function render()
    {
        return view('livewire.provider-component', [
            'providers' => Provider::all(),
        ]);
    }

    public function cleanInput(){
        $this->companyName = "";
        $this->seller = "";
        $this->address = "";
        $this->town = "";
        $this->conventionalTelephone = "";
        $this->cellphone = "";
        $this->rucNumber = "";
        $this->dgiRegistration = "";
        $this->lineBussiness = "";
    }

    public function saved(){
        Provider::updateorCreate(
        [
            'companyName' => $this->companyName,
            'seller' => $this->seller,
            'address' => $this->address,
            'town' => $this->town,
            'conventionalTelephone' => $this->conventionalTelephone,
            'cellphone' => $this->cellphone,
            'rucNumber' => $this->rucNumber,
            'dgiRegistration' => $this->dgiRegistration,
            'lineBussiness' => $this->lineBussiness
        ]);
    }

    public function edit($id){
        $providers = Provider::findorFail($id);
        $this->companyName = $companyName;
        $this->seller = $seller;
        $this->address = $address;
        $this->town = $town;
        $this->conventionalTelephone = $conventionalTelephone;
        $this->cellphone = $cellphone;
        $this->rucNumber = $rucNumber;
        $this->dgiRegistration = $dgiRegistration;
        $this->lineBussiness = $lineBussiness;
        $this->openModal();
    }
}
