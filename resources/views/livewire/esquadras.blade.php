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
                    <h1 class="m-0">Lista das Esquadras</h1>
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
                    @include('livewire.esquadra.update')
                @else
                    @include('livewire.esquadra.create')
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

                                        <th style="width: 120px;">Distrito</th>
                                        <th style="width: 120px;">Nome</th>
                                        <th style="width: 120px;">Endereço</th>
                                        <th style="width: 120px;">Contacto</th>
                                        <th style="width: 10px;">Acções</th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="staff02">
                                    @foreach ($esquadra as $p)
                                        <tr>
                                            <td><span
                                                    class="js-lists-values-employee-name">{{ $p->distritos->nome }}</span>
                                            </td>
                                            <td><span class="js-lists-values-employee-name">{{ $p->nome }}</span>
                                            </td>
                                            <td><span class="js-lists-values-employee-name">{{ $p->endereco }}</span>
                                            </td>
                                            <td><span class="js-lists-values-employee-name">{{ $p->contacto }}</span>
                                            </td>
                                            <td>
                                                <button wire:click.prevent="edit('{{ $p->id }}')"
                                                    class="btn btn-primary btn-sm">Alterar</button>
                                                <button wire:click.prevent="delete('{{ $p->id }}')"
                                                    class="btn btn-danger btn-sm">Apagar</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
