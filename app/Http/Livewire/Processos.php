<?php

namespace App\Http\Livewire;

use App\Models\Models\Crime;
use App\Models\Models\Esquadra;
use App\Models\Models\Indiciado;
use App\Models\Models\IndiciadoItem;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class Processos extends Component
{
    public $users_id, $indiciado_id, $crime_id, $descricao, $esquadra_id, $anexo, $processo_id, $anexos, $icon;
    public $updateMode = false;
    use WithFileUploads;
    public $search = '';
    public $message, $text;

    public function mount($id)
    {
       /*  $this->item = IndiciadoItem::with('esquadras','users','indiciados','crimes','esquadras')->where('indiciado_id', $id)->get(); */
        /* dd($this->item); */
        $this->indiciado_id = $id;
        /* dd($this->item); */
        $this->processo_id = $id;
    }

    public function render()
    {
        $this->indiciado = Indiciado::orderBy('created_at', 'desc')->get();
        $this->crime = Crime::orderBy('created_at', 'desc')->get();
        $this->esquadra = Esquadra::orderBy('created_at', 'desc')->get();
        $this->item = IndiciadoItem::with('esquadras','users','indiciados','crimes','esquadras')->where('indiciado_id', $this->processo_id)->orderBy('created_at', 'desc')->get();
        $this->processo = Indiciado::with('crimes','esquadras')->findOrFail($this->processo_id);

        return view('livewire.processos')->layout('layouts.appp');
    }

    private function resetInputFields(){
        $this->users_id = '';
        $this->indiciado_id = '';
        $this->esquadra_id = '';
        $this->crime_id = '';
        $this->descricao = '';
        $this->anexo = '';
        $this->message = '';
        $this->text = '';
    }

    public function store()
    {
       
        $validatedDate = $this->validate([
            'crime_id' => 'required',
            'esquadra_id' => 'required',
            'descricao' => 'required',
            /* 'anexo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', */
        ]);
        $input = $validatedDate;
        $input['users_id'] = Auth::user()->id;
        $input['indiciado_id'] = $this->indiciado_id;
        if (isset($this->anexo)) {
            $input['anexo'] = $this->anexo->store('files', 'public');
            $this->anexos = $this->anexo->store('files', 'public');
        } else {
            $input['anexo'] = '';
            $this->anexos = '';
        }
        

        IndiciadoItem::create([
            'users_id' => Auth::user()->id,
            'indiciado_id' => $this->indiciado_id,
            'crime_id' => $this->crime_id,
            'esquadra_id' => $this->esquadra_id,
            'descricao' => $this->descricao,
            'anexo' => $this->anexos,
        ]);
        $this->message = 'Item do indiciado criado com sucesso.';
        $this->text = 'Por favor, verifica o indiciado adicionado.';
        $this->alertSuccess();
  
        $this->resetInputFields();
    }

    public function storeA()
    {
        dd('Ver');
        $validatedDate = $this->validate([
            /* 'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', */
            'icon' => 'required'
        ]);
        /* $input = $validatedDate;
        if ($this->icon) {
            $input['icon'] = $this->icon->store('files', 'public');
        } else {
            $input['icon'] = '';
        } */
        dd($validatedDate);
  
        session()->flash('message', 'Slider criado com sucesso.');
  
        $this->resetInputFields();
    }

    public function alertSuccess()
    {
        $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',  
                'message' => $this->message, 
                'text' => $this->text
            ]);
    }

    /* public function edit($id)
    {
        $post = Desaparecido::findOrFail($id);
        $this->desaparecido_id = $id;
        $this->esquadra_id = $post->esquadra_id;
        $this->nome = $post->nome;
        $this->idade = $post->idade;
        $this->descricao = $post->descricao;
  
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
    } */
}
