<?php

namespace App\Http\Livewire\Fuel;

use Livewire\Component;

class FuelComponent extends Component
{
    public $showFuelModal = false;

    public function mount()
    {
        $showFuelModal = true;
    }

    public function render()
    {
        return view('livewire.fuel.fuel-component');
    }
}
