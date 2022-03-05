<?php

namespace App\Http\Livewire\Provider;

use App\Models\Provider;

trait ProviderController {
    // Public Properties
    public $provider;


    // Public functions

    public function resetFilters()
    {
        $this->reset($this->provider);
    }

    // Protected functions

    protected function getAllProviders()
    {
        return [
            'providers' => Provider::all(),
        ];
    }

    protected function saveNewProvider()
    {
        $this->validate([
            'companyName' => 'required',
        ]);

        Provider::Create(
            [
                'town'                  => $this->provider['town'],
                'seller'                => $this->provider['seller'],
                'address'               => $this->provider['address'],
                'cellphone'             => $this->provider['cellphone'],
                'rucNumber'             => $this->provider['rucNumber'],
                'companyName'           => $this->provider['companyName'],
                'lineBussiness'         => $this->provider['lineBussiness'],
                'dgiRegistration'       => $this->provider['dgiRegistration'],
                'conventionalTelephone' => $this->provider['conventionalTelephone']
            ]);

        $this->resetFilters();
    }

    protected function updateProvider($providerId)
    {
        $provider = Provider::findorFail($providerId);
         
        $provider->town                     = $this->provider['town'];
        $provider->seller                   = $this->provider['seller'];
        $provider->address                  = $this->provider['address'];
        $provider->cellphone                = $this->provider['cellphone'];
        $provider->rucNumber                = $this->provider['rucNumber'];
        $provider->companyName              = $this->provider['companyName'];
        $provider->lineBussiness            = $this->provider['lineBussiness'];
        $provider->dgiRegistration          = $this->provider['dgiRegistration'];
        $provider->conventionalTelephone    = $this->provider['conventionalTelephone'];
         
        $provider->save();
    }
}