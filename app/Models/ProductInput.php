<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductInput extends Model
{
    protected $fillable = ['amount', 'product_id'];

    //many-to-one
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
