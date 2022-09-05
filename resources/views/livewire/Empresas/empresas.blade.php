<div>
    <div class="container">
        <button type="button" data-bs-toggle="modal" wire:click='create' data-bs-target="#createEmpresa" class="btn btn-success"> Agregar
            Empresa</button>
        @include('livewire.Empresas.add')
        <hr>


<div>   
            @include('livewire.Empresas.card')
</div>                   
                                
                                

      
   

    </div>
</div>
@push('script')

@endpush
