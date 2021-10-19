@extends('welcome')
@section('payments')

<section class="payment checkout-payment">
    <div class="container">
        <div class="payment-top">
            <?php 
            $content = Cart::content();

            ?>
            <p class="payment-title">Thanh toán giỏ hàng</p>

          



          
    </div>
</section>

@endsection