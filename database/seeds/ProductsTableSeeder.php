<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 20; $i++) {
            \App\Product::create([
                'name' => 'Product-' . $i,
                'price' => $i + 10,
                'quantity' => $i + 2,
            ]);
        }
    }
}
