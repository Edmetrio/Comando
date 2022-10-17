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
                <div class="form-group col-md-6" style="margin-top: 3%">
                    <input type="file" class="custom-file-input" wire:model="icon">
                    <label class="custom-file-label" for="customFileLang">Seleccionar o Ícone</label>
                    @error('icon')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <label for="exampleFormControlTextarea1">Estado:</label>
                <div class="form-group col-md-4">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" wire:model="encontrado"
                            {{ $estado === 'on' ? 'checked' : '' }} name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio2">Encontrado</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" wire:model="desaparecido"
                            {{ $estado === 'off' ? 'checked' : '' }} name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio2">Desaparecido</label>
                    </div>
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
            <button wire:click.prevent="update()" class="btn btn-dark">Actualizar</button>
            <button wire:click.prevent="cancel()" class="btn btn-danger">Cancelar</button>
        </form>
    </div>
</div>
