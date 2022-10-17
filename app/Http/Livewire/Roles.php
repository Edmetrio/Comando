<?php

namespace App\Http\Livewire;

use App\Models\Models\Role;
use Livewire\Component;

class Roles extends Component
{
    public $nome, $role_id;
    public $updateMode = false;

    public function render()
    {
        $this->role = Role::orderBy('created_at', 'desc')->whereNot('nome', 'Dev')->get();
        return view('livewire.roles')->layout('layouts.appp');
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
        Role::create($validatedDate);
  
        session()->flash('message', 'Role criada com sucesso.');
  
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $post = Role::findOrFail($id);
        $this->role_id = $id;
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
  
        $post = Role::find($this->role_id);
        $post->update([
            'nome' => $this->nome,
        ]);
  
        $this->updateMode = false;
  
        session()->flash('message', 'Role actualizada.');
        $this->resetInputFields();
    }

    public function delete($id)
    {
        Role::find($id)->delete();
        session()->flash('message', 'Role deletada com sucesso.');
    }
}
