<?php

namespace App\Http\Livewire;

use App\Models\Models\Fase;
use Livewire\Component;

class Fases extends Component
{
    public $nome, $fase_id;
    public $updateMode = false;

    public function render()
    {
        $this->fase = Fase::orderBy('created_at', 'desc')->get();
        return view('livewire.fases')->layout('layouts.appp');
    }

    private function resetInputFields(){
        $this->nome = '';
        $this->fase_id = '';
    }

    public function store()
    {
       
        $validatedDate = $this->validate([
            'nome' => 'required',
        ]);
  
        $fase= Fase::where('nome', $this->nome)->first();
        if (isset($fase)) {
            $this->error();
        } else {
            Fase::create($validatedDate);
        $this->alertSuccess();
        }
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $post = Fase::findOrFail($id);
        $this->fase_id = $id;
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
  
        $post = Fase::find($this->fase_id);
        $post->update([
            'nome' => $this->nome,
        ]);
  
        $this->updateMode = false;
  
        $this->alertUpdate();
        $this->resetInputFields();
    }

    public function delete($id)
    {
        Fase::find($id)->delete();
        session()->flash('message', 'Rota deletada com sucesso.');
    }

    public function alertSuccess()
    {
        $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',  
                'message' => 'Rota criada com sucesso.', 
                'text' => 'Por favor, verifica o indiciado adicionado.'
            ]);
    }

    public function alertUpdate()
    {
        $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',  
                'message' => 'Rota actualizada com sucesso.', 
                'text' => 'Por favor, verifica a rota actualizada.'
            ]);
    }

    public function error()
    {
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'error',
            'message' => 'Rota Inexistente!',
            'text' => 'Por favor, Introduz outra Rota.'
        ]);
    }

    public function remove()
    {
        /* Write Delete Logic */
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'Rota deletada!',
            'text' => 'A Rota não faz mais parte da lista.'
        ]);
    } 

}
