<?php

namespace App\Http\Livewire\Provider;

use App\Models\Provider;

trait ProviderController {
    // Public Properties
    public $provider;


    // Public functions

    public function resetFilters()
    {
        if (!empty($provider)) {
            $this->provider = null;
        }
    }

    public function setProvider($providerId)
    {
        $providerSelected = $this->findProvider($providerId);
        
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
    }

    protected function updateProvider()
    {    
        $this->provider->save();
        $this->resetFilters();
    }
}