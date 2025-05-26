<?php

namespace App\Livewire\Admin\Productos;

use Livewire\Component;

class ProductoCreate extends Component
{
    public $producto = [
        'sku' => '',
        'nombre' => '',
        'descripcion' => '',
        'image_path' => '',
        'precio' => '',
        'subcategoria_id' => '',
    ];


    public function render()
    {
        return view('livewire.admin.productos.producto-create');
    }
}
