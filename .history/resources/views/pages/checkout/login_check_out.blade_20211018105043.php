@extends ('welcome')
@section ('login')

<div class="modal">

    <!-- Modal login -->
    <div class="modal-login">

       
        <h2 class="modal-title">Đăng nhập</h2>

        <div class="form">
            <form action="" class="form">
                <div class="form-group">
                    <input type="text" class="form-input" placeholder=" ">
                    <label for="username" class="form-control">Tài khoản</label>
                    <span></span>
                </div>
                <div class="form-group">
                    <input type="password" class="form-input" placeholder=" ">
                    <label for="password" class="form-control">Mật khẩu</label>
                    <span class="input-remember">
                        <input type="checkbox" name="" id="" class="checkbox">
                        Ghi nhớ đăng nhập
                    </span>
                </div>
                <button type="submit" class="btn btn-primary btn-login">Đăng nhập</button>
            </form>
        </div>
    </div>

    <!-- Modal signup -->
    <div class="modal-signup">
       
        <h2 class="modal-title">Đăng ký</h2>

        <div class="form">
            <form action="{{URL::to('/add-customer')}}" class="form" method="post">
                {{csrf_token()}}
                <div class="form-group">
                    <input type="text" name="customer_name" class="form-input" placeholder=" ">
                    <label for="username" class="form-control">Họ và tên</label>
                    <span></span>
                </div>
                <div class="form-group">
                    <input type="text" class="form-input" placeholder=" ">
                    <label for="email" class="form-control">Tài khoản email</label>
                    <span></span>
                </div>
                <div class="form-group">
                    <input type="text" class="form-input" placeholder=" ">
                    <label for="phone" class="form-control">Số điện thoại</label>
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
                <button type="submit" class="btn btn-primary">Đăng kí</button>
            </form>
        </div>
    </div>
</div>
@endsection