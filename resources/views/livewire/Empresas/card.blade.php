
<div class="row">
@foreach ($empresa as $e)
<div id="ordCard" class="col-md" >
    <div  class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$e->empresa_name}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$e->pais->pais_nombre}}</h6>
          <h6 class="card-subtitle mb-2 text-muted">{{$e->ciudad->ciudad_nombre}}</h6>
          <button type="button" wire:wait  wire:click='destroy({{ $e->id }})'
            class="btn btn-danger btn-md"><i class="bi bi-trash"></i></button>
            <button type="button" wire:wait  data-bs-toggle="modal" data-bs-target="#createEmpresa" wire:click='editar({{ $e->id }})'
                class="btn btn-info btn-md"><i class="bi bi-pencil-square"></i></button>
        </div>
      </div>
    </div>          
@endforeach   
</div> 