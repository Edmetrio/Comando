<div>
    <div class="container-fluid page__heading-container">
        <div class="page__heading">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">home</i></a></li>
                    <li class="breadcrumb-item">Desaparecido</li>
                </ol>
            </nav>

            <h1 class="m-0">Desaparecidos</h1>
        </div>
    </div>

    <div class="container-fluid page__container">

        <form action="#" class="card-margin">
            <div class="d-flex">
                <div class="search-form mr-3 search-form--light">
                    <input type="text" class="form-control" wire:model="search" placeholder="Procurar..." id="searchSample02">
                    <button class="btn" type="button"><i class="material-icons">search</i></button>
                </div>

                <div class="form-inline ml-auto">
                    <div class="form-group mr-3">
                        <label for="custom-select" class="text-label mr-2">Fases:</label>
                        <select id="custom-select" class="form-control custom-select" wire:model="selectedDesaparecido" style="width: 200px;">
                            <option selected="">Seleccione a fase</option>
                            @foreach($fase as $f)
                            <option value="{{$f->id}}">{{ $f->nome }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="published01" class="text-label mr-2">Estado</label>
                        <select id="published01" class="form-control custom-select" style="width: 200px;">
                            <option selected="">All</option>
                            <option value="1">In Progress</option>
                            <option value="3">New Releases</option>
                        </select>
                    </div>
                </div>
            </div>
        </form>

        <div class="row">
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
                                <p class="float-right mt-2"><strong>{{$d->created_at->format('d/m/y')}}</strong></p>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
            @endif

        </div>

        <div class="d-flex flex-row align-items-center mb-3">
            <div class="form-inline">
                <label for="custom-select" class="text-label mr-2">View</label>
                <select class="custom-select ml-2">
                    <option value="20" selected>20</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                    <option value="200">200</option>
                </select>
            </div>
            <div class="ml-3">
                20 <span class="text-muted">of 100</span> <a href="#" class="icon-muted"><i
                        class="material-icons">arrow_forward</i></a>
            </div>
        </div>

    </div>e
</div>
