<div id="addAnexo" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="px-3">
                    <div class="d-flex justify-content-center mt-2 mb-4 navbar-light">
                        <a href="index.html" class="navbar-brand" style="min-width: 0">
                            <img class="navbar-brand-icon" src="{{ asset('assets/images/avatar/nacional.png') }}"
                                width="50" alt="FlowDash">
                        </a>
                    </div>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Província:</label>
                            <input type="text" wire:model="icon" class="form-control" id="exampleInputPassword1" placeholder="Digite a província ..">
                            @error('icon') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <button wire:click.prevent="storeA()" class="btn btn-primary">Adicionar</button>
                    </form>
                </div>
            </div> <!-- // END .modal-body -->
        </div> <!-- // END .modal-content -->
    </div> <!-- // END .modal-dialog -->
</div>

{{-- <div id="addAnexo" class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="exampleFormControlTextarea1">Descrição:</label>
                            <input class="form-control" wire:model="icon" id="exampleFormControlTextarea1" rows="6"/>
                            @error('icon')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Anexo</label>
                            <input type="file" wire:model="anexo" class="form-control" id="inputPassword4">
                            @error('anexo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <button wire:click.prevent="storeA()" type="button" class="btn btn-success">Adicionar</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div> --}}
