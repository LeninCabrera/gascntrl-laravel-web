<?php

namespace App\Http\Livewire\Provider;

use Livewire\Component;
use App\Models\Provider;
use App\Http\Livewire\ComponentContractInterface;

class ProviderComponent extends Component implements ComponentContractInterface
{
    // Public Properties
    public $town;
    public $seller;
    public $address;
    public $cellphone;
    public $rucNumber;
    public $companyName;
    public $lineBussiness;
    public $dgiRegistration;
    public $conventionalTelephone;

    // Public functions from Livewire\Component
    public function render()
    {
        return view('livewire.provider.provider-component', [
            'providers' => Provider::all(),
        ]);
    }

    // Public functions

    public function resetFilters()
    {
        $properties = [
            "town", 
            "seller", 
            "address", 
            "cellphone", 
            "rucNumber", 
            "companyName", 
            "lineBussiness",
            "dgiRegistration",
            "conventionalTelephone"
        ];
        foreach ($properties as $property) {
            $this->reset($property);
        }
    }

    public function saveNewProvider()
    {
        $this->validate([
            'companyName' => 'required',
        ]);

        $this->saveModelObject();
        $this->resetFilters();
    }

    public function updateProvider($providerId)
    {
        $this->updateModelObjectById($providerId);
    }

     // Public functions from ComponentContractInterface

     public function saveModelObject()
     {
         Provider::Create(
             [
                 'town'                  => $this->town,
                 'seller'                => $this->seller,
                 'address'               => $this->address,
                 'cellphone'             => $this->cellphone,
                 'rucNumber'             => $this->rucNumber,
                 'companyName'           => $this->companyName,
                 'lineBussiness'         => $this->lineBussiness,
                 'dgiRegistration'       => $this->dgiRegistration,
                 'conventionalTelephone' => $this->conventionalTelephone
             ]);
     }
 
     public function updateModelObjectById($objectId)
     {
         $provider = Provider::findorFail($providerId);
         
         $provider->town                     = $this->town;
         $provider->seller                   = $this->seller;
         $provider->address                  = $this->address;
         $provider->cellphone                = $this->cellphone;
         $provider->rucNumber                = $this->rucNumber;
         $provider->companyName              = $this->companyName;
         $provider->lineBussiness            = $this->lineBussiness;
         $provider->dgiRegistration          = $this->dgiRegistration;
         $provider->conventionalTelephone    = $this->conventionalTelephone;
         
         $provider->save();
     }
 
     public function deleteModelObjectById($objectId)
     {
         // TODO: se debe crear la acción de eliminar para el registro de este componente
     }
}
