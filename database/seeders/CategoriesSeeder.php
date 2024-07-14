<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categories;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categories::create(['name'=>'Penggunaan Harian']);
        Categories::create(['name'=>'Pekerja Kantoran']);
        Categories::create(['name'=>'Desain Grafis']);
        Categories::create(['name'=>'Gaming']);
        Categories::create(['name'=>'Programming']);
        Categories::create(['name'=>'Profesional']);
    }
}
