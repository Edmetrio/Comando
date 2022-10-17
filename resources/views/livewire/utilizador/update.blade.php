<div class="row no-gutters">
    {{-- <div class="col-lg-4 card-body">
        <p><strong class="headings-color">Inputs</strong></p>
    </div> --}}
    <div class="col-lg-12 card-form__body card-body">
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Entidade:</label>
                    <select class="custom-select" wire:model="entidade_id">
                        <option selected>Seleccione a Entidade</option>
                        @foreach($entidade as $p)
                        <option value="{{$p->id}}">{{$p->nome}}</option>
                        @endforeach
                      </select>
                    @error('entidade_id') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Role:</label>
                    <select class="custom-select" wire:model="role_id">
                        <option selected>Seleccione o Role</option>
                        @foreach($role as $p)
                        <option value="{{$p->id}}">{{$p->nome}}</option>
                        @endforeach
                      </select>
                    @error('role_id') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nome</label>
                    <input type="text" wire:model="name" class="form-control" id="inputEmail4">
                    @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">E-mail</label>
                    <input type="email" wire:model="email" class="form-control" id="inputPassword4">
                    @error('email') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Palavra-passe</label>
                    <input type="password" wire:model="password" class="form-control" id="inputEmail4">
                    @error('password') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Icone</label>
                    <input type="file" wire:model="icon" class="form-control" id="inputPassword4">
                    @error('icon') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
            </div>
            <button wire:click.prevent="update()" class="btn btn-dark">Actualizar</button>
            <button wire:click.prevent="cancel()" class="btn btn-danger">Cancelar</button>
        </form>
    </div>
</div>