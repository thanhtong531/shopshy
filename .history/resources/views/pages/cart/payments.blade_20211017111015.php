@extends('welcome')
@section('payments')

<section class="payment">
    <div class="container">
        <div class="payment-top">
            <p class="payment-title">Giỏ hàng</p>

            <form action="">
                <table border="1" id="payment">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên sản phẩm</th>
                            <th>Sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                            <th>Xoá</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Điện thoại Iphone 11 Pro Max 512GB</td>
                            <td>
                                <img src="./img/11pro.png" alt="">
                            </td>
                            <td>29.500.000</td>
                            <td>
                                <input type="number" >
                            </td>
                            <td>29.500.000</td>
                            <td>
                                <ion-icon name="trash" class="remove"></ion-icon>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
          

        </div>
    </div>
</section>

@endsection