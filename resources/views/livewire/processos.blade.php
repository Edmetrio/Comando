<div>    
    <div class="mdk-drawer-layout__content page">
        <div class="container-fluid page__heading-container">
            <div class="page__heading d-flex align-items-center">
                <div class="flex">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">home</i></a>
                            </li>
                            <li class="breadcrumb-item">UI Província</li>
                            <li class="breadcrumb-item active">Lista</li>
                        </ol>
                    </nav>
                    <h1 class="m-0">{{ $processo->nome }}</h1>
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
                <div class="row col-md-12 m-2">
                    <div class="card card-body text-center col-md-4">
                        <div class="d-flex flex-row align-items-center">
                            <div class="card-header__title m-0"> <i
                                    class="material-icons icon-muted icon-30pt">assessment</i> Número de processos</div>
                            <div class="text-amount ml-auto">0{{ $processo->esquadras->count() }}</div>
                        </div>
                    </div>
                    {{-- <div class="card card-body text-center col-md-4 ml-2">
                        <div class="d-flex flex-row align-items-center">
                            <div class="card-header__title m-0"> <i
                                    class="material-icons icon-muted icon-30pt">assessment</i> Visits</div>
                            <div class="text-amount ml-auto">3,642</div>
                        </div>
                    </div> --}}
                </div>


                <div class="row no-gutters">
                    {{-- <div class="col-lg-4 card-body">
                            <p><strong class="headings-color">Lista de Todos Países</strong></p>
                            <p class="text-muted">Encontra listada todas Províncias existentes no país</p>
                        </div> --}}
                    <div class="col-lg-12 card-form__body">

                        <div class="table-responsive border-bottom" data-toggle="lists"
                            data-lists-values='["js-lists-values-employee-name"]'>

                            <div class="search-form search-form--light m-3">
                                <input type="text" class="form-control searc" wire:model="search"
                                    placeholder="Procurar">
                                <button class="btn" type="button"><i class="material-icons">search</i></button>
                            </div>

                            @foreach ($item as $i)
                                <div class="card p-3 m-3">
                                    <div class="d-flex">
                                        <div class="flex-fill d-flex">
                                            <div class="avatar avatar-md mr-3" data-toggle="tooltip"
                                                data-placement="top" title="{{ $processo->nome }}">
                                                @if ($i->indiciados->foto)
                                                    <img src="{{ asset('storage') }}/{{ $i->indiciados->foto }}"
                                                        alt="Avatar" class="avatar-img rounded-circle">
                                                @else
                                                    <img src="{{ asset('assets/images/avatar/nacional.png') }}"
                                                        alt="Foto" class="avatar-img rounded-circle" />
                                                @endif
                                            </div>
                                            <div class="flex-fill">
                                                <div class="d-flex mb-2">
                                                    <a href="#" class="text-body mr-1">Tipo de crime:
                                                        <strong>{{ $i->crimes->nome }}</strong></a>
                                                    {{-- <span class="text-muted ml-1"><i class="material-icons icon-16pt">email</i> contact@frontted.com</span> --}}
                                                </div>

                                                <div class="mb-2">
                                                    <strong>Esquadra: </strong> {{ $i->esquadras->nome }}<br />
                                                    <strong>Descrição: </strong>
                                                    <p class="text-justify text-truncate" style="max-width: 200px;">
                                                        {{ $i->descricao }}</p>
                                                </div>
                                                <div class="float-right">
                                                    <a href="{{ url("relatorio/$i->id") }}"
                                                        class="btn btn-info">Visualizar</a>
                                                </div>
                                            </div>
                                            <div class="flex-fill">
                                                    @if ($i->processo === NULL)
                                                    {{-- <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#addAnexo">Anexar</button> --}}
                                                    <a href="{{ Route('anexo', $i->id)}}">Anexar</a>
                                                    @else 
                                                    <p><span class="badge badge-primary">CONTÉM</span></p>
                                                    @endif
                                            </div>
                                        </div>
                                        <div class="text-muted">{{ $i->created_at->format('d/m/y') }}</div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
                @if ($updateMode)
                    @include('livewire.indiciadoitem.update')
                @else
                    @include('livewire.indiciadoitem.create')
                @endif
            </div>

        </div>

    </div>
</div>
