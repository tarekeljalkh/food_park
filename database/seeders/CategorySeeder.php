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
        Category::insert([
            [
                'name' => 'Burger',
                'slug' => 'burger',
                'status' => 1,
                'show_at_home' => 1,
            ],
            [
                'name' => 'Chicken',
                'slug' => 'chicken',
                'status' => 1,
                'show_at_home' => 1,
            ],
            [
                'name' => 'Pizza',
                'slug' => 'pizza',
                'status' => 1,
                'show_at_home' => 1,
            ],
            [
                'name' => 'Desserts',
                'slug' => 'desserts',
                'status' => 1,
                'show_at_home' => 1,
            ],
        ]);
    }
}
