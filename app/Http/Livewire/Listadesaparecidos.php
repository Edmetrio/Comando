<?php

namespace App\Http\Livewire;

use App\Models\Models\Desaparecido;
use App\Models\Models\Fase;
use Livewire\Component;

class Listadesaparecidos extends Component
{
    public $search = '';
    public $selectedDesaparecido = NULL;
    public $selectedEstado = NULL, $ModeEstado = false, $estados;

    public function render()
    {
        $this->de = Desaparecido::with('fases','esquadras')->where('nome', 'like', '%' . $this->search . '%')->orderBy('created_at', 'desc')->get();
        /* dd($this->de); */
        $this->fase = Fase::orderBy('created_at', 'desc')->get();
        return view('livewire.listadesaparecidos')->layout('layouts.appp');
    }

    public function updatedSelectedDesaparecido($desaparecido_id)
    {
        if (!is_null($desaparecido_id)) {
            $this->ModeEstado = false;
            $this->desaparecido = Desaparecido::with('fases','esquadras')->where('fase_id', $desaparecido_id)->get();
        }
    }

    public function updatedSelectedEstado($estado)
    {
        if (!is_null($estado)) {
            $this->ModeEstado = true;

            $this->estados = Desaparecido::with('fases','esquadras')->where('estado', $estado)->get();
        }
    }
}
