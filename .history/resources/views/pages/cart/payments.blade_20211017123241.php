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
                            <td>{{Cart::subtotal().' '.'VNĐ'}}</td>
                            <td>
                                <ion-icon name="trash" class="remove"></ion-icon>
                            </td>
                        </tr>
                       
                        @endforeach
                    </tbody>
                <tfoot>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Thành tiền</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tfoot>
            </table>

            </form>
          

        </div>
    </div>
</section>

@endsection