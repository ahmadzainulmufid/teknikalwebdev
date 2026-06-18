<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['name' => 'Laptop ASUS ROG', 'description' => 'Laptop gaming spek dewa', 'price' => 15000000, 'stock' => 5],
            ['name' => 'Mouse Logitech G102', 'description' => 'Mouse gaming RGB kabel', 'price' => 250000, 'stock' => 12],
            ['name' => 'Keyboard Mechanical', 'description' => 'Mechanical keyboard blue switch', 'price' => 450000, 'stock' => 8],
            ['name' => 'Monitor LG 24 Inch', 'description' => 'Monitor IPS 75Hz bezel-less', 'price' => 1800000, 'stock' => 4],
            ['name' => 'Headset Steelseries', 'description' => 'Headset gaming dengan mic jernih', 'price' => 950000, 'stock' => 10],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
