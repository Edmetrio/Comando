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
                    <h1 class="m-0">Lista dos Indiciados</h1>
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
                @if ($updateMode)
                    @include('livewire.indiciado.update')
                @else
                    @include('livewire.indiciado.create')
                @endif
                <div class="row no-gutters">
                    {{-- <div class="col-lg-4 card-body">
                            <p><strong class="headings-color">Lista de Todos Países</strong></p>
                            <p class="text-muted">Encontra listada todas Províncias existentes no país</p>
                        </div> --}}
                    <div class="col-lg-12 card-form__body">

                        <div class="table-responsive border-bottom" data-toggle="lists"
                            data-lists-values='["js-lists-values-employee-name"]'>

                            <div class="form-row col-md-12">
                                <div class="form-group col-md-6">
                                    <div class="search-form search-form--light">
                                        <input type="text" class="form-control searc" wire:model="search"
                                            placeholder="Procurar">
                                        <button class="btn" type="button"><i
                                                class="material-icons">search</i></button>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="form-row">
                                        <select class="custom-select" wire:model="selectedIndiciado">
                                            <option selected>Seleccione o Indiciado</option>
                                            @foreach ($indiciado as $p)
                                                <option value="{{ $p->id }}">{{ $p->nome }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('indiciado_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            @if (!is_null($selectedIndiciado))
                                <table class="table mb-0 thead-border-top-0">
                                    <thead>
                                        <tr>

                                            <th style="width: 120px;">Nome</th>
                                            {{-- <th style="width: 120px;">Esquadra</th> --}}
                                            <th style="width: 120px;">Endereço</th>
                                            <th style="width: 120px;">Estado anexo</th>
                                            {{-- <th style="width: 120px;">fingerprint</th>
                                        <th style="width: 120px;">assinatura</th> --}}
                                            <th style="width: 10px;">Acções</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list" id="staff02">
                                        @forelse ($indiciados as $p)
                                            <tr>
                                                <td><span
                                                        class="js-lists-values-employee-name">{{ $p->nome }}</span>
                                                </td>
                                                {{-- @foreach ($p->esquadras as $e)
                                                    <td><span
                                                            class="js-lists-values-employee-name">{{ $e->esquadras->nome }}</span>
                                                    </td>
                                                @endforeach --}}
                                                <td><span
                                                        class="js-lists-values-employee-name">{{ $p->endereco }}</span>
                                                </td>
                                                @if ($p->estado === 'true')
                                                    <td><span class="js-lists-values-employee-name">True</span></td>
                                                @elseif($p->estado === 'false')
                                                    <td><span class="js-lists-values-employee-name">False</span></td>
                                                @endif

                                                <td>
                                                    <button class="btn btn-primary btn-sm"><a
                                                            href="{{-- {{   }} --}}"></a>Gerar</button>
                                                    <button class="btn btn-primary btn-sm"><a
                                                            href="{{ url("relatorio/$p->id") }}"
                                                            class="btn btn-sm btn-preimary"><i
                                                                class="material-eye">Ver</i></button>
                                                    <button wire:click.prevent="delete('{{ $p->id }}')"
                                                        class="btn btn-danger btn-sm">Apagar</button>
                                                </td>

                                            </tr>
                                        @empty
                                            <h1>Dados não encontrados!</h1>
                                        @endforelse
                                    </tbody>
                                </table>
                            @else
                                <table class="table mb-0 thead-border-top-0">
                                    <thead>
                                        <tr>

                                            <th style="width: 120px;">Nom</th>
                                            {{-- <th style="width: 120px;">Esquadra</th> --}}
                                            <th style="width: 200px;">Endereço</th>
                                            <th style="width: 120px;">Estado anexo</th>
                                            <th style="width: 120px;">Acções</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list" id="staff02">
                                        @forelse ($ultimas as $p)
                                            <tr>
                                                <td><span
                                                        class="js-lists-values-employee-name">{{ $p->nome }}</span>
                                                </td>
                                                {{-- @foreach ($p->esquadras as $e)
                                                    <td><span
                                                            class="js-lists-values-employee-name">{{ $e->nome }}</span>
                                                    </td>
                                                @endforeach --}}
                                                <td><span
                                                        class="js-lists-values-employee-name">{{ $p->endereco }}</span>
                                                </td>
                                                @if ($p->estado === 'true')
                                                    <td><span class="js-lists-values-employee-name">True</span></td>
                                                @elseif($p->estado === 'false')
                                                    <td><span class="js-lists-values-employee-name">False</span></td>
                                                @endif
                                                <td>
                                                    {{-- <button class="btn btn-info"><a
                                                            href="{{ url("relatorio/$p->id") }}"></a>Adicionar</button> --}}
                                                    <button class="btn btn-info"><a href="{{ url("processo/$p->id") }}"
                                                            class="btn btn-sm btn-preimary"><i
                                                                class="material-eye">Visualizar</i></button>
                                                   {{--  <button wire:click.prevent="delete('{{ $p->id }}')"
                                                        class="btn btn-primary">Apagar</button> --}}
                                                </td>

                                            </tr>
                                        @empty
                                            <h1>Dados não encontrados!</h1>
                                        @endforelse
                                    </tbody>
                                </table>
                            @endif
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
