<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Productos extends Component
{

public $productos,$id_producto,$product_name,$type_product,$stock,$cost,$title1;

protected $rules =
[
  'product_name' => 'required|string|max:255',
  'type_product' => 'required|string|max:255',
  'stock' => 'required|integer|max:255',
  'cost' => 'required|integer',
];


    public function render()
    {
        $this->productos = Products::all();
        return view('livewire.Products.productos');
    }



    public function create()
    {
    $this->title1 ='Crear';
    $this->limpiar();
    }

     public function editar($id)
     {
       $producto = Products::findOrFail($id);
       $this->id_producto = $producto->id;
       $this->product_name = $producto->product_name;
       $this->type_product = $producto->type_product;
       $this->stock = $producto->stock;
       $this->cost = $producto->cost;
       $this->title1 ='Editar';
     }


    public function destroy($id)
    {
        Products::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
        session()->flash('title', 'Registro eliminado correctamente');
    }


    public function storeProduct()
    {
     $this->validate();

     Products::updateOrCreate(['id'=>$this->id_producto],
     [
         'product_name' => $this->product_name,
         'type_product' => $this->type_product,
         'stock' => $this->stock,
         'cost' => $this->cost,
     ]);


     session()->flash('message',
        $this->id_producto ? '¡Actualización exitosa!' : '¡Alta Exitosa!');
     session()->flash('title', 'Creado Exitosamente!');
     $this->limpiar();
    }

    public function limpiar(){
     $this->product_name='';
     $this->type_product='';
     $this->stock='';
     $this->cost='';
    }


}
