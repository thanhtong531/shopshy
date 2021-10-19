@extends('welcome')
@section('payments')

<section class="payment">
    <div class="container">
        <div class="payment-top">
            <?php 
            $content = Cart::content();

            ?>
            <p class="payment-title">Giỏ hàng</p>

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

                                <form action="{{URL::to('/update-cart-quantity')}}" method="post" >
                                    {{csrf_field()}}
                                    <input type="number" value="{{$value->qty}}" min="1" name="cart_quantity" size="2" class="cart_quantity">
                                    <input type="submit" value="Cập nhật" name="update_qty" class="btn-default">
                                    <input type="hidden" value="{{$value->rowId}}" name="rowId_cart" class="form">
                                </form>
                            </td>
                            <td>
                                <?php
                                    $subtotal = $value->price * $value->qty;
                                    echo number_format($subtotal).' '.'VNĐ';
                                ?>
                            </td>
                            <td>
                                <a onclick="return confirm('Bạn thực sự muốn xoá <?php echo $value->name?>?')" href="{{URL::to('/delete-to-cart/'.$value->rowId)}}">
                                    <ion-icon name="trash" class="remove"></ion-icon>
                                </a>
                            </td>
                        </tr>
                       
                        @endforeach
                    </tbody>
                
            </table>

            </form>

            <div class="total-cart">
                <div class="total">Tổng tiền</div>
                <div class="total-money">
                    {{Cart::subtotal().' '.'VNĐ'}}
                </div>
                
            </div>
                             <?php 
                                    $customer_id = Session::get('customer_id');
                                    if($customer_id != NULL){
                            ?>
                             <div class="check">
                                <a href="{{URL::to('/checkout')}}" class="check-out">
                                    Thanh Toán
                                </a>
                            </div>
                                <?php }else{
                                ?>
                                 
                                    <a href="{{URL::to('/login-checkout')}}" class="check-out">
                                        Thanh Toán
                                    </a>
                                <?php
                                }
                                ?>
            
          
            

        </div>
    </div>
</section>

@endsection