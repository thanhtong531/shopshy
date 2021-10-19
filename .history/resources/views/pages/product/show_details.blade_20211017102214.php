@extends('welcome')
@section('details')


<div class="detail">
    <div class="container">
            <div class="details">
                <h2 class="details-title">Thông tin sản phẩm:</h2>
                <hr>
                @foreach($details_product as $key => $detail)
                <div class="details-content">
                    <div class="details-image">
                        <img src="{{asset('public/frontend/img/'.)}}" alt="" class="details-img">
                    </div>
                    <div class="details-information">
                        <h2 class="details-price">Giá: 3.590.000 VNĐ</h2>
                        <div class="details-promotion">
                            <p class="promotion-title">Khuyến mãi</p>
                            <p class="promotion-name">Cơ hội trúng xe SH khi mua hàng trả tiền mặt.</p>
                        </div>
                        <div class="details-present">
                            <p class="details-icon">
                                <ion-icon name="cube" class="icon"></ion-icon>
                                Trong hộp có: Sạc, Tai nghe, Sách hướng dẫn,
                                Cây lấy sim, Ốp lưng
                            </p>
                            <p class="details-icon">
                                <ion-icon name="star" class="icon"></ion-icon>    
                                Bảo hành chính hãng 12 tháng.
                            </p>
                            <p class="details-icon">
                                <ion-icon name="repeat" class="icon"></ion-icon>
                                1 đổi 1 trong 1 tháng nếu lỗi, đổi sản phẩm tại nhà trong 1 ngày
                            </p>
                                
                        </div>

                        <form action="">
                            
                            <input type="number" value="1" min = "1" class="details-input"/>
                            <button type="submit" class="btn btn-primary details-btn">
                                <ion-icon name="add"></ion-icon>Thêm vào giỏ hàng
                            </button>
                        </form>
                    </div>
                    <div class="details-info">
                        <h2 class="info-title">Thông số kỹ thuật</h2>
                        <p class="info-content">Màn hình:Super AMOLED6.5"HD+
                            Hệ điều hành:Android 10</p>
                    </div>

                </div>

            </div>
        </div>
    </div>

    @endsection