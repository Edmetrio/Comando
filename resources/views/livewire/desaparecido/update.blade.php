<div class="row no-gutters">
    <div class="col-lg-12 card-form__body card-body">
        <form>
            <div class="form-row">
                <div class="form-group col-lg-6">
                    <label for="exampleInputPassword1">Fase:</label>
                    <select class="custom-select" wire:model="fase_id">
                        <option selected>Seleccione a Fase</option>
                        @foreach ($fase as $p)
                            <option value="{{ $p->id }}">{{ $p->nome }}</option>
                        @endforeach
                    </select>
                    @error('fase_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-lg-6">
                    <label for="exampleInputPassword1">Esquadra:</label>
                    <select class="custom-select" wire:model="esquadra_id">
                        <option selected>Seleccione a Rota</option>
                        @foreach ($esquadra as $p)
                            <option value="{{ $p->id }}">{{ $p->nome }}</option>
                        @endforeach
                    </select>
                    @error('rota_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Nome</label>
                    <input type="text" wire:model="nome" class="form-control" id="inputPassword4">
                    @error('nome')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Idade</label>
                    <input type="text" wire:model="idade" class="form-control" id="inputEmail4">
                    @error('idade')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="formFile" class="form-label">Icon</label>
                    <input class="form-control" type="file" id="formFile" wire:model="new_icon">
                    @if ($new_icon)
                        <img src="{{ $new_icon->temporaryUrl() }}" style="width: 200px; height: 200px;" />
                    @else
                        <img src="{{ asset('storage') }}/{{ $old_icon }}" style="width: 200px; height: 200px;" />
                    @endif
                    @error('icon')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputPassword1" style="margin-bottom: 2%">Estado:</label><br />
                    <label class="radio-inline"><input type="radio" wire:model="estado" value="true"
                            {{ $estado === 'true' ? 'checked' : '' }}> Encontrado</label>
                    <label class="radio-inline"><input type="radio" wire:model="estado" value="on"
                            {{ $estado === 'on' ? 'checked' : '' }}> Desaparecido</label>
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="exampleFormControlTextarea1">Descrição:</label>
                    <textarea wire:model="descricao" class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                    @error('descricao')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <button wire:click.prevent="update()" class="btn btn-dark">Actualizar</button>
            <button wire:click.prevent="cancel()" class="btn btn-danger">Cancelar</button>
        </form>
    </div>
</div>
