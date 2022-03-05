<?php

namespace App\Http\Livewire\Fuel;

use App\Models\Fuel;
use Livewire\Component;
use App\Http\Livewire\ComponentContractInterface;

class FuelComponent extends Component implements ComponentContractInterface
{
    public $fuel;
    public $showFuelModal = false;

    public function mount()
    {
        $this->showFuelModal = true;
    }

    public function render()
    {
        return view('livewire.fuel.fuel-component', [
            'fuels' => Fuel::all(),
        ]);
    }

    public function saveNewFuel()
    {
        $this->saveModelObject();
    }

    public function editFuelSelectedById($fuelId)
    {
        // TODO: se debe crear la acción de actualizar para el registro de este componente
    }

    public function deleteFuelSelectedById($fuelId)
    {
        // TODO: se debe crear la acción de eliminar para el registro de este componente
    }

    // Public functions from ComponentContractInterface

    public function saveModelObject()
    {
        Fuel::Create(['type'  => $this->fuel['type']]);
    }

    public function updateModelObjectById($objectId)
    {
        // TODO: se debe crear la acción de actualizar para el registro de este componente
    }

    public function deleteModelObjectById($objectId)
    {
        // TODO: se debe crear la acción de eliminar para el registro de este componente
    }
}
