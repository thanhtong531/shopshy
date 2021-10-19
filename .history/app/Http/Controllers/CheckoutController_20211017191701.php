<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Cart;

session_start();

class CheckoutController extends Controller
{
    public function login_checkout()
    {
        return view('pages.checkout.login_check_out');
    }
}
