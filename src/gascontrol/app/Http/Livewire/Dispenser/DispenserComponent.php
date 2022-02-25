<?php

namespace App\Http\Livewire\Dispenser;

use Livewire\Component;
use App\Models\Dispenser;

class DispenserComponent extends Component
{
    public $description = 'DISPENSADOR #';

    public function render()
    {
        return view('livewire.dispenser.dispenser-component', [
            'dispensers' => Dispenser::all(),
        ]);
    }

    public function booted()
    {
        $this->description = 'DISPENSADOR #';
    }

    public function saveNewDispenser()
    {
        // Busacar el último dispensador para nombrar el siguiente automaticamente
        $lastDispenser = Dispenser::all()->last();
        $numberNewDispenser = is_null($lastDispenser) ?: (int)$lastDispenser->id + 1;
        $description = is_null($lastDispenser) ? $this->description.'1' : $this->description.$numberNewDispenser;
        
        // Save new dispenser
        $dispenser = new Dispenser;
        $dispenser->description = $description;
        $dispenser->save();
    }
}
