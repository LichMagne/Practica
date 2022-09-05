<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Empresa;
use App\Models\Paises;
use App\Models\Ciudad;

class Empresas extends Component
{
    public $country, $city;
    public $ciudadesA = [], $paisesA = [];
    public $empresa, $paises, $row, $ciudades, $id_empresa = '', $empresa_name, $pais_id, $ciudad_id, $title1;
    protected $listeners = ['refreshComponent' => '$refresh'];
    protected $rules =
    [
        'empresa_name' => 'required|string|max:255',
        'country' => 'required|integer|',
        'city' => 'required|integer|max:255',

    ];

    public function mount()
    {

        $this->empresa = Empresa::all();
        $this->paisesA = Paises::all();
        $this->ciudadesA = collect();
    }



    public function updatedCountry($value)
    {
        $this->ciudadesA = Ciudad::where('pais_id', $value)->get();
    }


    public function render()
    {

        return view('livewire.Empresas.empresas');
    }
    public function destroy($id)
    {
        

        Empresa::find($id)->delete();
        $this->emit('refreshComponent');
    }
    public function create()
    {
        $this->title1 = 'Crear';
        $this->limpiar();
    }
    public function editar($id)
    {
        $empresa = Empresa::findOrFail($id);
        $this->id_empresa = $empresa->id;
        $this->empresa_name = $empresa->empresa_name;
        $this->country = $empresa->pais_id;
        $this->city = $empresa->ciudad_id;
        $this->title1 = 'Editar';
    }

    public function store()
    {

        
        $this->validate();

        Empresa::updateOrCreate(
            ['id' => $this->id_empresa],
            [
                'empresa_name' => $this->empresa_name,
                'pais_id' => $this->country,
                'ciudad_id' => $this->city,
            ]
        );

/*
        session()->flash(
            'message',
            $this->id_empresa ? '¡Actualización exitosa!' : '¡Alta Exitosa!'
        );
        */
        //session()->flash('title', 'Creado Exitosamente!');
        $this->emitUp('refreshComponent');
        //$this->mount();
        //$this->render();
    }


    public function limpiar()
    {
        $this->id_empresa = '';
        $this->empresa_name = '';
        $this->country = '0';
        $this->city = '0';
    }
}
