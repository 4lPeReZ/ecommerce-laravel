<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{

    protected $model = Category::class;

    public function definition()
    {
        return [
            'image' => 'products/' . $this->faker->image('storage/app/public/products', 640, 480, null, false)
        ];
    }
}
