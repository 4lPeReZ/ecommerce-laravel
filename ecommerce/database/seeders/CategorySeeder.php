<?php

namespace Database\Seeders;

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
            Category::factory(1)->create($category);
        }
    }
}
