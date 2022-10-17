<div class="row no-gutters">
    <div class="col-lg-12 card-form__body card-body">
        <form>
            <div class="form-group">
                <label for="exampleInputPassword1">Província:</label>
                <input type="text" wire:model="nome" class="form-control" id="exampleInputPassword1"
                    placeholder="Digite a província ..">
                @error('nome')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button wire:click.prevent="update()" class="btn btn-dark">Actualizar</button>
            <button wire:click.prevent="cancel()" class="btn btn-danger">Cancelar</button>
        </form>
    </div>
</div>
