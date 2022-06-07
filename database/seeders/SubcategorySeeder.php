<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    public function run()
    {
        $subcategories = [
            /* Albums */
            [
                'category_id' => 1,
                'name' => 'Grupo Masculino',
                'slug' => Str::slug('Grupo Masculino')
            ],

            [
                'category_id' => 1,
                'name' => 'Grupo Femenino',
                'slug' => Str::slug('Grupo Femenino')
            ],

            [
                'category_id' => 1,
                'name' => 'Solistas',
                'slug' => Str::slug('Solistas')
            ],

            /* DVD-BluRay */
            [
                'category_id' => 2,
                'name' => 'Grupo Masculino',
                'slug' => Str::slug('Grupo Masculino')
            ],

            [
                'category_id' => 2,
                'name' => 'Grupo Femenino',
                'slug' => Str::slug('Grupo Femenino')
            ],

            [
                'category_id' => 2,
                'name' => 'Solistas',
                'slug' => Str::slug('Solistas')
            ],

            /* Merchandise */
            [
                'category_id' => 3,
                'name' => 'Grupo Masculino',
                'slug' => Str::slug('Grupo Masculino')
            ],

            [
                'category_id' => 3,
                'name' => 'Grupo Femenino',
                'slug' => Str::slug('Grupo Femenino')
            ],

            [
                'category_id' => 3,
                'name' => 'Solistas',
                'slug' => Str::slug('Solistas')
            ],

        ];

        foreach ($subcategories as $subcategory){
            Subcategory::create($subcategory);
        }
    }
}
