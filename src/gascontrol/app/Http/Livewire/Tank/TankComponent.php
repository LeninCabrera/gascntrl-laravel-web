<?php

namespace App\Http\Livewire\Tank;

use App\Models\Tank;
use App\Models\Fuel;
use Livewire\Component;
use App\Http\Livewire\ComponentContractInterface;

class TankComponent extends Component implements ComponentContractInterface
{
    public $tank;
    public $showTankModal = false;

    public function mount()
    {
        $this->showTankModal = true;
    }

    public function render()
    {
        return view('livewire.tank.tank-component', 
        [
            'fuels' => Fuel::all(),
            'tanks' => Tank::all(),
        ]);
    }

    public function saveNewTank()
    {
        $this->saveModelObject();
    }

    public function setFuel($fuelId)
    {
        $this->tank['fuel_id'] = $fuelId;
    }

    // Public functions from ComponentContractInterface

    public function saveModelObject()
    {
        Tank::Create(
            [
                'fuel_id' => $this->tank['fuel_id'],
                'capacity' => $this->tank['capacity'],
                'description' => $this->tank['description']
            ]);
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
