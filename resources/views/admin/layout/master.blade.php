<!doctype html>
<html lang="en">

<head>
    <title>首页 - 首页</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.bootcss.com/font-awesome/5.8.1/css/fontawesome.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    .border {
        border: 1px solid green;

    }

    .main {
        overflow: hidden;
        margin-top: 70px;
    }

    .main .left_nav {
        /* width: 300px;
        float: left;
        margin-right: 30px; */
        margin: 10px 20px;
    }

    .main .right_cnt {
        /* float: left; */
        margin: 10px 20px;
    }
</style>

<body>

    <!-- 导航栏开始 -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top clearfix">
        <a class="navbar-brand" href="#">后台管理</a>
        <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">首页</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">博客</a>
                </li>
            </ul>
            <ul class="navbar-nav mr-5 mt-2 mt-lg-0">
                <li class="nav-item active">
                <a class="nav-link" href="#">欢迎您：{{ Auth::guard('admin')->user()->username }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout">退出</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- 导航栏结束 -->
    <!-- 主体部分开始 -->
    <div class="main">
        <div class="row">
            <div class="col-md-2">
                <!-- 左侧导航栏开始 -->
                <div class="left_nav">
                    <div id="list-example" class="list-group">
                        <a class="list-group-item list-group-item-action active" href="#list-item-1">修改密码</a>
                        <a class="list-group-item list-group-item-action" href="#list-item-2">在线充值</a>
                        <a class="list-group-item list-group-item-action" href="#list-item-3">确认信息</a>
                        <a class="list-group-item list-group-item-action" href="#list-item-4">发布商品</a>
                    </div>
                </div>
                <!-- 左侧导航栏结束 -->

            </div>
            <div class="col-md-10">
                <!-- 右侧内容区开始 -->
                <div class="right_cnt">
                    @yield('content')
                </div>
                <!-- 右侧内容区结束 -->
            </div>
        </div>
    </div>

    <!-- 主体部分结束 -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>