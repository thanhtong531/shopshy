<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;

class CartController extends Controller
{
    public function save_cart(Request $request)
    {
        $product_id = $request->product_hidden;
        $quantity = $request->qty;
    }
}
