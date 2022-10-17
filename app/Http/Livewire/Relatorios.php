<?php

namespace App\Http\Livewire;

use App\Models\Models\Indiciado;
use App\Models\Models\IndiciadoItem;
use Livewire\Component;

class Relatorios extends Component
{
    public $rid;
    public function mount($id)
    {

        $this->rid = $id;
        $this->indiciado = IndiciadoItem::with('esquadras','users','indiciados','crimes','esquadras')->where('id', $id)->first();
        /* dd($this->indiciado); */
    }

    public function render()
    {
        return view('livewire.relatorios')->layout('layouts.appp');
    }
}
