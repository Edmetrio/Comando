<?php

namespace App\Http\Livewire;

use App\Models\Models\Distrito;
use App\Models\Models\Esquadra;
use Livewire\Component;

class Esquadras extends Component
{
    public $nome, $distrito_id, $endereco, $contacto, $esquadra_id;
    public $updateMode = false;

    public function render()
    {
        $this->distrito = Distrito::orderBy('created_at', 'desc')->get();
        $this->esquadra = Esquadra::with('distritos')->orderBy('created_at', 'desc')->get();
        return view('livewire.esquadras')->layout('layouts.appp');
    }

    private function resetInputFields(){
        $this->nome = '';
        $this->distrito_id = '';
        $this->esquadra_id = '';
        $this->endereco = '';
        $this->contacto = '';
    }

    public function store()
    {
       
        $validatedDate = $this->validate([
            'nome' => 'required',
            'distrito_id' => 'required',
            'endereco' => 'required',
            'contacto' => 'required',
        ]);
        
        Esquadra::create($validatedDate);
  
        session()->flash('message', 'Esquadra criada com sucesso.');
  
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $post = Esquadra::findOrFail($id);
        $this->esquadra_id = $id;
        $this->distrito_id = $post->distrito_id;
        $this->nome = $post->nome;
        $this->endereco = $post->endereco;
        $this->contacto = $post->contacto;
  
        $this->updateMode = true;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        $validatedDate = $this->validate([
            'nome' => 'required',
            'distrito_id' => 'required',
            'endereco' => 'required',
            'contacto' => 'required',
        ]);
  
        $post = Esquadra::find($this->esquadra_id);
        $post->update([
            'nome' => $this->nome,
            'esquadra_id' => $this->esquadra_id,
            'endereco' => $this->endereco,
            'contacto' => $this->contacto
        ]);
  
        $this->updateMode = false;
  
        session()->flash('message', 'Esuadra actualizada.');
        $this->resetInputFields();
    }

    public function delete($id)
    {
        Esquadra::find($id)->delete();
        session()->flash('message', 'Esquadra deletada com sucesso.');
    }
}
