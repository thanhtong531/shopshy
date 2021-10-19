<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Admin</title>
    <link rel="stylesheet" href="{{('public/frontend/css/app.css')}}">
</head>

<body>
    <div class="logins">
       
        <div class="login-admin">
            
            <form action="{{URL::to('/admin-dashboard')}}" method="post">
               
                {{csrf_field()}}
                <div class="modal-close">
                    <ion-icon name="close"></ion-icon>
                </div>
                <h2 class="modal-title login-title">Đăng nhập Admin</h2>
                <?php
                $messages = Session::get('message');
                if($messages){
                   echo '<span class="error-message"> '.$messages.'</span>';
                    Session::get('messages',null);
                }
            ?>

                <div class="form-group">
                    <input type="email" name="admin_email" class="form-input" placeholder=" " required="">
                    <label for="username" class="form-control">Tài khoản</label>
                    <span class= "form-error"></span>
                </div>
                <div class="form-group">
                    <input type="password" name="admin_password" class="form-input" placeholder=" "required="">
                    <label for="password" class="form-control">Mật khẩu</label>
                    <span></span>
                </div>

                <div class="login-remember">
                    <input type="checkbox" name="remember" id="">
                    Nhớ mật khẩu
                </div>
                <button type="submit" class="btn btn-primary">Đăng Nhập</button>

        </div>

        </form>
    </div>
    </div>
</body>

</html>l