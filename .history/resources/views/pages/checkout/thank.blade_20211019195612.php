@extends('welcome')
@section('payments')

<section class="payment checkout-payment">
    <div class="container">
        <div class="payment-top">
            <?php 
            $content = Cart::content();

            ?>
            <p >Thanh toán giỏ hàng</p>

          



        </div>
    </div>
</section>

@endsection