<?php

namespace App\Http\Livewire;

use App\Models\Models\IndiciadoItem;
use Livewire\Component;
use Livewire\WithFileUploads;

class Anexos extends Component
{
    public $anexo, $processo;
    use WithFileUploads;

    public function mount($id)
    {
        $this->item = IndiciadoItem::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.anexos')->layout('layouts.appp');
    }

    private function resetInputFields(){
        $this->processo = '';
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'processo' => 'required'
        ]);
        $processos = $this->processo->store('files', 'public');
        IndiciadoItem::findOrFail($this->item->id)->update(['processo' => $processos]);

        session()->flash('message', 'Anexo criado com sucesso.');
  
        $this->resetInputFields();
    }
}
