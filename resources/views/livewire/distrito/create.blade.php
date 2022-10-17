<div class="row no-gutters">
    <div class="col-lg-12 card-form__body card-body">
        <form>
            <div class="form-row">
                <div class="form-group col-lg-6">
                    <label for="exampleInputPassword1">Província:</label>
                    <select class="custom-select" wire:model="provincia_id">
                        <option selected>Seleccione a província</option>
                        @foreach ($provincia as $p)
                            <option value="{{ $p->id }}">{{ $p->nome }}</option>
                        @endforeach
                    </select>
                    @error('provincia_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-lg-6">
                    <label for="exampleInputPassword1">Província:</label>
                    <input type="text" wire:model="nome" class="form-control" id="exampleInputPassword1"
                        placeholder="Digite a província ..">
                    @error('nome')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <button wire:click.prevent="store()" class="btn btn-primary">Adicionar</button>
        </form>
    </div>
</div>
