<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Chitato',
            'category' => 'Makanan',
            'stock' => 50,
            'price' => 17000
        ]);

        Product::create([
            'name' => 'Sari roti',
            'category' => 'Makanan',
            'stock' => 50,
            'price' => 9000
        ]);

        Product::create([
            'name' => 'Telor Ayam',
            'category' => 'Bahan masak',
            'stock' => 50,
            'price' => 31000
        ]);
    }
}
