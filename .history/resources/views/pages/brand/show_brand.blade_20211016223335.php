@extends('welcome')
@section('home')




<!-- Product new -->
<section class="product">
    <div class="container">
        <div class="product-new">
            <div class="product-title">
                Thương hiệu Sản Phẩm
            </div>

            <ul class="product-list">
                @foreach($brand_by_id as $key => $all_pro)
                <a href="{{'./details'}}">
                    <li class="product-item">
                        <span class="product-hot">Hot</span>
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
        </div>
    </div>
</section>

<!-- Navigation -->
{{-- <section class="nav">
    <div class="container">
        <div class="nav-title">
            <p class="nav-name">Điện thoại nổi bật nhất</p>
        </div>
        <hr>
        <ul class="nav-list">
            @foreach($category as $key => $cate)
            <li class="nav-item"><a href="{{URL::to('danhmuc-sanpham/'.$cate->category_id)}}" class="nav-link">{{$cate->category_name}}</a></li>
            @endforeach
        </ul>
    </div>
</section> --}}

<!-- Product List -->
{{-- <section class="product">
    <div class="container">
        <ul class="product-list">
            <li class="product-item">
                <span class="product-hot">Hot</span>
                <img src="https://cdn.tgdd.vn/Products/Images/42/248284/samsung-galaxy-z-fold-3-silver-1-1-600x600.jpg"
                    alt="" class="product-img">
                <div class="product-content">
                    <h3 class="product-name">Samsung Galaxy Z Fold3 5G 512GB</h3>
                    <div class="product-price">
                        <p class="price-old">44.990.000₫</p>
                        <p class="price-new">44.990.000₫</p>
                    </div>

                </div>
            </li>
            <li class="product-item">
                <span class="product-hot">Hot</span>
                <img src="https://cdn.tgdd.vn/Products/Images/42/248284/samsung-galaxy-z-fold-3-silver-1-1-600x600.jpg"
                    alt="" class="product-img">
                <div class="product-content">
                    <h3 class="product-name">Samsung Galaxy Z Fold3 5G 512GB</h3>
                    <div class="product-price">
                        <p class="price-old">44.990.000₫</p>
                        <p class="price-new">44.990.000₫</p>
                    </div>

                </div>
            </li>
            <li class="product-item">
                <span class="product-hot">Hot</span>
                <img src="https://cdn.tgdd.vn/Products/Images/42/248284/samsung-galaxy-z-fold-3-silver-1-1-600x600.jpg"
                    alt="" class="product-img">
                <div class="product-content">
                    <h3 class="product-name">Samsung Galaxy Z Fold3 5G 512GB</h3>
                    <div class="product-price">
                        <p class="price-old">44.990.000₫</p>
                        <p class="price-new">44.990.000₫</p>
                    </div>

                </div>
            </li>
            <li class="product-item">
                <span class="product-hot">Hot</span>
                <img src="https://cdn.tgdd.vn/Products/Images/42/248284/samsung-galaxy-z-fold-3-silver-1-1-600x600.jpg"
                    alt="" class="product-img">
                <div class="product-content">
                    <h3 class="product-name">Samsung Galaxy Z Fold3 5G 512GB</h3>
                    <div class="product-price">
                        <p class="price-old">44.990.000₫</p>
                        <p class="price-new">44.990.000₫</p>
                    </div>

                </div>
            </li>
            <li class="product-item">
                <span class="product-hot">Hot</span>
                <img src="https://cdn.tgdd.vn/Products/Images/42/248284/samsung-galaxy-z-fold-3-silver-1-1-600x600.jpg"
                    alt="" class="product-img">
                <div class="product-content">
                    <h3 class="product-name">Samsung Galaxy Z Fold3 5G 512GB</h3>
                    <div class="product-price">
                        <p class="price-old">44.990.000₫</p>
                        <p class="price-new">44.990.000₫</p>
                    </div>

                </div>
            </li>
            <li class="product-item">
                <span class="product-hot">Hot</span>
                <img src="https://cdn.tgdd.vn/Products/Images/42/248284/samsung-galaxy-z-fold-3-silver-1-1-600x600.jpg"
                    alt="" class="product-img">
                <div class="product-content">
                    <h3 class="product-name">Samsung Galaxy Z Fold3 5G 512GB</h3>
                    <div class="product-price">
                        <p class="price-old">44.990.000₫</p>
                        <p class="price-new">44.990.000₫</p>
                    </div>

                </div>
            </li>
        </ul>
    </div>
</section> --}}


@endsection