<?php

namespace App\Http\Livewire;

use App\Models\Models\Crime;
use App\Models\Models\Indiciado;
use App\Models\Models\IndiciadoItem;
use Livewire\Component;

class IndiciadoItems extends Component
{
    public $users_id, $indiciado_id, $crime_id, $descricao, $anexo, $estado;
    public $updateMode = false;

    public function render()
    {
        $this->indiciado = Indiciado::orderBy('created_at', 'desc')->get();
        $this->crime = Crime::orderBy('created_at', 'desc')->get();
        $this->item = IndiciadoItem::with('esquadras','users','indiciados','crimes','esquadras')->orderBy('created_at', 'desc')->get();
        /* dd($this->item); */
        return view('livewire.indiciado-items')->layout('layouts.appp');
    }
}
