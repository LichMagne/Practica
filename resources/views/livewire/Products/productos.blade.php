<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">


                <button type="button" data-bs-toggle="modal" wire:click='create' data-bs-target="#createModal" class="btn btn-success"> Agregar
                    Producto</button>
                @include('livewire.Products.add')


                <table class="table">
                    <thead>
                        <tr>
                            <th hidden scope="col">Id</th>
                            <th scope="col">Producto</th>
                            <th scope="col">Tipo Producto</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Precio</th>
                        </tr>
                    </thead>
                    @foreach ($productos as $p)
                        <tbody>
                            <tr>
                                <td hidden>{{ $p->id }}</td>
                                <td>{{ $p->product_name }}</td>
                                <td>{{ $p->type_product }}</td>
                                <td>{{ $p->stock }}</td>
                                <td>{{ $p->cost }}</td>
                                <td>
                                    <i></i>
                                    {{-- <a class="btn btn-info" href="{{route('edit',$p->id)}}">Editar</a> --}}
                                    <button type="button" wire:wait data-bs-toggle="modal" data-bs-target="#messageModal" wire:click='destroy({{ $p->id }})'
                                        class="btn btn-danger btn-md"><i class="bi bi-trash"></i></button>

                                        <button type="button" wire:wait  data-bs-toggle="modal" data-bs-target="#createModal" wire:click='editar({{ $p->id }})'
                                            class="btn btn-info btn-md"><i class="bi bi-pencil-square"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach


                </table>

            </div>
            
        </div>
     @include('livewire.alert')

    </div>
</div>
@push('script')

@endpush
