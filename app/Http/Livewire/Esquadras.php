<?php

namespace App\Http\Livewire;

use App\Models\Models\Distrito;
use App\Models\Models\Entidade;
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
        
        $esquadra = Esquadra::where('nome', $this->nome)->first();
        if (isset($esquadra)) {
            $this->error();
        } else {
            Esquadra::create($validatedDate);
            Entidade::create($validatedDate); 
            $this->alertSuccess();
        } 
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
  
        $this->alertUpdate();
        $this->resetInputFields();
    }

    public function delete($id)
    {
        Esquadra::find($id)->delete();
        $this->remove();
    }

    public function alertSuccess()
    {
        $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',  
                'message' => 'Esquadra criada com sucesso.', 
                'text' => 'Por favor, verifica o esquadra adicionado.'
            ]);
    }

    public function alertUpdate()
    {
        $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',  
                'message' => 'Esquadra actualizada com sucesso.', 
                'text' => 'Por favor, verifica a esquadra actualizada.'
            ]);
    }

    public function error()
    {
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'error',
            'message' => 'Esquadra Inexistente!',
            'text' => 'Por favor, Introduz outra Esquadra.'
        ]);
    }

    public function remove()
    {
        /* Write Delete Logic */
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'Esquadra deletada!',
            'text' => 'A Esquadra não faz mais parte da lista.'
        ]);
    } 
}
