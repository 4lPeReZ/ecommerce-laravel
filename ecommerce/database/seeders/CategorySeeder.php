<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Albums',
                'slug' => Str::slug('Albums'),
            ],
            [
                'name' => 'DVD-BluRay',
                'slug' => Str::slug('DVD-BluRay'),
            ],
            [
                'name' => 'Merchandise',
                'slug' => Str::slug('Merchandise'),
            ],

        ];

        foreach ($categories as $category){
            $category = Category::factory(1)->create($category)->first();

            $brands = Brand::factory(4)->create();
            foreach ($brands as $brand){
                $brand->categories()->attach($category->id);
            }
        }
    }
}