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

     // Public functions from ComponentContractInterface

     public function saveModelObject()
     {
         $this->saveNewProvider();
     }
 
     public function updateModelObjectById($objectId)
     {
         $this->updateProvider($objectId);
     }
 
     public function deleteModelObjectById($objectId)
     {
         // TODO: se debe crear la acción de eliminar para el registro de este componente
     }
}
