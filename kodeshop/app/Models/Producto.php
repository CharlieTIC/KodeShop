<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Producto extends Model
{
    use HasFactory;
    public $timestamps = false;

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
