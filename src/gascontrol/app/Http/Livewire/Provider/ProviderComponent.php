<?php

namespace App\Http\Livewire\Provider;

use Livewire\Component;
use App\Http\Livewire\ComponentContractInterface;

class ProviderComponent extends Component implements ComponentContractInterface
{
    use ProviderController;

    // Public functions from Livewire\Component
    public function render()
    {
        return view('livewire.provider.provider-component', $this->getAllProviders());
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

     // Public functions from ComponentContractInterface

     public function saveModelObject()
     {
        $this->validate();
        $this->saveNewProvider();
     }
 
     public function updateModelObjectById($objectId)
     {
        $this->validate();
        $this->updateProvider();
     }
 
     public function deleteModelObjectById($objectId)
     {
         // TODO: se debe crear la acción de eliminar para el registro de este componente
     }
}
