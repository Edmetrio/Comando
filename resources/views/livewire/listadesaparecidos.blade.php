<div>
    <div class="container-fluid page__heading-container">
        <div class="page__heading">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ Route('/') }}"><i
                                class="material-icons icon-20pt">home</i></a></li>
                    <li class="breadcrumb-item">Desaparecido</li>
                </ol>
            </nav>

            <h1 class="m-0">Desaparecidos</h1>
        </div>
    </div>

    <div class="container-fluid page__container">

        <form action="#" class="card-margin">
            <div class="form-row">
                <div class="form-group col-md-4">
                    {{-- <label for="exampleInputPassword1">Esquadra:</label> --}}
                    <div class="search-form search-form--light">
                        <input type="text" class="form-control searc" wire:model="search" placeholder="Procurar">
                        <button class="btn" type="button"><i class="material-icons">search</i></button>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    {{-- <label for="custom-select" class="text-label mr-2">Fases:</label> --}}
                    <select id="custom-select" class="form-control custom-select" wire:model="selectedDesaparecido">
                        <option selected="">Seleccione a fase</option>
                        @foreach ($fase as $f)
                            <option value="{{ $f->id }}">{{ $f->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <select id="published01" class="form-control custom-select" wire:model="selectedEstado">
                        <option selected="">Seleccione o Estado</option>
                        <option value="true">Encontrado</option>
                        <option value="on">Desaparecido</option>
                    </select>
                </div>
            </div>

        </form>

        <div class="row">
            @if ($ModeEstado)
            @foreach ($estados as $d)
            <div class="col-md-3">
                <div class="card card__course">
                    <div
                        class="card-header card-header-large card-header-dark bg-dark d-flex justify-content-center">
                        <a class="card-header__title  justify-content-center align-self-center d-flex flex-column"
                            href="{{ asset('storage') }}/{{ $d->icon }}">
                            <span><img src="{{ asset('storage') }}/{{ $d->icon }}" class="mb-1"
                                    style="width:150px;" alt="logo"></span>
                            {{-- <span class="course__subtitle">{{ $d->nome }}</span> --}}
                        </a>
                    </div>
                    <div class="p-3">
                        <p class="text-center"><strong>{{ $d->nome }}</strong>
                            <hr><br />
                            <strong>Esquadra: </strong>{{ $d->esquadras->nome }}<br />
                            <strong>Fase: </strong>{{ $d->fases->nome }}<br />
                            <strong>Idade: </strong>{{ $d->idade }}<br />

                        </p>
                    </div>
                    <div class="container col-12 col-md-12">
                        <div class="row">
                            <div class="col-2 col-md-8">
                                <strong>Estado: </strong>
                                @if ($d->estado === 'true')
                                    <p style="color: blue">Encontrado</p>
                                @else
                                    <p style="color: red">Desaparecido</p>
                                @endif
                            </div>
                            <div class="col-6 col-md-4">
                                <p>
                                    <strong>{{ $d->created_at->format('d/m') }}</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    @endforeach
            @else
                @if (!is_null($selectedDesaparecido))
                    @foreach ($desaparecido as $d)
                    <div class="col-md-3">
                        <div class="card card__course">
                            <div
                                class="card-header card-header-large card-header-dark bg-dark d-flex justify-content-center">
                                <a class="card-header__title  justify-content-center align-self-center d-flex flex-column"
                                    href="{{ asset('storage') }}/{{ $d->icon }}">
                                    <span><img src="{{ asset('storage') }}/{{ $d->icon }}" class="mb-1"
                                            style="width:150px;" alt="logo"></span>
                                    {{-- <span class="course__subtitle">{{ $d->nome }}</span> --}}
                                </a>
                            </div>
                            <div class="p-3">
                                <p class="text-center"><strong>{{ $d->nome }}</strong>
                                    <hr><br />
                                    <strong>Esquadra: </strong>{{ $d->esquadras->nome }}<br />
                                    <strong>Fase: </strong>{{ $d->fases->nome }}<br />
                                    <strong>Idade: </strong>{{ $d->idade }}<br />

                                </p>
                            </div>
                            <div class="container col-12 col-md-12">
                                <div class="row">
                                    <div class="col-2 col-md-8">
                                        <strong>Estado: </strong>
                                        @if ($d->estado === 'true')
                                            <p style="color: blue">Encontrado</p>
                                        @else
                                            <p style="color: red">Desaparecido</p>
                                        @endif
                                    </div>
                                    <div class="col-6 col-md-4">
                                        <p>
                                            <strong>{{ $d->created_at->format('d/m') }}</strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                    @foreach ($de as $d)
                        <div class="col-md-3">
                            <div class="card card__course">
                                <div
                                    class="card-header card-header-large card-header-dark bg-dark d-flex justify-content-center">
                                    <a class="card-header__title  justify-content-center align-self-center d-flex flex-column"
                                        href="{{ asset('storage') }}/{{ $d->icon }}">
                                        <span><img src="{{ asset('storage') }}/{{ $d->icon }}" class="mb-1"
                                                style="width:150px;" alt="logo"></span>
                                        {{-- <span class="course__subtitle">{{ $d->nome }}</span> --}}
                                    </a>
                                </div>
                                <div class="p-3">
                                    <p class="text-center"><strong>{{ $d->nome }}</strong>
                                        <hr><br />
                                        <strong>Esquadra: </strong>{{ $d->esquadras->nome }}<br />
                                        <strong>Fase: </strong>{{ $d->fases->nome }}<br />
                                        <strong>Idade: </strong>{{ $d->idade }}<br />

                                    </p>
                                </div>
                                <div class="container col-12 col-md-12">
                                    <div class="row">
                                        <div class="col-2 col-md-8">
                                            <strong>Estado: </strong>
                                            @if ($d->estado === 'true')
                                                <p style="color: blue">Encontrado</p>
                                            @else
                                                <p style="color: red">Desaparecido</p>
                                            @endif
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <p>
                                                <strong>{{ $d->created_at->format('d/m') }}</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            @endif
        </div>

    </div>
</div>
