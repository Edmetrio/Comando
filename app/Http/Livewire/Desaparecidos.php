<?php

namespace App\Http\Livewire;

use App\Models\Models\Desaparecido;
use App\Models\Models\Descricao;
use App\Models\Models\Esquadra;
use App\Models\Models\Fase;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class Desaparecidos extends Component
{
    public $nome, $fase_id, $users_id, $idade, $esquadra_id, $icon, $descricao, $desaparecido_id, $estado;
    public $updateMode = false;
    public $encontrado, $desaparecido;
    use WithFileUploads;

    public function render()
    {
        $this->fase = Fase::orderBy('created_at', 'desc')->get();
        $this->esquadra = Esquadra::orderBy('created_at', 'desc')->get();
        $this->desaparecido = Desaparecido::orderBy('created_at', 'desc')->get();
        return view('livewire.desaparecidos')->layout('layouts.appp');
    }

    private function resetInputFields(){
        $this->nome = '';
        $this->fase_id = '';
        $this->esquadra_id = '';
        $this->idade = '';
        $this->icon = '';
        $this->descricao = '';
    }

    public function store()
    {
       
        $validatedDate = $this->validate([
            'nome' => 'required',
            'fase_id' => 'required',
            'esquadra_id' => 'required',
            'idade' => 'required',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'descricao' => 'required',
        ]);
        $input = $validatedDate;
        $input['users_id'] = Auth::user()->id;
        $input['icon'] = $this->icon->store('files', 'public');

        Desaparecido::create($input);
  
        session()->flash('message', 'Desparecido criada com sucesso.');
  
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $post = Desaparecido::findOrFail($id);
        $this->desaparecido_id = $id;
        $this->esquadra_id = $post->esquadra_id;
        $this->nome = $post->nome;
        $this->idade = $post->idade;
        $this->estado = $post->estado;
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
            'fase_id' => 'required',
            'esquadra_id' => 'required',
            'idade' => 'required',
            'descricao' => 'required',
        ]);
  
        $post = Desaparecido::find($this->desaparecido_id);
        $post->update([
            'nome' => $this->nome,
            'fase_id' => $this->fase_id,
            'esquadra_id' => $this->esquadra_id,
            'idade' => $this->idade,
            'descricao' => $this->descricao
        ]);
  
        $this->updateMode = false;
  
        session()->flash('message', 'Esuadra actualizada.');
        $this->resetInputFields();
    }

    public function delete($id)
    {
        $desaparecido = Desaparecido::findOrFail($id);
        File::delete(public_path("storage/". $desaparecido->foto));
        Desaparecido::find($id)->delete();
        session()->flash('message', 'Esquadra deletada com sucesso.');
    }
}
