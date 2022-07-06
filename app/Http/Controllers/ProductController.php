<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show ($id)
    {
        $product = Product::find($id);

        return response()->json([
            'message' => 'success get seller ' . $product->name,
            'data' => [
                'product' =>  $product
            ]
        ], 200);
    }
}
