<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('items')->insert([
            ['category_id' => 1, 'name' => 'Laptop', 'price' => 599.99],
            ['category_id' => 1, 'name' => 'Smartphone', 'price' => 799.99],
            ['category_id' => 2, 'name' => 'Yoga Mat', 'price' => 25],
            ['category_id' => 2, 'name' => 'Vitamins', 'price' => 15],
            ['category_id' => 3, 'name' => 'Math Textbook', 'price' => 39.99],
            ['category_id' => 3, 'name' => 'Notebook', 'price' => 5],
        ]);
    }
}