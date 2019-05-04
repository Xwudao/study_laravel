<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录 - 后台</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: gray;
        }

        .wrap .login_form {
            width: 300px;
            background: rgba(0, 0, 0, .3);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            overflow: hidden;
            box-shadow: 0px 0px 5px 1px rgb(5, 0, 0);
        }

        .wrap .login_form h1 {
            margin-top: 40px;
            color: #fff;
            font-weight: 500;
        }

        .wrap .login_form {
            padding: 20px;
        }
        .wrap .login_form .err {
            color: lightsalmon;
            font-size: 19px;
        }

        .wrap .login_form input {
            display: block;
            width: 100%;
            outline: none;
            border: none;
            margin: 10px 0;
            text-align: center;
            font-size: 16px;
            border-radius: 12px;
            height: 40px;
            color: #636e72;

        }

        .wrap .login_form .login_btn {
            margin-top: 30px;
            color: #000;
            cursor: pointer;
            transition: .3s;
        }

        .wrap .login_form .username:hover,
        .wrap .login_form .password:hover {
            border: 1px solid #2c3e50;
        }

        .wrap .login_form .login_btn:hover {
            background: #000;
            color: #fff;
        }

        .wrap .login_form a {
            margin-top: 15px;
            display: inline-block;
            text-decoration: none;
            font-size: 17px;
            color: #fff;
            transition: .3s;
        }

        .wrap .login_form a:hover {
            color: #636e72;
        }
    </style>
</head>

<body>
    <div class="wrap">
        <form class="login_form" action="login" method="post">
            <h1 class="login_title">Login</h1>
            @if(session('error'))
                <div class="err">
                    {{ session('error') }}
                </div>
            @endif
            {{ csrf_field() }}
            <input type="text" class="username" name="username" placeholder="Username">
            <input type="password" class="password" name="password" placeholder="Password">
            <input type="submit" class="login_btn" value="Login">
            <a href="#">Already Have One ?</a>
        </form>
    </div>
</body>

</html>