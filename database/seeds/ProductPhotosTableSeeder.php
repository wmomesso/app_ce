<?php

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductPhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::all();
        $this->deleteAllPhotosInProductPath();
        $products->each(function ($product){

        });
    }

    private function deleteAllPhotosInProductPath()
    {
        $path = \App\Models\ProductPhoto::PRODUCTS_PATH;
        \File::deleteDirectory(storage_path($path), true);
    }
}
