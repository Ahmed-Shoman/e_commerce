<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{

public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Electronics', 'description' => 'Devices and gadgets', 'imagepath' => 'images/categories/electronics.jpg'],
            ['name' => 'Furniture', 'description' => 'Home and office furniture', 'imagepath' => 'images/categories/furniture.jpg'],
            ['name' => 'Fashion', 'description' => 'Clothing and accessories', 'imagepath' => 'images/categories/fashion.jpg'],
            ['name' => 'Books', 'description' => 'Books and educational material', 'imagepath' => 'images/categories/books.jpg'],
            ['name' => 'Home Appliances', 'description' => 'Home kitchen appliances', 'imagepath' => 'images/categories/home_appliances.jpg'],
            ['name' => 'Toys', 'description' => 'Toys for children of all ages', 'imagepath' => 'images/categories/toys.jpg'],
            ['name' => 'Sports', 'description' => 'Sports gear and equipment', 'imagepath' => 'images/categories/sports.jpg'],
            ['name' => 'Automobiles', 'description' => 'Cars, motorbikes, and accessories', 'imagepath' => 'images/categories/automobiles.jpg'],
            ['name' => 'Health & Beauty', 'description' => 'Health, beauty, and wellness products', 'imagepath' => 'images/categories/health_beauty.jpg'],
            ['name' => 'Groceries', 'description' => 'Daily groceries and food items', 'imagepath' => 'images/categories/groceries.jpg'],
        ]);
    }


}