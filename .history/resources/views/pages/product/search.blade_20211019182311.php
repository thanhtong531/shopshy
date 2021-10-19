@extends('welcome')
@section('home')




<!-- Product new -->
<div class="products">
<section class="product">
    <div class="container">
        <div class="product-new">
            <div class="product-title">
                Kết quả tìm kiếm
            </div>

            <ul class="product-list">
                <?php if($search_product){?>
                @foreach($search_product as $key => $all_pro)
                <a href="{{URL::to('/chi-tiet-san-pham/'.$all_pro->product_id)}}">
                    <li class="product-item">
                        <span class="product-hot">New</span>
                        <img src="{{URL::to('public/uploads/product/'.$all_pro->product_image)}}"
                            alt="" class="product-img">
                        <div class="product-content">
                            <h3 class="product-name">{{$all_pro->product_name}}</h3>
                            <div class="product-price">
                                <p class="price-old">{{number_format($all_pro->product_price + 100000).'VNĐ'}}</p>
                                <p class="price-new">{{number_format($all_pro->product_price).'VNĐ'}}</p>
                            </div>
                        </div>
                    </li>
                </a>
                @endforeach
                </ul>
                <?php }else{
                ?>
                    <p>Không tìm thấy sản phẩm bạn muốn tìm</p>
                <?php}
                ?>
        </div>
    </div>
</section>





</div>
@endsection