<?php

namespace App\Http\Livewire;

use App\Models\Models\Entidade;
use App\Models\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class Utilizadors extends Component
{
    public $name, $icon, $entidade_id, $role_id, $email, $password, $utilizador_id;
    public $updateMode = false;
    use WithFileUploads;

    public function render()
    {
        $this->role = Role::orderBy('created_at', 'desc')->whereNot('nome', 'Dev')->get();
        $this->entidade = Entidade::orderBy('created_at', 'desc')->get();
        $this->utilizador = User::with('entidades','roles')->orderBy('created_at', 'desc')->get();
        return view('livewire.utilizadors')->layout('layouts.appp');
    }

    private function resetInputFields(){
        $this->name = '';
        $this->entidade_id = '';
        $this->role_id = '';
        $this->email = '';
        $this->password = '';
        $this->utilizador_id = '';
    }

    public function store()
    {
       
        $validatedDate = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'role_id' => 'required',
            'entidade_id' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            /* 'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', */
            'password' => ['required'],
        ]);
        $input = $validatedDate;
        /* $input['icon'] = $this->icon->store('files', 'public'); */
        /* dd($this); */
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role_id' => $this->role_id,
            'entidade_id' => $this->entidade_id,
           /*  'icon' => $this->icon */
        ]);
  
        session()->flash('message', 'Utilizador criado com sucesso.');
  
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $post = User::findOrFail($id);
        $this->utilizador_id = $id;
        $this->role_id = $post->role_id;
        $this->entidade_id = $post->entidade_id;
        $this->name = $post->name;
        $this->icon = $post->icon;
        $this->email = $post->email;
        $this->password = $post->password;
  
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
            'name' => ['required', 'string', 'max:255'],
            'role_id' => 'required',
            'entidade_id' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'password' => ['required', 'confirmed'],
        ]);
  
        $post = User::find($this->utilizador_id);
        $post->update([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role_id' => $this->role_id,
            'entidade_id' => $this->entidade_id,
            'icon' => $this->icon
        ]);
  
        $this->updateMode = false;
  
        session()->flash('message', 'Utilizador actualizado.');
        $this->resetInputFields();
    }

    public function delete($id)
    {
        $desaparecido = User::findOrFail($id);
        File::delete(public_path("storage/". $desaparecido->foto));
        User::find($id)->delete();
        session()->flash('message', 'Utilizador deletado com sucesso.');
    }
}
