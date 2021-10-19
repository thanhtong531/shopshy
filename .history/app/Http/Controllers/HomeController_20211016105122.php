<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $cate_product = DB::table('tbl_product')->orderby('category_product', 'desc')->get();
        return view('pages.home');
    }
}
