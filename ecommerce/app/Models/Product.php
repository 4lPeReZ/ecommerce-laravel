<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    //Relacion 1 : N inversa
    public function brands(){
        return $this->belongsTo(Brand::class);
    }

    //Relacion 1 : N inversa
    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }

    //Relacion 1 : N poly
    public function image(){
        return $this->morphMany(Image::class, "Imageable");
    }
}
