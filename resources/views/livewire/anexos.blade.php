<div>
    <div class="mdk-drawer-layout__content page" style="wi">

        <div class="container-fluid page__heading-container">
            <div class="page__heading d-flex align-items-center">
                <div class="flex">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ Route('/')}}"><i
                                        class="material-icons icon-20pt">home</i></a></li>
                            <li class="breadcrumb-item">Anexo</li>
                            <li class="breadcrumb-item active">Lista</li>
                        </ol>
                    </nav>
                    <h1 class="m-0">Adicionar Anexo</h1>
                </div>
            </div>
        </div>

        <div class="container-fluid page__container">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            <div class="card card-form">
                <div class="row no-gutters">
                    <div class="col-lg-6 card-form__body card-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Anexar:</label>
                                <input type="file" class="custom-file-input" wire:model="processo">
                                @error('processo') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                            <button wire:click.prevent="store()" class="btn btn-primary">Adicionar</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
