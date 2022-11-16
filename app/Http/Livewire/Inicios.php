<?php

namespace App\Http\Livewire;

use App\Models\Models\Desaparecido;
use Livewire\Component;

class Inicios extends Component
{
    public function render()
    {
        $desaparecido = Desaparecido::orderBy('created_at', 'desc')->paginate(2);
        return view('livewire.inicios')->layout('layouts.appp', compact('desaparecido'));
    }
}
