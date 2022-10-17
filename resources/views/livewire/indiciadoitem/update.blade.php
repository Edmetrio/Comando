<div class="row no-gutters">
    <div class="col-lg-4 card-body">
        <p><strong class="headings-color">Inputs</strong></p>
    </div>
    <div class="col-lg-8 card-form__body card-body">
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Esquadra:</label>
                    <select class="custom-select" wire:model="esquadra_id">
                        <option selected>Seleccione a Esquadra</option>
                        @foreach($esquadra as $p)
                        <option value="{{$p->id}}">{{$p->nome}}</option>
                        @endforeach
                      </select>
                    @error('esquadra_id') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Nome</label>
                    <input type="text" wire:model="nome" class="form-control" id="inputPassword4">
                    @error('nome') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Endereço</label>
                    <input type="text" wire:model="endereco" class="form-control" id="inputEmail4">
                    @error('endereco') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
            </div>
            <button wire:click.prevent="update()" class="btn btn-dark">Actualizar</button>
            <button wire:click.prevent="cancel()" class="btn btn-danger">Cancelar</button>
        </form>
    </div>
</div>