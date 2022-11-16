<?php

namespace App\Http\Livewire;

use App\Models\Models\Entidade;
use Livewire\Component;

class Entidades extends Component
{
    public $nome, $entidade_id;
    public $updateMode = false;

    public function render()
    {
        $this->entidade = Entidade::orderBy('created_at', 'desc')->get();
        return view('livewire.entidades')->layout('layouts.appp');
    }

    private function resetInputFields(){
        $this->nome = '';
        $this->entidade_id = '';
    }

    public function store()
    {
       
        $validatedDate = $this->validate([
            'nome' => 'required',
        ]);
  
        $entidade= Entidade::where('nome', $this->nome)->first();
        if (isset($entidade)) {
            $this->error();
        } else {
            Entidade::create($validatedDate);
        $this->alertSuccess();
        }
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $post = Entidade::findOrFail($id);
        $this->entidade_id = $id;
        $this->nome = $post->nome;
  
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
        ]);
  
        $post = Entidade::find($this->entidade_id);
        $post->update([
            'nome' => $this->nome,
        ]);
  
        $this->updateMode = false;
  
        $this->alertUpdate();
        $this->resetInputFields();
    }

    public function delete($id)
    {
        Entidade::find($id)->delete();
        session()->flash('message', 'Entidade deletada com sucesso.');
    }

    public function alertSuccess()
    {
        $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',  
                'message' => 'Entidade criada com sucesso.', 
                'text' => 'Por favor, verifica o indiciado adicionado.'
            ]);
    }

    public function alertUpdate()
    {
        $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',  
                'message' => 'Entidade actualizada com sucesso.', 
                'text' => 'Por favor, verifica a Entidade actualizada.'
            ]);
    }

    public function error()
    {
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'error',
            'message' => 'Entidade Inexistente!',
            'text' => 'Por favor, Introduz outra Entidade.'
        ]);
    }

    public function remove()
    {
        /* Write Delete Logic */
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'Entidade deletada!',
            'text' => 'A Entidade não faz mais parte da lista.'
        ]);
    } 
}
