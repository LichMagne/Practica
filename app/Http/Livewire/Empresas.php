<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Empresa;

class Empresas extends Component
{
    public $selectedPais=null,$selectedCiudad=null;
    public $empresa,$id_empresa,$empresa_name,$pais_id,$ciudad_id,$title1;
    protected $rules =
    [
      'empresa_name' => 'required|string|max:255',
      'pais_id' => 'required|integer|max:255',
      'ciudad_id' => 'required|integer|max:255',
      
    ];


    public function render()
    {
        $this->empresa = Empresa::all();
        return view('livewire.Empresas.empresas');
    }
    public function destroy($id)
    {
       Empresa::find($id)->delete();
     
    }
    public function create()
    {
    $this->title1 ='Crear';
    $this->limpiar();
    }

    public function storeEmpresa()
    {
     $this->validate();

     Empresa::updateOrCreate(['id'=>$this->id_empresa],
     [
         'empresa_name' => $this->empresa_name,
         'pais_id' => $this->pais_id,
         'ciudad_id' => $this->ciudad_id,
         
         
     ]);


     session()->flash('message',
        $this->id_empresa ? '¡Actualización exitosa!' : '¡Alta Exitosa!');
     session()->flash('title', 'Creado Exitosamente!');
     $this->limpiar();
    }

    public function limpiar(){
    $this->id_empresa = '';
     $this->empresa_name='';
     $this->pais_id='';
     $this->ciudad_id='';
    
    }


}
