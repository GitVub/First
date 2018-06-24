<!--
Created by Phpstorm.
User: Aris
Date: 2018/6/13
Time: 17:20
To change this template use File | Settings | File Templates.
-->
<!DOCTYPE html>
<html>
<head>
    <title>病床管理</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="lib/css/bootstrap.min.css" rel="stylesheet">
    <link href="lib/css/bootstrap.css" rel="stylesheet">
    <link href="lib/css/buttons.css" rel="stylesheet">
    <link href="lib/css/form.css" rel="stylesheet">
    <link href="lib/css/style.css" type="text/css" rel="stylesheet" media="all">
    <link href="lib/css/gallery.css" rel='stylesheet' type='text/css' />
    <script type="text/javascript" src="lib/js/move-top.js"></script>
    <script type="text/javascript" src="lib/js/easing.js"></script>
    <style type="text/css">
        .nav-logo{
            float: left;
            height: 40px;
            margin-top: 5px;
            overflow: hidden;
        }
        .nav-logo a{
            margin: 0;
            padding: 0;
        }
    </style>

</head>
<body>
<!--导航-->
<div class="navbar navbar-fixed-top navbar-default" role="navigation">
    <div class="container">
        <div class="nav-logo">
            <a class="" href="/hospital">
                <img class="img-responsive" src="lib/img/logo.png" style="height: 100%;width: auto;" />
            </a>
        </div>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navBar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-right" id="navBar">
            <ul class="nav navbar-nav">
                <li><a href="/hospital">首页</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        住院部<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="function/bed/">病床管理</a></li>
                        <li><a href="function/patient/">病人管理</a></li>
                    </ul>
                </li>
                <li><a href="function/menzhen/">门诊部</a></li>
                <li><a href="function/menzhen/">员工管理</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        药品和仪器<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="function/potion/">药品管理</a></li>
                        <li><a href="function/apparatus/">仪器设备</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="money" class="modal fade" tabindex="-1">
    <div class="modal_wrapper">
        <div class="modal-dialog">
            <div class="modal-body">
                <div id="wrapper" class="login-page">
                    <div id="login_form" class="form">
                        <div class="modal-title">
                            <h2 class="text-center">请输入管理员密码:</h2>
                        </div>
                        <form class="login-form" action="/function/user/action/user.php" method="post">
                            <br>
                            <input type="password" id="pswd" name="pswd" placeholder="密码"/>
                            <button type="Submit" class="button button-action button-rounded" name="Login" value="登陆">登陆</button>
                            <button class="button button-border button-rounded button-action" data-dismiss="modal">返回</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="lib/js/jquery-3.3.1.min.js"></script>
<script src="lib/js/bootstrap.min.js"></script>
    <div class="starter">
        <!--banner-->
        <div class="banner">
            <h1>医院管理系统</h1>
        </div>
        <!--start-gallery-->
        <div class="gallery">
            <div class="container">
                <h3>功能模块</h3>
                <div class="view view-ninth">
                    <a href="function/menzhen/" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="lib/img/g4.jpg" alt="" class="img-responsive">
                        <div class="mask mask-1"> </div>
                        <div class="mask mask-2"> </div>
                        <div class="content">
                            <h2>门诊</h2>
                        </div>
                </div>

                <div class="view view-ninth">
                    <a href="function/patient/" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="lib/img/patient.png" alt="" class="img-responsive">
                        <div class="mask mask-1"> </div>
                        <div class="mask mask-2"> </div>
                        <div class="content">
                            <h2>病人管理</h2>
                        </div>
                </div>

                <div class="view view-ninth">
                    <a href="function/bed/" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="lib/img/bed.png" alt="" class="img-responsive">
                        <div class="mask mask-1"> </div>
                        <div class="mask mask-2"> </div>
                        <div class="content">
                            <h2>病床管理</h2>
                        </div>
                </div>

                <div class="view view-ninth">
                    <a href="function/personnel/" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="lib/img/g5.jpg" alt="" class="img-responsive">
                        <div class="mask mask-1"> </div>
                        <div class="mask mask-2"> </div>
                        <div class="content">
                            <h2>员工管理</h2>
                        </div>
                </div>
                <div class="view view-ninth">
                    <a href="function/potion/" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="lib/img/g6.jpg" alt="" class="img-responsive">
                        <div class="mask mask-1"> </div>
                        <div class="mask mask-2"> </div>
                        <div class="content">
                            <h2>药品查询</h2>
                            <a href="function/potion/" class="info">Read More</a>
                        </div>
                </div>

                <div class="view view-ninth">
                    <a href="function/apparatus/" class="b-link-stripe b-animate-go  swipebox"  title="Image Title"><img src="lib/img/app.png" alt="" class="img-responsive">
                        <div class="mask mask-1"> </div>
                        <div class="mask mask-2"> </div>
                        <div class="content">
                            <h2>仪器设备</h2>
                        </div>
                </div>
            </div>
        </div>
        <link rel="stylesheet" href="css/swipebox.css">
        <script src="js/jquery.swipebox.min.js"></script>
        <script type="text/javascript">
            jQuery(function($) {
                $(".swipebox").swipebox();
            });
        </script>
    </div>
</body>
</html>