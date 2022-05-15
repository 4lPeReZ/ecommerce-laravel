<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'image'];

    //Relacion 1 : N
    public function subcategories(){
        return $this->hasMany(Subcategory::class);
    }

    //Relacion N : M
    public function brands(){
        return $this->belongsToMany(Brand::class);
    }

    //Relacion 1 : N through
    public function products(){
        return $this->hasManyThrough(Product::class, Subcategory::class);
    }
}
