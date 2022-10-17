<?php

namespace App\Http\Livewire;

use App\Models\Models\Provincia;
use Livewire\Component;

class Provincias extends Component
{
    public $nome, $provincia_id;
    public $updateMode = false;

    public function render()
    {
        $this->provincia = Provincia::orderBy('created_at', 'desc')->get();
        return view('livewire.provincias')->layout('layouts.appp');
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
        $provincia = Provincia::where('nome', $this->nome)->first();
        if (isset($provincia)) {
            $this->error();
        } else {
            Provincia::create($validatedDate);
        $this->alertSuccess();
        }
        $this->resetInputFields();
       
    }

    public function edit($id)
    {
        $post = Provincia::findOrFail($id);
        $this->provincia_id = $id;
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
  
        $post = Provincia::find($this->provincia_id);
        $post->update([
            'nome' => $this->nome,
        ]);
  
        $this->updateMode = false;
  
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',  
            'message' => 'Província actualizada', 
            'text' => 'Por favor, verifica as províncias adicionadas.'
        ]);
        $this->resetInputFields();
    }

    public function delete($id)
    {
        Provincia::find($id)->delete();
        $this->remove();

    }
    
    public function alertSuccess()
    {
        $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',  
                'message' => 'Província adicionada', 
                'text' => 'Por favor, verifica as províncias adicionadas.'
            ]);
    }

    public function error()
    {
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'error',
            'message' => 'Distrito Inexistente!',
            'text' => 'Por favor, Introduz outra província.'
        ]);
    }

    public function errorproduto()
    {
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'error',
            'message' => 'Produto não encontrado!',
            'text' => 'Por favor, essa quantidade a plataforma não dispõe.'
        ]);
    }

    public function alertConfirm()
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'warning',
            'message' => 'Are you sure?',
            'text' => 'If deleted, you will not be able to recover this imaginary file!'
        ]);
    }

    public function remove()
    {
        /* Write Delete Logic */
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'Província deletada!',
            'text' => 'A província não faz mais parte da lista.'
        ]);
    }
}
