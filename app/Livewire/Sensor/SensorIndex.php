<?php

namespace App\Livewire\Sensor;

use App\Models\Sensor;
use Livewire\Component;

class SensorIndex extends Component
{
    public $search='';

    public function delete($id)
    {
        $ambiente = Sensor::find($id);

        if ($ambiente != null) {
            $ambiente->delete();
            session()->flash('success', 'Excluído');
        }
    }

    public function render()
    {
        $sensors = Sensor::all();

        return view('livewire.sensor.sensor-index', compact('sensors'));
    }
}