<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $cate_product = DB::table('tbl_category_product')->where('category_status', '0')->orderby('category_product', 'desc')->get();
        // $brand_product = DB::table('tbl_product')->where('brand_status', '0')->orderby('category', 'desc')->get();
        // return view('pages.home')->with('category', $cate_product)->with('brand', $brand_product);
    }
}
