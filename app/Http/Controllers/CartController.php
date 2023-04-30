<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request) {
        $carts = Cart::all();

        $response = [
            'carts' => $carts,
        ];

        return response()->json($response, 200);
    }
}
