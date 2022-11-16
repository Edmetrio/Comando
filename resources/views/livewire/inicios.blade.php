<div>

    <div class="container-fluid page__heading-container">
        <div class="page__heading d-flex align-items-center">
            <div class="flex">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item active"
                            aria-current="page">Acesso Rápido</li>
                    </ol>
                </nav>
                <h1 class="m-0">Acesso Rápido</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid page__container">
        <div class="row card-group-row">
            <div class="col-lg-3 col-md-4 card-group-row__col">
                <div class="card card-group-row__card">
                    <div class="p-2 d-flex flex-row align-items-center">
                        <div class="avatar avatar-xs mr-2">
                            <span class="avatar-title rounded-circle text-center bg-primary">
                                <img src="{{ asset('assets/images/logos/icons.png') }}" alt="Simbolo"
                                class="avatar-img rounded-circle" style="width: 40px; height: 40px;">
                            </span>
                        </div>
                        <a href="{{ Route('desaparecidos') }}"
                           class="text-dark">
                            <strong>Desaparecidos</strong>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 card-group-row__col">
                <div class="card card-group-row__card">
                    <div class="p-2 d-flex flex-row align-items-center">
                        <div class="avatar avatar-xs mr-2">
                            <span class="avatar-title rounded-circle text-center">
                                <img src="{{ asset('assets/images/logos/9.png') }}" alt="Simbolo"
                                class="avatar-img rounded-circle" style="width: 40px; height: 40px;">
                            </span>
                        </div>
                        <a href="{{ Route('permissao') }}"
                           class="text-dark">
                            <strong>Permissões</strong>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 card-group-row__col">
                <div class="card card-group-row__card">
                    <div class="p-2 d-flex flex-row align-items-center">
                        <div class="avatar avatar-xs mr-2">
                            <span class="avatar-title rounded-circle text-center bg-success">
                                <img src="{{ asset('assets/images/logos/2.png') }}" alt="Simbolo"
                                class="avatar-img rounded-circle" style="width: 40px; height: 40px;">
                            </span>
                        </div>
                        <a href="{{ Route('indiciado') }}"
                           class="text-dark">
                            <strong>Indiciados</strong>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 card-group-row__col">
                <div class="card card-group-row__card">
                    <div class="p-2 d-flex flex-row align-items-center">
                        <div class="avatar avatar-xs mr-2">
                            <span class="avatar-title rounded-circle text-center bg-info">
                                <img src="{{ asset('assets/images/logos/8.png') }}" alt="Simbolo"
                                class="avatar-img rounded-circle" style="width: 40px; height: 40px;">
                            </span>
                        </div>
                        <a href="{{ Route('esquadra')}}"
                           class="text-dark">
                            <strong>Esquadras</strong>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 card-group-row__col">
                <div class="card card-group-row__card">
                    <div class="p-2 d-flex flex-row align-items-center">
                        <div class="avatar avatar-xs mr-2">
                            <span class="avatar-title rounded-circle text-center bg-blue">
                                <img src="{{ asset('assets/images/logos/2.png') }}" alt="Simbolo"
                                class="avatar-img rounded-circle" style="width: 40px; height: 40px;">
                            </span>
                        </div>
                        <a href="{{ Route('role') }}"
                           class="text-dark">
                            <strong>Regra</strong>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 card-group-row__col">
                <div class="card card-group-row__card">
                    <div class="p-2 d-flex flex-row align-items-center">
                        <div class="avatar avatar-xs mr-2">
                            <span class="avatar-title rounded-circle text-center bg-warning">
                                <i class="material-icons text-white icon-18pt">account_balance</i>
                            </span>
                        </div>
                        <a href="{{ Route('rota') }}"
                           class="text-dark">
                            <strong>Rota</strong>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 card-group-row__col">
                <div class="card card-group-row__card">
                    <div class="p-2 d-flex flex-row align-items-center">
                        <div class="avatar avatar-xs mr-2">
                            <span class="avatar-title rounded-circle text-center bg-primary">
                                <i class="material-icons text-white icon-18pt">assignment</i>
                            </span>
                        </div>
                        <a href="{{ Route('provincia') }}"
                           class="text-dark">
                            <strong>Província</strong>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 card-group-row__col">
                <div class="card card-group-row__card">
                    <div class="p-2 d-flex flex-row align-items-center">
                        <div class="avatar avatar-xs mr-2">
                            <span class="avatar-title rounded-circle text-center bg-danger">
                                <i class="material-icons text-white icon-18pt">phone</i>
                            </span>
                        </div>
                        <a href="{{ Route('distrito')}}"
                           class="text-dark">
                            <strong>Distritos</strong>
                        </a>
                    </div>
                </div>
            </div>
        </div>

       

    </div>

</div>