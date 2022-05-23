<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    const BORRADOR = 1;
    const PUBLICADO = 2;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    //Relacion 1 : N inversa
    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    //Relacion 1 : N inversa
    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }

    //Relacion 1 : N poly
    public function images(){
        return $this->morphMany(Image::class, "Imageable");
    }

        //URL AMIGABLES
        public function getRouteKeyName()
        {
            return 'slug';
        }
}
