<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

    // Relacion uno a muchos inversa

    public function subcategoria(){
        return $this->belongsTo(Subcategoria::class);
    }

        protected $fillable = [
        'sku',
        'nombre',
        'descripcion',
        'image_path',
        'precio',        
        'subcategoria_id'
    ];      
    
}
