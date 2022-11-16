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
                    <h1 class="m-0">Lista dos Desaparecidos</h1>
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
                    @include('livewire.desaparecido.update')
                @else
                    @include('livewire.desaparecido.create')
                @endif
                <div class="row no-gutters">
                    {{-- <div class="col-lg-4 card-body">
                        <p><strong class="headings-color">Lista de Todos Países</strong></p>
                        <p class="text-muted">Encontra listada todas Províncias existentes no país</p>
                    </div> --}}
                    <div class="col-lg-12 card-form__body">

                        <div class="table-responsive border-bottom" data-toggle="lists"
                            data-lists-values='["js-lists-values-employee-name"]'>

                            <div class="search-form search-form--light m-3">
                                <input type="text" class="form-control search" placeholder="Procurar">
                                <button class="btn" type="button"><i class="material-icons">search</i></button>
                            </div>

                            <table class="table mb-0 thead-border-top-0">
                                <thead>
                                    <tr>
                                        <th style="width: 120px;">Nome</th>
                                        <th style="width: 120px;">Esquadra</th>
                                        <th style="width: 120px;">Fase</th>
                                        <th style="width: 120px;">Idade</th>
                                        <th style="width: 120px;">Icon</th>
                                        <th style="width: 120px;">Estado</th>
                                        <th style="width: 160px;">Acções</th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="staff02">
                                    @forelse ($desaparecido as $p)
                                        <tr>
                                            <td><span class="js-lists-values-employee-name">{{ $p->nome }}</span>
                                            </td>
                                            <td><span
                                                    class="js-lists-values-employee-name">{{ $p->esquadras->nome }}</span>
                                            </td>
                                            <td><span class="js-lists-values-employee-name">{{ $p->fases->nome }}</span>
                                            </td>
                                            <td><span class="js-lists-values-employee-name">{{ $p->idade }}</span>
                                            </td>
                                            <td><img src="{{ asset('storage') }}/{{ $p->icon }}"
                                                    style="width: 70px; height: 70px;"></td>
                                            <td>{{-- <div class="custom-control custom-switch">
                                                <input type="checkbox" wire:model="estado" wire:click="switch('{{ $p->id }}')" class="custom-control-input" id="{{ $p->nome }}">
                                                <label class="custom-control-label" for="{{ $p->nome }}"></label>
                                              </div></span> --}}
                                              @if($p->estado === 'true') <p style="color: blue"> Encontrado </p> @else <p style="color: red">Desaparecido</p>  @endif
                                            </td>
                                            <td>
                                                <button wire:click.prevent="edit('{{ $p->id }}')"
                                                    class="btn btn-primary btn-sm">Alterar</button>
                                                <button wire:click.prevent="delete('{{ $p->id }}')"
                                                    class="btn btn-danger btn-sm">Apagar</button>
                                            </td>
                                        </tr>
                                    @empty
                                        <h1>Dados não encontrados!</h1>
                                    @endforelse
                                </tbody>
                            </table>


                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
