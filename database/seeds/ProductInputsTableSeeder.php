<?php

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductInputsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::all();
        factory(\App\Models\ProductInput::class, 200)
        ->make()
        ->each(function ($input) use($products){
            $product = $products->random();
            $input->product_id = $product->id;
            $input->save();
        });
    }
}
