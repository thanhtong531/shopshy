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
        return view('admin.add_product');
    }
}
