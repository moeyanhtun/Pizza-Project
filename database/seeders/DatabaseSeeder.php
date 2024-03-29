<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            "name" => "admin",
            "email" => "admin@gmail.com",
            "phone" => "09890630445",
            "gender" => "Male",
            "address" => "Myeik",
            "role" => "admin",
            "password" => Hash::make("admin@123"),

        ]);
        Category::factory(5)
            ->has(Product::factory()->count(5))
            ->create();
    }
}