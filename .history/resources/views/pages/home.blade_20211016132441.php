@extends('welcome')
@section('home')


<div class="banner">
    <img src="{{'public/frontend/img/banner1.png'}}" alt="" class="banner-img">
</div>

<!-- Product new -->
<section class="product">
    <div class="container">
        <div class="product-new">
            <div class="product-title">
                Sản phẩm mới nhất
            </div>

            <ul class="product-list">
                <a href="{{'./details'}}">
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
                </a>
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
    </div>
</section>

<!-- Navigation -->
<section class="nav">
    <div class="container">
        <div class="nav-title">
            <p class="nav-name">Điện thoại nổi bật nhất</p>
        </div>
        <hr>
        <ul class="nav-list">
            @foreach($category as $ key => $cate)
            <li class="nav-item"><a href="#" class="nav-link">{{$cate->category_name}}</a></li>
            @endforeach
        </ul>
    </div>
</section>

<!-- Product List -->
<section class="product">
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
</section>


@endsection