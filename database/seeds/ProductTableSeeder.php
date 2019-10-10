<?php

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var \Illuminate\Database\Eloquent\Collection $categories */
        $categories = Category::all();
        factory(Product::class, 35)->create()
            ->each(function(Product $product) use ($categories){
               $categorieId = $categories->random()->id;
               $product->categories()->attach($categorieId);
            });
    }
}
