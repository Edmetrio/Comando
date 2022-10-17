<div class="row no-gutters">
    {{-- <div class="col-lg-4 card-body">
        <p><strong class="headings-color">Inputs</strong></p>
    </div> --}}
    <div class="col-lg-12 card-form__body card-body">
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Esquadra:</label>
                    <select class="custom-select" wire:model="esquadra_id">
                        <option selected>Seleccione a Esquadra</option>
                        @foreach ($esquadra as $p)
                            <option value="{{ $p->id }}">{{ $p->nome }}</option>
                        @endforeach
                    </select>
                    @error('esquadra_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Nome</label>
                    <input type="text" wire:model="nome" class="form-control" id="inputPassword4">
                    @error('nome')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Endereço</label>
                    <input type="text" wire:model="endereco" class="form-control" id="inputEmail4">
                    @error('endereco')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Crime:</label>
                    <div class="form-row">
                        <select class="custom-select" wire:model="crime_id">
                            <option selected>Seleccione o Crime</option>
                            @foreach ($crime as $p)
                                <option value="{{ $p->id }}">{{ $p->nome }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('crime_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="exampleFormControlTextarea1">Descrição:</label>
                    <textarea class="form-control" wire:model="descricao" id="exampleFormControlTextarea1" rows="6"></textarea>
                    @error('fingerprint')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            
            @if ($show === true)
            <div class="form-row" style="float: right">
                <input class="form-check-input" type="checkbox" wire:model="transporte" id="invalidCheck2" checked wire:click="transporte({{('false')}})">
                <label class="form-check-label" for="invalidCheck2">
                    Outros anexos
                </label>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4" style="margin-top: 3%">
                    <label for="exampleFormControlFile1">Seleccione a foto</label>
                    <input type="file" class="form-control-file" wire:model="foto" id="exampleFormControlFile1">
                    @error('foto')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-4" style="margin-top: 3%;">
                    <label for="exampleFormControlFile1">Seleccione o FingerPrint</label>
                    <input type="file" class="form-control-file" wire:model="fingerprint"
                        id="exampleFormControlFile1">
                    @error('fingerprint')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-4" style="margin-top: 3%">
                    <label for="exampleFormControlFile1">Seleccione a Assinatura</label>
                    <input type="file" class="form-control-file" wire:model="assinatura"
                        id="exampleFormControlFile1">
                    @error('assinatura')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            @else
            <div class="form-row" style="float: right">
                <input class="form-check-input" type="checkbox" wire:model="transporte" id="invalidCheck2" wire:model="transporte" wire:click="transporte({{('true')}})">
                <label class="form-check-label" for="invalidCheck2">
                    Outros anexos
                </label>
            </div>
            @endif



            {{-- @include('livewire.informacao.create') --}}

            <button wire:click.prevent="store()" class="btn btn-success">Adicionar</button>
        </form>
    </div>

</div>
