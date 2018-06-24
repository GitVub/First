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
    <title>员工管理</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../lib/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../lib/css/bootstrap.css" rel="stylesheet">
    <link href="../../lib/css/buttons.css" rel="stylesheet">
    <link href="../../lib/css/form.css" rel="stylesheet">
    <link href="../../lib/css/fixed-layout.css" rel="stylesheet">
    <link href="../../lib/css/style.css" type="text/css" rel="stylesheet" media="all">

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
            <a class="" href="/hospital/">
                <img class="img-responsive" src="../../lib/img/logo.png" alt="WeLock" style="height: 100%;width: auto;" />
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
                <li><a href="../../">首页</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        住院部<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="../../function/bed/">病床管理</a></li>
                        <li><a href="../../function/patient/">病人管理</a></li>
                    </ul>
                </li>
                <li><a href="../../function/menzhen/">门诊部</a></li>
                <li><a href="../../function/personnel/">员工管理</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        药品和仪器<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="../../function/potion/">药品管理</a></li>
                        <li><a href="../../function/apparatus/">仪器设备</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<script src="../../lib/js/jquery-3.3.1.min.js"></script>
<script src="../../lib/js/bootstrap.min.js"></script>
    <div class="row clearfix banner">
        <div class="col-md-12 column" >
            <br><br>
            <!--主表-->
            <div class="jumbotron container" style="width:1600px">
                <h2 style="text-align: center">
                    员工表
                </h2>
                <br><br>
                <div class="main" id="div1">
                    <table class="table table-bordered text-center table-hover">
                        <tr>
                            <th class="text-center">员工号</th>
                            <th class="text-center">姓名</th>
                            <th class="text-center">部门号</th>
                            <th class="text-center">职务</th>
                            <th class="text-center">学历</th>
                            <th class="text-center">性别</th>
                            <th class="text-center">生日</th>
                            <th class="text-center">籍贯</th>
                            <th class="text-center">国籍</th>
                            <th class="text-center">名族</th>
                            <th class="text-center">身份证号</th>
                            <th class="text-center">婚姻状况</th>
                            <th class="text-center">健康状况</th>
                            <th class="text-center">工作时间</th>
                            <th class="text-center">状态</th>
                            <th class="text-center">住址</th>
                            <th class="text-center">电话</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">岗位代号</th>
                            <th class="text-center">操作</th>

                        </tr>
                    </table>

                    <!--模态框-->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <span style="font-size:22px">员工号:</span>
                                    <h3 class="modal-title ss" id="myModalLabel" style="display: inline-block" data-index="0">Modal title</h3>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" id="form">
                                        <input type="text" class="ss"  name="EMP_NAME" placeholder="姓名" data-index="1">
                                        <input type="text" class="ss"  name="EMP_DEPT_ID" placeholder="部门号" data-index="2">
                                        <input type="text" class="ss"  name="EMP_DUTY" placeholder="职务" data-index="3">
                                        <input type="text" class="ss"  name="EMP_XL" placeholder="学历" data-index="4">
                                        <input type="text" class="ss"  name="EMP_GENDER" placeholder="性别" data-index="5">
                                        <input type="text" class="ss"  name="EMP_BIRTHDAY" placeholder="生日" data-index="6">
                                        <input type="text" class="ss"  name="EMP_HOMETOWN" placeholder="籍贯" data-index="7">
                                        <input type="text" class="ss"  name="EMP_COUNTRY" placeholder="国籍" data-index="8">
                                        <input type="text" class="ss"  name="EMP_NATION" placeholder="民族" data-index="9">
                                        <input type="text" class="ss"  name="EMP_ID" placeholder="身份证号" data-index="10">
                                        <input type="text" class="ss"  name="EMP_MARRIAGE" placeholder="婚姻状况" data-index="11">
                                        <input type="text" class="ss"  name="EMP_HEALTH" placeholder="健康状况" data-index="12">
                                        <input type="text" class="ss"  name="EMP_STARTWORK" placeholder="工作时间" data-index="13">
                                        <input type="text" class="ss"  name="EMP_STATE" placeholder="状态" data-index="14">
                                        <input type="text" class="ss"  name="EMP_HOMEADDRESS" placeholder="住址" data-index="15">
                                        <input type="text" class="ss"  name="EMP_TELENO" placeholder="电话" data-index="16">
                                        <input type="text" class="ss"  name="EMP_EMAIL" placeholder="Email" data-index="17">
                                        <input type="text" class="ss"  name="EMP_JOB_ID" placeholder="岗位代号" data-index="18">
                                        <button type="button" class="button button-border button-rounded button-caution button-tiny" data-dismiss="modal" id="sign">修改</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--三个按钮-->
            <div class="container">
                     <!--员工查询-->
                <div>
                    <div class="col-md-4 column">
                        <p style="text-align: center">
                            <a type="submit" class="button button-3d button-primary button-rounded button-large" data-toggle="modal" data-target="#select"><strong>员工查询</strong></a>
                                <div id="select" class="modal fade" tabindex="-1">
                                    <div class="modal_wrapper">
                                        <div class="modal-dialog">
                                            <div class="modal-body">
                                                <div id="wrapper" class="login-page">
                                                    <div id="login_form" class="form">
                                                        <div class="modal-title">
                                                            <h2 class="text-center">员工查询:</h2>
                                                        </div>
                                                        <form class="login-form" action="action/select.php" method="post">
                                                            <br>
                                                            <input type="text" id="EMP_NO" name="EMP_NO" placeholder="员工号"/>
                                                            <button type="Submit" class="button button-primary button-rounded" name="Submit" value="员工查询">查询</button>
                                                            <button class="button button-border button-rounded button-primary" data-dismiss="modal">返回</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </p>
                    </div>

                   <!--工资报表-->
                    <div class="col-md-4 column">
                        <p style="text-align: center">
                            <a type="submit" class="button button-3d button-action button-rounded button-large" data-toggle="modal" data-target="#money"><strong>工资报表</strong></a>
                        <div id="money" class="modal fade" tabindex="-1">
                            <div class="modal_wrapper">
                                <div class="modal-dialog">
                                    <div class="modal-body">
                                        <div id="wrapper" class="login-page">
                                            <div id="login_form" class="form">
                                                <div class="modal-title">
                                                    <h2 class="text-center">身份验证:</h2>
                                                </div>
                                                <form class="login-form" action="action/money.php" method="post">
                                                    <br>
                                                    <input type="text" id="user" name="user" placeholder="账号"/>
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
                        </p>
                    </div>

                    <!--人事变动-->
                    <div class="col-md-4 column">
                        <p style="text-align: center">
                            <a type="submit" class="button button-3d button-caution button-rounded button-large" data-toggle="modal" data-target="#add"><strong>人事变动</strong></a>
                        </p>
                    </div>
            </div>

        </div>
    </div>

    <script type="text/javascript">
        //初始数据加载
        refresh()
        function  refresh(){
                $.ajax({
                    url:"action/tableController.php",
                    type:"get",
                    success: function (res) {
                        var data = jQuery.parseJSON(res)
                        var str = "";
                        for(var i=0;i<data.length;i++){
                            str = "<tr><td>"+data[i].EMP_NO+"</td><td>"+data[i].EMP_NAME+"</td><td>"+data[i].EMP_DEPT_ID+"</td><td>"+data[i].EMP_DUTY+"</td><td>"+data[i].EMP_XL+"</td><td>"+data[i].EMP_GENDER+"</td><td>"+data[i].EMP_BIRTHDAY+"</td><td>"+data[i].EMP_HOMETOWN+"</td><td>"+data[i].EMP_COUNTRY+"</td><td>"+data[i].EMP_NATION+"</td><td>"+data[i].EMP_ID+"</td><td>"+data[i].EMP_MARRIAGE+"</td><td>"+data[i].EMP_HEALTH+"</td><td>"+data[i].EMP_STARTWORK+"</td><td>"+data[i].EMP_STATE+"</td><td>"+data[i].EMP_HOMEADDRESS+"</td><td>"+data[i].EMP_TELENO+"</td><td>"+data[i].EMP_EMAIL+"</td><td>"+data[i].EMP_JOB_ID+"</td><td><button class='btn btn-primary btn-xs' id='change' data-toggle='modal' data-target='myModal'>修改</button><button class='btn btn-danger btn-xs' id='del' style='margin-left: 5px'>删除</button></td></tr>";
                            $("table>tbody").append(str)
                        }
                    }
                })
            }


        //删除事件
        $(document).on("click","#del", function () {
            var _this = $(this)

            $.ajax({
                url:"action/del.php",
                type:"POST",
                data:{
                    val:"del",
                    EMP_NO:_this.parents("tr").find("td:eq(0)").text()
                },
                success: function (res) {
                    if(res=="1"){
                        _this.parents("tr").remove()
                    }else{
                        alert("删除失败")
                    }
                }
            })
        })

        //修改
        var a = 0;
        $(document).on("click","#change",function(){
            $('#myModal').modal()
            a = $(this).parents("tr").index() //全局a用来查找当前的下表
            $(this).parents("tr").find("td:not(:last-child)").each(function () {
                var s = $(this).text()
//                     console.log(s)
                var b = $(this).index()

                if(b>0){
                    $("#myModal .ss[data-index='"+b+"']").val(s)
                }else{
                    $("#myModal .ss[data-index='"+b+"']").text(s)
                }
            })

        })
        //修改
        $(document).on("click","#sign",function(){
            var data1 = $("#form").serialize()
            var t = $("#myModalLabel").text()
            $("#myModal").find("input").each(function () {
                var q = $(this).val()
                var s = $(this).data("index")
                $("table>tbody").children("tr").eq(a).find("td").eq(s).text(q)
            })
            $.ajax({
                url:"action/change.php?EMP_NO="+t,
                type:"POST",
                data:data1,
                success:function(res){
                }
            })
        })
    </script>
</body>

</body>
</html>