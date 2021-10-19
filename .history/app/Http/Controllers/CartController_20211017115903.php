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
        $category_product = DB::table('tbl_category_product')->where('category_status', '0')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand_product')->where('brand_status', '0')->orderby('brand_id', 'desc')->get();

        $product_info = DB::table('tbl_product')->where('product_id', $product_id)->first();
        return view('pages.cart.payments')->with('category', $category_product)->with('brand', $brand_product);
    }
}
