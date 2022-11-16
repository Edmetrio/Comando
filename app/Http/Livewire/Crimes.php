<?php

namespace App\Http\Livewire;

use App\Models\Models\Crime;
use Livewire\Component;

class Crimes extends Component
{
    public $nome, $crime_id;
    public $updateMode = false;

    public function render()
    {
        $this->crime = Crime::orderBy('created_at', 'desc')->get();
        return view('livewire.crimes')->layout('layouts.appp');
    }

    private function resetInputFields(){
        $this->nome = '';
        $this->crime_id = '';
    }

    public function store()
    {
       
        $validatedDate = $this->validate([
            'nome' => 'required',
        ]);
  
        $crime= Crime::where('nome', $this->nome)->first();
        if (isset($crime)) {
            $this->error();
        } else {
            Crime::create($validatedDate);
        $this->alertSuccess();
        }
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $post = Crime::findOrFail($id);
        $this->crime_id = $id;
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
  
        $post = Crime::find($this->crime_id);
        $post->update([
            'nome' => $this->nome,
        ]);
  
        $this->updateMode = false;
  
        $this->alertUpdate();
        $this->resetInputFields();
    }

    public function delete($id)
    {
        Crime::find($id)->delete();
        session()->flash('message', 'Crime deletado com sucesso.');
    }

    public function alertSuccess()
    {
        $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',  
                'message' => 'Crime criada com sucesso.', 
                'text' => 'Por favor, verifica o Crime adicionado.'
            ]);
    }

    public function alertUpdate()
    {
        $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',  
                'message' => 'Crime actualizado com sucesso.', 
                'text' => 'Por favor, verifica a crime actualizada.'
            ]);
    }

    public function error()
    {
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'error',
            'message' => 'Crime Inexistente!',
            'text' => 'Por favor, Introduz outra Crime.'
        ]);
    }

    public function remove()
    {
        /* Write Delete Logic */
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'Crime deletada!',
            'text' => 'A Crime não faz mais parte da lista.'
        ]);
    } 
}
