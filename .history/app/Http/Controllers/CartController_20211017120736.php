<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Cart;

class CartController extends Controller
{
    public function save_cart(Request $request)
    {
        $product_id = $request->product_hidden;
        $quantity = $request->qty;
        $category_product = DB::table('tbl_category_product')->where('category_status', '0')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand_product')->where('brand_status', '0')->orderby('brand_id', 'desc')->get();

        $product_info = DB::table('tbl_product')->where('product_id', $product_id)->first();
        $data['id'] = $product_info->product_id;
        $data['qty'] = $quantity;
        $data['name'] = $product_info->product_name;
        $data['price'] = $product_info->product_price;
        $data['optins']['image'] = $product_info->product_image;
        Cart::add($data);
    }

    public function show_cart()
    {
        return view('pages.cart.payments')->with('category', $category_product)->with('brand', $brand_product);
    }
}
