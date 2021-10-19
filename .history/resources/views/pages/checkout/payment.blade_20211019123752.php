@extends('welcome')
@section('payments')

<section class="payment checkout-payment">
    <div class="container">
        <div class="payment-top">
            <?php 
            $content = Cart::content();

            ?>
            <p class="payment-title">Thanh toán giỏ hàng</p>

            <div class="please">
                <p>Điền thông tin gửi hàng </p>
            </div>

            <form action="{{URL::to('/save-checkout-customer')}}" method="post" class="form-checkout" >
                {{csrf_field()}}
                <div class="form-group form-hafl">
                    <input type="text" name="shipping_email" class="form-input" placeholder=" ">
                    <label for="email" class="form-control">Email*</label>
                </div>
                <div class="form-group form-hafl">
                    <input type="text" name="shipping_name" class="form-input" placeholder=" ">
                    <label for="name" class="form-control">Họ và tên</label>
                </div>
                <div class="form-group form-hafl">
                    <input type="text" name="shipping_address" class="form-input" placeholder=" ">
                    <label for="address" class="form-control">Địa chỉ</label>
                </div>
                <div class="form-group form-hafl">
                    <input type="text" name="shipping_phone" class="form-input" placeholder=" ">
                    <label for="phone" class="form-control">Số điện thoại</label>
                </div>
                <input type="submit" value="Gửi" name="send_order" class="btn btn-primary form-hafl cursor ">

          
            <div class="review-payment">
                <h2><a href="{{URL::to('/show-cart')}}">Xem lại giỏ hàng</a></h2>
            </div>

            <form action="">
                <table border="1" id="payment">
                    <thead>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                            <th>Xoá</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($content as $value)
                       
                        <tr>
                            <td>{{$value->name}}</td>
                            <td>
                                <img src="{{URL::to('public/uploads/product/'.$value->options->image)}}" alt="">
                            </td>
                            <td>{{number_format($value->price).' '.'VNĐ'}}</td>
                            <td>

                                    <input type="text" value="{{$value->qty}}" min="1" name="cart_quantity" size="2" class="cart_quantity">
                            </td>
                            <td>
                                <?php
                                    $subtotal = $value->price * $value->qty;
                                    echo number_format($subtotal).' '.'VNĐ';
                                ?>
                            </td>
                            <td>
                                <a onclick="return confirm('Bạn thực sự muốn xoá ')" href="{{URL::to('/delete-to-cart/'.$value->rowId)}}">
                                    <ion-icon name="trash" class="remove"></ion-icon>
                                </a>
                            </td>
                        </tr>
                       
                        @endforeach
                    </tbody>
                
            </table>

            </form>
            <p>Chọn hình thức thanh toán</p>
            <div class="payment-option">
                <span class="pay">
                    <label><input type="checkbox" name="payment-option" value="1" id="">Thanh Toán qua ATM</label>
                </span>
                <span class="pay">
                    <label><input type="checkbox" name="payment-option" value="2" id="">Thanh Toán Tiền Mặt</label>
                </span>
            </div>

        </div>
    </div>
</section>

@endsection