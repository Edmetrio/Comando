<div class="row no-gutters">
    {{-- <div class="col-lg-4 card-body">
        <p><strong class="headings-color">Inputs</strong></p>
    </div> --}}
    <div class="col-lg-12 card-form__body card-body">
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Esquadra:</label>
                    <div class="form-row">
                        <select class="custom-select" wire:model="esquadra_id">
                            <option selected>Seleccione a Esquadra</option>
                            @foreach ($esquadra as $p)
                                <option value="{{ $p->id }}">{{ $p->nome }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('esquadra_id')
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
                    @error('descricao')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Anexo</label>
                    <input type="file" wire:model="anexo" class="form-control" id="inputPassword4">
                    @error('anexo')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <button wire:click.prevent="store()" class="btn btn-success">Adicionar</button>
        </form>
    </div>

</div>
