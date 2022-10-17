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
                    @include('livewire.indiciadoitem.update')
                @else
                    @include('livewire.indiciadoitem.create')
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
                                        <th style="width: 120px;">Tipo de crime</th>
                                        <th style="width: 10px;">Acções</th>
                                    </tr>
                                </thead>
                                <tbody class="list" id="staff02">
                                    @forelse ($item as $p)
                                        <tr>
                                            <td><span class="js-lists-values-employee-name">{{ $p->indiciados->nome }}</span>
                                            </td>
                                            <td><span class="js-lists-values-employee-name">{{ $p->esquadras->nome }}</span>
                                            </td>
                                            <td><span class="js-lists-values-employee-name">{{ $p->crimes->nome }}</span>
                                            </td>
                                            @if ($p->estado === 'true')
                                                <td><span class="js-lists-values-employee-name">True</span></td>
                                            @elseif($p->estado === 'false')
                                                <td><span class="js-lists-values-employee-name">False</span></td>
                                            @endif
                                            <td>
                                                {{-- <button class="btn btn-primary btn-sm"><a href="{{ url("relatorio/$p->id") }}"></a>Gerar</button> --}}
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

                            <div class="card p-3 m-3">
                                <div class="d-flex">
                                    <div class="flex-fill d-flex">

                                        <div class="avatar avatar-md mr-3" data-toggle="tooltip" data-placement="top"
                                            title="Luke P.">
                                            <img src="{{-- {{ asset('storage') }}/{{ $p->icon }} --}}" alt="Avatar"
                                                class="avatar-img rounded-circle">
                                        </div>

                                        <div class="flex-fill">
                                            <div class="d-flex mb-2">
                                                <a href="#" class="text-body mr-1"><strong>{{-- {{ $p->nome }} --}}</strong></a>
                                                <div class="text-muted"> commented on ticket <a href='#'>#3292</a>
                                                </div>
                                                <!-- <span class="text-muted ml-1"><i class="material-icons icon-16pt">email</i> contact@frontted.com</span> -->
                                            </div>

                                            <div class="mb-2">
                                                <strong>Esquadra:</strong> {{-- {{ $p->esquadras->nome }} --}}
                                                <strong>Fase:</strong> {{-- {{ $p->fases->nome }} --}}
                                            </div>
                                            <div class="">
                                                <span
                                                    class="badge badge-soft-warning badge-pill mr-1">EVENTS</span><span
                                                    class="badge badge-soft-purple badge-pill mr-1">TICKETS</span><span
                                                    class="badge badge-soft-danger badge-pill mr-1">ISSUES</span>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="text-muted">5 min ago</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
