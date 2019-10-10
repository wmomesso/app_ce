<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\ProductInputResource;
use App\Models\ProductInput;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductInputController extends Controller
{
    public function index()
    {
        $inputs = ProductInput::with('product')->paginate();
        return ProductInputResource::collection($inputs);
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }
}
