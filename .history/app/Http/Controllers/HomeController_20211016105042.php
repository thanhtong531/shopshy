<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $cate_product = DB::table('tbl_product')
        return view('pages.home');
    }
}
