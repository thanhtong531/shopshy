<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;

class ProductController extends Controller
{
    public function add_product()
    {
        $category_product = DB::table('tbl_category_product')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand_product')->order_by('brand_id', 'desc')->get();


        return view('admin.add_product')->with('category_product', $category_product)->with('brand_product', $brand_product);
    }
}
