<div class="row no-gutters">
    <div class="col-lg-12 card-form__body card-body">
        <form>
            <div class="form-row">
                <div class="form-group col-lg-6">
                    <label for="exampleInputPassword1">Role:</label>
                    <select class="custom-select" wire:model="role_id">
                        <option selected>Seleccione a Role</option>
                        @foreach ($role as $p)
                            <option value="{{ $p->id }}">{{ $p->nome }}</option>
                        @endforeach
                    </select>
                    @error('role_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-lg-6">
                    <label for="exampleInputPassword1">Rota:</label>
                    <select class="custom-select" wire:model="rota_id">
                        <option selected>Seleccione a Rota</option>
                        @foreach ($rota as $p)
                            <option value="{{ $p->id }}">{{ $p->nome }}</option>
                        @endforeach
                    </select>
                    @error('rota_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <button wire:click.prevent="update()" class="btn btn-dark">Actualizar</button>
            <button wire:click.prevent="cancel()" class="btn btn-danger">Cancelar</button>
        </form>
    </div>
</div>