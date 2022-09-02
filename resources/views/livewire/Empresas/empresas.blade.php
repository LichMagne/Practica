<div>
    <div class="container">
        <button type="button" data-bs-toggle="modal" wire:click='create' data-bs-target="#createEmpresa" class="btn btn-success"> Agregar
            Empresa</button>
        @include('livewire.Empresas.add')

        @foreach ($empresa as $e)
        <div class="row">     
            <div id="ordCard" class="col">
                <div  class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">{{$e->empresa_name}}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">{{$e->pais->pais_nombre}}</h6>
                      <h6 class="card-subtitle mb-2 text-muted">{{$e->ciudad->ciudad_nombre}}</h6>
                      <button type="button" wire:wait data-bs-toggle="modal" data-bs-target="#messageModal" wire:click='destroy({{ $e->id }})'
                        class="btn btn-danger btn-md"><i class="bi bi-trash"></i></button>

                      <a href="#" class="card-link">Another link</a>
                    </div>
                  </div>
                </div>          
            </div>
            @endforeach    
        
                    {{-- 
                        <tbody>
                            <tr>
                                <td hidden>{{ $p->id }}</td>
                                <td>{{ $p->product_name }}</td>
                                <td>{{ $p->type_product }}</td>
                                <td>{{ $p->stock }}</td>
                                <td>{{ $p->cost }}</td>
                                <td>
                                    <i></i>
                                    <a class="btn btn-info" href="{{route('edit',$p->id)}}">Editar</a>
                                   
                                        <button type="button" wire:wait  data-bs-toggle="modal" data-bs-target="#createModal" wire:click='editar({{ $p->id }})'
                                            class="btn btn-info btn-md"><i class="bi bi-pencil-square"></i></button>
                                </td>
                            </tr>
                        </tbody>
                


                </table> --}}

      
   

    </div>
</div>
@push('script')

@endpush
