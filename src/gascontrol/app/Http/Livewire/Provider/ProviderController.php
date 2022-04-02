<?php

namespace App\Http\Livewire\Provider;

use App\Models\Provider;
use App\Http\Enums\StateMessage;

trait ProviderController {
    // Public Properties
    public $provider;

    // Protected Properties
    protected $rules = [
        'provider.companyName' => 'required',
    ];

    // Public functions

    public function resetFilters()
    {
        if ($this->provider) {
            $this->reset('provider');
        }
    }

    public function setProvider($providerId)
    {
        $providerSelected = $this->findProvider($providerId);
        
        $this->provider['id']                       = $providerSelected->id;
        $this->provider['town']                     = $providerSelected->town;
        $this->provider['seller']                   = $providerSelected->seller;
        $this->provider['address']                  = $providerSelected->address;
        $this->provider['cellphone']                = $providerSelected->cellphone;
        $this->provider['rucNumber']                = $providerSelected->rucNumber;
        $this->provider['companyName']              = $providerSelected->companyName;
        $this->provider['lineBussiness']            = $providerSelected->lineBussiness;
        $this->provider['dgiRegistration']          = $providerSelected->dgiRegistration;
        $this->provider['conventionalTelephone']    = $providerSelected->conventionalTelephone;
    }

    // Protected functions

    protected function getAllProviders()
    {
        return [
            'providers' => Provider::all(),
        ];
    }

    protected function findProvider($providerId)
    {
        return Provider::find($providerId);
    }

    protected function saveNewProvider()
    {
        Provider::Create($this->provider);
        $this->resetFilters();
        StateMessage::sessionFlash(StateMessage::Success, 'GUARDADO CON EXITO!');
    }

    protected function updateProvider()
    {
        $providerId = $this->provider["id"];
        $providerSelected = $this->findProvider($providerId);
        $providerSelected->town                     = $this->provider['town'];  
        $providerSelected->seller                   = $this->provider['seller']; 
        $providerSelected->address                  = $this->provider['address']; 
        $providerSelected->cellphone                = $this->provider['cellphone']; 
        $providerSelected->rucNumber                = $this->provider['rucNumber']; 
        $providerSelected->companyName              = $this->provider['companyName']; 
        $providerSelected->lineBussiness            = $this->provider['lineBussiness']; 
        $providerSelected->dgiRegistration          = $this->provider['dgiRegistration']; 
        $providerSelected->conventionalTelephone    = $this->provider['conventionalTelephone']; 
        $providerSelected->save();
        $this->resetFilters();
        StateMessage::sessionFlash(StateMessage::Success, 'ACTUALIZADO CON EXITO!');
    }
}