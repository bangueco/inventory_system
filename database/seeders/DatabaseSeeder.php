<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'username' => 'admin',
            'password' => 'root',
        ]);

        // For Products

        \App\Models\Product::factory()->create([
            'product_name' => 'Mouse',
            'quantity' => 22,
        ]);

        \App\Models\Product::factory()->create([
            'product_name' => 'Mouse',
            'quantity' => 12,
        ]);

        \App\Models\Product::factory()->create([
            'product_name' => 'Keyboard',
            'quantity' => 69,
        ]);

        \App\Models\Product::factory()->create([
            'product_name' => 'Monitor',
            'quantity' => 105,
        ]);
    }
}
