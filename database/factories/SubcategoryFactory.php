<?php

namespace Database\Factories;

use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class SubcategoryFactory extends Factory
{

    protected $model = Subcategory::class;

    public function definition()
    {
        return [
            'image' => 'subcategories/' . $this->faker->image('storage/app/subcategories', 640, 480, null, false)
        ];
    }
}
