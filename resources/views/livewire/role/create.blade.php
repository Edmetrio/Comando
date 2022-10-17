<div class="row no-gutters">
    <div class="col-lg-6 card-form__body card-body">
        <form>
            <div class="form-group">
                <label for="exampleInputPassword1">Role:</label>
                <input type="text" wire:model="nome" class="form-control" id="exampleInputPassword1" placeholder="Digite a província ..">
                @error('nome') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <button wire:click.prevent="store()" class="btn btn-primary">Adicionar</button>
        </form>
    </div>
</div>
