<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() 
    {
        User::create([
            'name' => 'Alvaro Perez Rey',
            'email' => 'alvarop05@hotmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}