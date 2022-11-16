<?php

namespace App\Http\Livewire;

use App\Models\Models\Rota;
use Livewire\Component;

class Rotas extends Component
{
    public $nome, $rota_id;
    public $updateMode = false;

    public function render()
    {
        $this->rota = Rota::orderBy('created_at', 'desc')->get();
        return view('livewire.rotas')->layout('layouts.appp');
    }

    private function resetInputFields(){
        $this->nome = '';
        $this->provincia_id = '';
    }

    public function store()
    {
       
        $validatedDate = $this->validate([
            'nome' => 'required',
        ]);
  
        $rota= Rota::where('nome', $this->nome)->first();
        if (isset($rota)) {
            $this->error();
        } else {
            Rota::create($validatedDate);
        $this->alertSuccess();
        }
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $post = Rota::findOrFail($id);
        $this->rota_id = $id;
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
  
        $post = Rota::find($this->rota_id);
        $post->update([
            'nome' => $this->nome,
        ]);
  
        $this->updateMode = false;
  
        $this->alertUpdate();
        $this->resetInputFields();
    }

    public function delete($id)
    {
        Rota::find($id)->delete();
        $this->remove();
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
