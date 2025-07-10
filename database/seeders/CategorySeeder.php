<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name' => 'Variedades']);

        Category::create(['name' => 'Economia']);

        Category::create(['name' => 'Lazer']);

        Category::create(['name' => 'Comida']);

        Category::create(['name' => 'Esportes']);

        Category::create(['name' => 'Música']);
    }
}
