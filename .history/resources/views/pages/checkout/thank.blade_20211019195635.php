@extends('welcome')
@section('payments')

<section class="payment checkout-payment">
    <div class="container">
        <div class="payment-top">
            <?php 
            $content = Cart::content();

            ?>
            <p >Đơn hàng bạn đặt thành công. Cảm ơn bạn đã mua hàng</p>

          



        </div>
    </div>
</section>

@endsection