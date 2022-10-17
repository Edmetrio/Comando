<?php

namespace App\Http\Livewire;

use App\Models\Models\Crime;
use App\Models\Models\Descricao;
use App\Models\Models\Esquadra;
use App\Models\Models\Indiciado;
use App\Models\Models\IndiciadoItem;
use App\Models\Models\Informacao;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class Indiciados extends Component
{
    public $users_id, $esquadra_id, $nome, $endereco, $foto, $fingerprint, $assinatura, $indiciado_id, $transporte;
    public $crime_id, $descricao, $anexo;
    public $informacao, $icon;
    public $updateMode = false, $updateModee = false;
    public $inputs = [];
    public $i = 1;
    use WithFileUploads;
    public $show = false;
    public $search = '';

    public $indiciado, $mode = 'false';
  
    public $selectedIndiciado = NULL;

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
    }

    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    public function render()
    {
        $this->indiciado = Indiciado::with('crimes','esquadras')->orderBy('created_at', 'desc')->get();
        $this->esquadra = Esquadra::orderBy('created_at', 'desc')->get();
        $this->crime = Crime::orderBy('created_at', 'desc')->get();
        /* dd($this->indiciado); */
        $this->ultimas = Indiciado::with('crimes','esquadras')->where('nome', 'like', '%' . $this->search . '%')->orderBy('created_at', 'desc')->get();
        
        return view('livewire.indiciados')->layout('layouts.appp');
    }

    private function resetInputFields(){
        $this->users_id = '';
        $this->esquadra_id = '';
        $this->nome = '';
        $this->endereco = '';
        $this->foto = '';
        $this->fingerprint = '';
        $this->assinatura = '';
        $this->crime_id = '';
        $this->descricao = '';
        $this->informacao = '';
        $this->icon = '';
    }

    public function updatedSelectedIndiciado($indiciado_id)
    {
        if (!is_null($indiciado_id)) {
            $this->indiciados = Indiciado::with('crimes','esquadras')->where('id', $indiciado_id)->get();
        }
    }

    public function store()
    {
       
        $validatedDate = $this->validate([
            'esquadra_id' => 'required',
            'nome' => 'required',
            'endereco' => 'required',
            'crime_id' => 'required',
            'descricao' => 'required',
            /* 'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'fingerprint' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'assinatura' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', */
        ]);
        $input = $validatedDate;


        if ($this->show === false) {
            $input['estado'] = 'false';
        } else {
            $input['foto'] = $this->foto->store('files', 'public');
            $input['fingerprint'] = $this->fingerprint->store('files', 'public');
            $input['assinatura'] = $this->assinatura->store('files', 'public');
            $input['estado'] = 'true';
        }
        

        $input['users_id'] = Auth::user()->id;

        $provincia = Indiciado::where('nome', $this->nome)->first();
        if(isset($provincia))
        {
            $this->error();
        } else {
            $indiciado = Indiciado::create($input);
            IndiciadoItem::create([
                'users_id' => Auth::user()->id,
                'indiciado_id' => $indiciado->id,
                'crime_id' => $this->crime_id,
                'esquadra_id' => $this->esquadra_id,
                'descricao' => $this->descricao,
                'anexo' => $this->anexo,
            ]);
        $this->alertSuccess();
        }
       

     /*    $validatedDate = $this->validate([
            'informacao.0' => 'required',
            'icon.0' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'informacao.*' => 'required',
            'icon.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],
        [
            'informacao.0.required' => 'Texto nome é obrigatório',
            'icon.0.required' => 'Icon é obrigatório',
            'informacao.*.required' => 'Texto nome é obrigatório',
            'icon.*.required' => 'Icon é obrigatório',
        ]
    ); */

   /*  foreach ($this->informacao as $key => $value) {
        $inpu['icon'] = $this->icon->store('files', 'public');
        Informacao::create(['indiciado_id' => '2718b5b0-849e-4612-97d4-4f011aeb4b27','nome' => $this->informacao[$key], 'icon' => $inpu]);
    }

    $this->inputs = []; */
  
        /* session()->flash('message', 'Indiciado criado com sucesso.'); */
  
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $post = Indiciado::findOrFail($id);
        $this->indiciado_id = $id;
        $this->esquadra_id = $post->esquadra_id;
        $this->nome = $post->nome;
        $this->endereco = $post->endereco;
        $this->foto = $post->foto;
        $this->fingerprint = $post->fingerprint;
        $this->assinatura = $post->assinatura;
  
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
            'esquadra_id' => 'required',
            'nome' => 'required',
            'endereco' => 'required',
            /* 'foto' => 'required',
            'fingerprint' => 'required',
            'assinatura' => 'required', */
        ]);
  
        $post = Indiciado::find($this->indiciado_id);
        $post->update([
            'nome' => $this->nome,
            'esquadra_id' => $this->esquadra_id,
            'endereco' => $this->endereco,
            /* 'foto' => $this->foto,
            'fingerprint' => $this->fingerprint,
            'assinatura' => $this->assinatura, */
        ]);
  
        $this->updateMode = false;
  
        session()->flash('message', 'Indiciado actualizada.');
        $this->resetInputFields();
    }

    public function delete($id)
    {
        $indiciado = Indiciado::find($id);
        Indiciado::find($id)->delete();
        File::delete(public_path("storage/". $indiciado->foto));
        File::delete(public_path("storage/". $indiciado->fingerprint));
        File::delete(public_path("storage/". $indiciado->assinatura));
        session()->flash('message', 'Indiciado deletada com sucesso.');
        $this->resetInputFields();
    }

    public function transporte($id)
    {
        if ($id === true) {
            $this->show = true;
        } else {
            $this->show = false;
            $this->resetInputFields();
        }  
    }

    public function alertSuccess()
    {
        $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',  
                'message' => 'Indiciado criado com sucesso.', 
                'text' => 'Por favor, verifica o indiciado adicionado.'
            ]);
    }

    public function error()
    {
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'error',
            'message' => 'Indiciado Inexistente!',
            'text' => 'Por favor, Introduz outra indiciado.'
        ]);
    }

    public function removes()
    {
        /* Write Delete Logic */
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'message' => 'Província deletada!',
            'text' => 'A província não faz mais parte da lista.'
        ]);
    } 
}
