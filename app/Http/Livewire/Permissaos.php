<?php

namespace App\Http\Livewire;

use App\Models\Models\Permissao;
use App\Models\Models\Role;
use App\Models\Models\Rota;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Permissaos extends Component
{
    public $role_id, $rota_id, $permissao_id;
    public $updateMode = false;

    public function render()
    {
        $this->rota = Rota::orderBy('created_at', 'desc')->get();
        $this->permissao = Permissao::with('roles','rotas')->orderBy('created_at', 'desc')->get();
        $role = Role::where('nome', 'Dev')->first();
        if(Auth::user()->role_id === $role->id)
        {
            $this->pe = Role::with('rotas')->orderBy('created_at', 'desc')->get();
            $this->role = Role::orderBy('created_at', 'desc')->get();
        } else {
        $this->pe = Role::with('rotas')->whereNot('nome', 'Dev')->orderBy('created_at', 'desc')->get();
        $this->role = Role::whereNot('nome','Dev')->orderBy('created_at', 'desc')->get();    
    }
        /* dd($this->pe); */
        return view('livewire.permissaos')->layout('layouts.appp');
    }
    
    private function resetInputFields(){
        $this->role_id = '';
        $this->rota_id = '';
        $this->permissao_id = '';
    }

    public function store()
    {
       
        $validatedDate = $this->validate([
            'role_id' => 'required',
            'rota_id' => 'required',
        ]);
        
        Permissao::create($validatedDate);
  
        session()->flash('message', 'Permissão criada com sucesso.');
  
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $post = Permissao::findOrFail($id);
        $this->permissao_id = $id;
        $this->role_id = $post->role_id;
        $this->rota_id = $post->rota_id;
  
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
            'role_id' => 'required',
            'rota_id' => 'required',
        ]);
  
        $post = Permissao::find($this->permissao_id);
        $post->update([
            'role_id' => $this->role_id,
            'rota_id' => $this->rota_id,
        ]);
  
        $this->updateMode = false;
  
        session()->flash('message', 'Permissão actualizada.');
        $this->resetInputFields();
    }

    public function delete($id)
    {
        Permissao::find($id)->delete();
        session()->flash('message', 'Permissão deletada com sucesso.');
    }
}
