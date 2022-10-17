<div class="row no-gutters">
    {{-- <div class="col-lg-4 card-body">
        <p><strong class="headings-color">Inputs</strong></p>
    </div> --}}
    <div class="col-lg-12 card-form__body card-body">
        <form>
            <div class=" add-input">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Digite o nome"
                                wire:model="informacao.0">
                            @error('informacao.0')
                                <span class="text-danger error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <input type="file" class="custom-file-input" wire:model="icon.0">
                            <label class="custom-file-label" for="customFileLang">Seleccionar a foto</label>
                            @error('icon')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn text-white btn-info btn-sm"
                            wire:click.prevent="add({{ $i }})">Add</button>
                    </div>
                </div>
            </div>

            @foreach ($inputs as $key => $value)
                <div class=" add-input">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Digite o nome"
                                    wire:model="informacao.{{ $value }}">
                                @error('informacao.' . $value)
                                    <span class="text-danger error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                    <input type="file" class="custom-file-input" wire:model="icon.{{ $value }}">
                                <label class="custom-file-label" for="customFileLang">Seleccionar a foto</label>
                                @error('icon.'.$value)
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-danger btn-sm"
                                wire:click.prevent="remove({{ $key }})">Remove</button>
                        </div>
                    </div>
                </div>
            @endforeach

            {{-- <div class="row">
                <div class="col-md-12">
                    <button type="button" wire:click.prevent="storeInf()"
                        class="btn btn-success btn-sm">Submit</button>
                </div>
            </div> --}}

        </form>
    </div>
</div>
