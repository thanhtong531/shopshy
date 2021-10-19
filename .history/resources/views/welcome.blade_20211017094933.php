<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="{{asset('public/frontend/css/app.css')}}">
</head>

<body>
    <div class="wrapper">
        <!-- Header -->
        <header class="header">
            <div class="container">
                <div class="header-top">

                    <div class="header-logo">
                        <img src="{{'public/frontend/img/logo.png'}}" alt="" class="header-img">
                        <a href="{{URL::to('/trangchu')}}" class="header-name">ShyShop</a>
                    </div>

                    <div class="search">
                        <input type="text" class="search-input" placeholder="Search...">
                        <ion-icon name="search" class="search-icon"></ion-icon>
                    </div>
                    <ul class="menu">
                        <li class="menu-item">
                            <a href="index.html" class="menu-link">
                                <ion-icon name="home"></ion-icon>
                                Trang chủ
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="menu-link">
                                <ion-icon name="person"></ion-icon>
                                Tài khoản
                                <ion-icon name="chevron-down"></ion-icon>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item login">Đăng nhập</li>
                                <li class="submenu-item signup">Đăng ký</li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a href="" class="menu-link">
                                <ion-icon name="cart"></ion-icon>
                                Giỏ hàng
                            </a>
                            <span class="cart-number">1</span>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        
        <div class="main">
            <div class="category">
                <div class="container">
                    <div class="nav-title">
                        @foreach($category_name as $key =>$name)
                        <p class="nav-name">{{$name->category_name}}</p>
                        @endforeach
                    </div>
                    <ul class="nav-list">
                        @foreach($category as $key => $cate)
                        <li class="nav-item"><a href="{{URL::to('danhmuc-sanpham/'.$cate->category_id)}}" class="nav-link">{{$cate->category_name}}</a></li>
                        @endforeach
                    </ul>
                    <div class="nav-title">
                        <p class="nav-name">Thương hiệu</p>
                    </div>
                    <ul class="nav-list">
                        @foreach($brand as $key => $br)
                        <li class="nav-item"><a href="{{URL::to('thuong-hieu-san-pham/'.$br->brand_id)}}" class="nav-link">{{$br->brand_name}}</a></li>
                        @endforeach
                    </ul>

                </div>
            </div>
            @yield('home')
        </div>
      
        @yield('details')
        @yield('payments')
    </div>
        
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <ul class="footer-list">
                <li class="footer-item">
                    <h2 class="footer-title">Thông tin liên hệ</h2>
                    <ul class="social-list">
                        <li class="social-item">
                            <ion-icon name="logo-facebook" class="icon"></ion-icon>
                            ShopShy
                        </li>
                        <li class="social-item">
                            <ion-icon name="locate" class="icon"></ion-icon>
                            Mậu Thân, Cần Thơ
                        </li>
                        <li class="social-item">
                            <ion-icon name="call" class="icon"></ion-icon>
                            0342613187
                        </li>
                    </ul>
                </li>
                <li class="footer-item">
                    <h2 class="footer-title">Giới thiệu</h2>
                    <ul class="social-list">
                        <li class="social-item">
                            <a href="#">Về chúng tôi</a>
                        </li>
                        <li class="social-item">
                            <a href="#">Điều khoản quy định</a>
                        </li>

                    </ul>
                </li>
                <li class="footer-item">
                    <h2 class="footer-title">Thanh Toán</h2>
                    <ul class="social-list payments-list">
                        <li class="social-item">
                            <img src="data:image/png;base64,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"
                                alt="">
                        </li>
                        <li class="social-item">
                            <img src="data:image/png;base64,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"
                                alt="">
                        </li>
                        <li class="social-item">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/2/25/Logo_MB_new.png" alt="">
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal">

        <!-- Modal login -->
        <div class="modal-login">

            <div class="modal-close">
                <ion-icon name="close"></ion-icon>
            </div>
            <h2 class="modal-title">Đăng nhập</h2>

            <form action="" class="form">

                <div class="form-group">
                    <input type="text" class="form-input" placeholder=" ">
                    <label for="username" class="form-control">Tài khoản</label>
                    <span></span>
                </div>
                <div class="form-group">
                    <input type="password" class="form-input" placeholder=" ">
                    <label for="password" class="form-control">Mật khẩu</label>
                    <span></span>
                </div>

                <p class="form-desc">Nếu bạn chưa có tài khoản? <span class="form-signup">Đăng kí ngay</span></p>
                <button type="submit" class="btn btn-primary">Đăng nhập</button>
            </form>
        </div>

        <!-- Modal signup -->
        <div class="modal-signup">
            <div class="modal-close">
                <ion-icon name="close"></ion-icon>
            </div>
            <h2 class="modal-title">Đăng ký</h2>

            <form action="" class="form">

                <div class="form-group">
                    <input type="text" class="form-input" placeholder=" ">
                    <label for="username" class="form-control">Tài khoản</label>
                    <span></span>
                </div>
                <div class="form-group">
                    <input type="password" class="form-input" placeholder=" ">
                    <label for="password" class="form-control">Mật khẩu</label>
                    <span></span>
                </div>
                <div class="form-group">
                    <input type="repassword" class="form-input" placeholder=" ">
                    <label for="password" class="form-control">Nhập lại mật khẩu</label>
                    <span></span>
                </div>

                <p class="form-desc">Nếu bạn đã có tài khoản? <span class="form-login">Đăng nhập ngay</span></p>
                <button type="submit" class="btn btn-primary">Đăng kí</button>
            </form>
        </div>
    </div>
<script src="{{asset('public/frontend/js/index.js')}}"></script>
</body>

</html>