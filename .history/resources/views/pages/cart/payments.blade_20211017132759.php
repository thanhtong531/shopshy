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
                                <input type="number" value="{{$value->qty}}" >
                            </td>
                            <td>
                                <?php
                                    $subtotal = $value->price * $value->qty;
                                    echo number_format($subtotal).' '.'VNĐ';
                                ?>
                            </td>
                            <td>
                                <a onclick="return confirm('Bạn thực sự muốn xoá danh mục <?php echo $value->name?>?')" href="{{URL::to('/delete-to-cart/'.$value->rowId)}}">
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
          

        </div>
    </div>
</section>

@endsection