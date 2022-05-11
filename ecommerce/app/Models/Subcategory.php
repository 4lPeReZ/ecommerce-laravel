<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    //Relacion 1 : N
    public function products(){
        return $this->hasMany(Product::class);
    }

    //Relacion 1 : N inversa
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
