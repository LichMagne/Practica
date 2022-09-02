 <div wire:ignore.self class="modal fade" id="createEmpresa" tabindex="-1" role="dialog" aria-labelledby="createLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createLabelTitle">{{$title1}}  </h5>
                <button type="button"  class="btn-close btn-close-whit" data-bs-dismiss="modal"  aria-label="Close"> </button>
            </div>
           <div class="modal-body">
                <form wire:submit.prevent="storeProduct">
                    <div class="form-group">
                        <input hidden type="text" class="form-control" id="id_empresa"  wire:model="id_empresa">                  
                    </div>
                    <div class="form-group">
                        <label for="empresa_name">Nombre de la Empresa</label>
                        <input type="text" class="form-control" id="empresa_name" placeholder="Ingresar Nombre" wire:model="empresa_name">
                        @error('empresa_name') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                
                </p>
@if ($id_empresa<1)
<button type="submit"    id="btnAdd" class="btn btn-primary close-modal">Crear Producto</button>
@else
<button type="submit"    id="btnAdd" class="btn btn-primary close-modal">Editar Producto</button>
@endif
                </form>
            </div>
        </div>
    </div>
</div>

