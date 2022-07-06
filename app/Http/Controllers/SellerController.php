<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;

class SellerController extends Controller
{
    public function index ()
    {   

        $per_page = request()->get('per_page');
        
        return response()->json([
            'message' => 'success get all seller',
            'data' => [
                'seller' => Seller::paginate($per_page)
            ]
        ], 200);
    }


    public function show ($id)
    {
        $seller = Seller::with('products')->find($id);

        return response()->json([
            'message' => 'success get seller ' . $seller->name,
            'data' => [
                'seller' =>  $seller
            ]
        ], 200);
    }
}
