<div>
    <div class="mdk-drawer-layout__content page">

        <div class="container-fluid page__heading-container">
            <div class="page__heading d-flex align-items-center">
                <div class="flex">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">home</i></a>
                            </li>
                            <li class="breadcrumb-item">Página</li>
                            <li class="breadcrumb-item active" aria-current="page">Processo do Indiciado</li>
                        </ol>
                    </nav>
                    <h1 class="m-0">Processo do Indiciado</h1>
                </div>
            </div>
        </div>

        <div class="container-fluid page__container">

            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="px-3">
                                <div class="d-flex justify-content-center flex-column text-center my-5 navbar-light">
                                    <a href="index.html" class="navbar-brand d-flex flex-column m-0"
                                        style="min-width: 0">
                                        <img class="navbar-brand-icon mb-2" src="../assets/images/avatar/nacional.png"
                                            width="75px" alt="Foto">
                                        <span>Comando da PRM da Cidade de Maputo</span>
                                    </a>
                                    <div class="text-muted">Processo #MI{{ $indiciado->id }}</div>
                                </div>

                                <div class="row mb-2">
                                    <div class="col-lg">
                                        <div class="text-label">Dados do Indiciado</div>
                                        <p class="mb-4">
                                            <strong class="text-body">{{ $indiciado->indiciados->nome }}</strong><br>
                                            {{ $indiciado->indiciados->endereco }}<br>
                                            <strong>Crime: </strong>{{ $indiciado->crimes->nome }}<br>
                                        </p>
                                        {{-- <div class="text-label">Número do Processo</div>
                                        #MI{{ $indiciado->id }} --}}
                                    </div>
                                    <div class="col-lg text-right">
                                        <div class="text-label">Dados da Esquadra</div>
                                        <p class="mb-4">
                                            <strong class="text-body">{{ $indiciado->esquadras->nome }}</strong><br>
                                            {{ $indiciado->esquadras->endereco }}<br>
                                            {{ $indiciado->esquadras->contacto }}<br>
                                        </p>
                                        {{-- <div class="text-label">Data do Registro</div>
                                        {{ $indiciado->created_at }} --}}
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table border-bottom ">
                                        <thead>
                                            <tr class="bg-light">
                                                <th>Nome da Esquadra</th>
                                                <th>Tipo de Crime</th>
                                                <th class="text-right">Data do Registro</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $indiciado->esquadras->nome }}</td>
                                                <td>{{ $indiciado->crimes->nome }}</td>
                                                <td class="text-right">
                                                    {{ date_format($indiciado->created_at, 'd/m/Y') }}
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </div>

                                <div class="col-md-12 mb-4">
                                    <div class="text-label">Descrição do Crime</div>
                                    <p class="mb-4">
                                    <p class="text-justify font-italic text-break">{{ $indiciado->descricao }}</p><br>
                                    </p>
                                </div>

                                 @if ($indiciado->indiciados->estado === 'false')
                                    <div class="row m-2">
                                        <div class="col-6">
                                            <div class="text-label text-center mb-4">Chefe de Permanência</div>
                                            <hr>
                                        </div>
                                        <div class="col-6 mb-4">
                                            <div class="text-label text-center mb-4">Comandate da Esquadra</div>
                                            <hr>
                                        </div>
                                        <div class="col-12">
                                            <div
                                                class="text-label text-center mb-4  d-flex justify-content-center flex-column">
                                                Indiciado</div>
                                            <hr class="col-6 d-flex justify-content-center flex-column">
                                        </div>
                                    </div>
                                @elseif($indiciado->indiciados->estado === 'true')
                                    <div class="row col-md-12 mb-4" style="margin-left: 5%; margin-bottom: 10%;">
                                        <div class="col-6 col-md-4">
                                            <div class="text-label">FingerPrint</div>
                                            <div><img src="{{ asset('storage') }}/{{ $indiciado->indiciados->fingerprint }}"
                                                    style="width: 70px; height: 70px;"></div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="text-label">Foto</div>
                                            <div><img src="{{ asset('storage') }}/{{ $indiciado->indiciados->foto }}"
                                                    style="width: 70px; height: 70px;"></div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="text-label">Assinatura</div>
                                            <div><img src="{{ asset('storage') }}/{{ $indiciado->indiciados->assinatura }}"
                                                    style="width: 70px; height: 70px;"></div>
                                        </div>
                                    </div>
                                    
                                    <div class="row m-2">
                                        <div class="col-6">
                                            <div class="text-label text-center mb-4">Chefe de Permanência</div>
                                            <hr>
                                        </div>
                                        <div class="col-6 mb-4">
                                            <div class="text-label text-center mb-4">Comandate da Esquadra</div>
                                            <hr>
                                        </div>
                                        <div class="col-12">
                                            <div
                                                class="text-label text-center mb-4  d-flex justify-content-center flex-column">
                                                Indiciado</div>
                                            <hr class="col-6 d-flex justify-content-center flex-column">
                                        </div>
                                    </div>
                                @endif
                                <div class="m-5" style="text-align: center">
                                    <div class="text-label">Processado por computador</div>
                                    <div class="text-label">First Tech</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
