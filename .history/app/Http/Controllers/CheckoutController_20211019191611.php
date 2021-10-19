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
        $category_product = DB::table('tbl_category_product')->where('category_status', '0')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand_product')->where('brand_status', '0')->orderby('brand_id', 'desc')->get();

        return view('pages.checkout.login_check_out')->with('category', $category_product)->with('brand', $brand_product);
    }
    public function add_customer(Request $request)
    {
        $data = array();
        $data['customer_name'] = $request->customer_name;
        $data['customer_email'] = $request->customer_email;
        $data['customer_phone'] = $request->customer_phone;
        $data['customer_password'] = md5($request->customer_password);

        $customer_id = DB::table('tbl_customers')->insertGetId($data);
        Session::put('customer_id', $customer_id);
        Session::put('customer_name', $request->customer_name);
        Session::put('message', 'Đăng kí tài khoản thành công');
        return Redirect::to('/checkout');
    }
    public function checkout()
    {
        $category_product = DB::table('tbl_category_product')->where('category_status', '0')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand_product')->where('brand_status', '0')->orderby('brand_id', 'desc')->get();

        return view('pages.checkout.show_checkout')->with('category', $category_product)->with('brand', $brand_product);
    }
    public function save_checkout_customer(Request $request)
    {
        $data = array();
        $data['customer_id'] = Session::get('customer_id');
        $data['shipping_name'] = $request->shipping_name;
        $data['shipping_email'] = $request->shipping_email;
        $data['shipping_phone'] = $request->shipping_phone;
        $data['shipping_address'] = $request->shipping_address;

        $shipping_id = DB::table('tbl_shipping')->insertGetId($data);
        Session::put('shipping_id', $shipping_id);
        return Redirect('/payment');
    }
    public function payment()
    {
        $category_product = DB::table('tbl_category_product')->where('category_status', '0')->orderby('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand_product')->where('brand_status', '0')->orderby('brand_id', 'desc')->get();

        return view('pages.checkout.payment')->with('category', $category_product)->with('brand', $brand_product);
    }
    public function logout_checkout()
    {
        Session::flush();
        return Redirect('/login-checkout');
    }

    public function login_customer(Request $request)
    {
        $email = $request->email_account;
        $password = md5($request->password_account);
        $result = DB::table('tbl_customers')->where('customer_email', $email)->where('customer_password', $password)->first();


        if ($result) {
            Session::put('customer_id', $result->customer_id);
            return Redirect::to('/checkout');
        } else {
            Session::put('message', 'Tài khoản hoặc mật khẩu không đúng');
            return Redirect::to('/login-checkout');
        }
    }
    public function order_place(Request $request)
    {
        $content = Cart::content();
        $data = array();
        $data['payment_method'] = $request->payment_option;
        $data['payment_status'] = 'Đang chờ xử lý';
        $payment_id = DB::tanle('tbl_payment')->insertGetId($data);

        // insert order
        $order_data = array();
        $order_data['customer_id'] = Session::get('customer_id');
        $order_data['shipping_id'] = Session::get('shipping_id');
        $order_data['payment_id'] = $payment_id;
        $order_data['order_total'] = Cart::total();
        $order_data['order_status'] = 'Đang chờ xử lý';
        $order_id = DB::table('tbl_order')->insertGetId($order_data);

        // insert order details
        foreach ($content as $value)
            $order_d_data = array();
        $order_d_data['order_id'] = $order_id;
        $order_d_data['product_id'] = $value->id;
        $order_d_data['product_name'] = $value->name;
        $order_d_data['product_price'] = $value->price;
        $order_d_data['product_sale_quantity'] = $value->qty;
        DB::table('tbl_order_details')->insert($order_d_data);


        return Redirect('/payment');
    }
}
