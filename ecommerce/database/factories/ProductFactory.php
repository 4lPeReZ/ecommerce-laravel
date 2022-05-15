<?php

namespace Database\Factories;

use App\Models\Subcategory;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{

    protected $model = Product::class;

    public function definition()
    {
        $name = $this->faker->sentence(2);

        $quantity = 15;

        $subcategory = Subcategory::all()->random();
        $category = $subcategory->category;

        $brand = $category->brands->random();

        return [
            'name' => $name,
            'slug' =>Str::slug($name),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomElement([19.99, 49.99, 99.99]),
            'quantity' => $quantity,
            'status' => 2,
            'subcategory_id' => $subcategory->id,
            'brand_id' => $brand->id
        ];
    }
}
