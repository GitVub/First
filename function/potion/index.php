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
    <title>药品管理</title>
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
            <div class="jumbotron container" style="width:500px">
                <h2 style="text-align: center">
                    药品清单
                </h2>
                <br><br>
                <div class="main" id="div1">
                    <table class="table table-bordered text-center table-hover">
                        <tr>
                            <th class="text-center">药品名称</th>
                            <th class="text-center">数量(盒)</th>
                            <th class="text-center">单价(元)</th>
                            <th class="text-center">操作</th>
                        </tr>
                    </table>

                    <a type="submit" class="button button-rounded button-border" data-toggle="modal" data-target="#new"><strong>添加药物</strong></a>
                    <div id="new" class="modal fade" tabindex="-1">
                        <div class="modal_wrapper">
                            <div class="modal-dialog">
                                <div class="modal-body">
                                    <div id="wrapper" class="login-page">
                                        <div id="login_form" class="form">
                                            <div class="modal-title">
                                                <h2 class="text-center">药物信息登记</h2>
                                            </div>
                                            <form class="login-form" action="action/new.php" method="post">
                                                <br>
                                                <input type="text" id="po_name" name="po_name" placeholder="药物名称"/>
                                                <input type="text" id="po_amount" name="po_amount" placeholder="药物数量"/>
                                                <input type="text" id="po_price" name="po_price" placeholder="药物价格"/>
                                                <br>
                                                <br>
                                                <button type="Submit" class="button button-primary button-rounded" name="Submit" value="添加药物">添加</button>
                                                <button class="button button-border button-rounded button-primary" data-dismiss="modal">返回</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--模态框-->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="form">
                                <div class="modal-header">
                                    <span style="font-size:22px">药品:</span>
                                    <h3 class="modal-title ss" id="myModalLabel" style="display: inline-block" data-index="0">Modal title</h3>
                                </div>
                                <form class="form-horizontal" id="form">
                                    <input type="text" name="po_amount" placeholder="输入添加数量">
                                    <button type="button" class="button button-border button-rounded button-action" data-dismiss="modal" id="sign">确认添加</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="form">
                                <div class="modal-header"><span style="font-size:22px">药品:</span>
                                    <h3 class="modal-title ss" id="myModalLabel3" style="display: inline-block" data-index="0">Modal title</h3>
                                </div>
                                <form class="form-horizontal" id="form3">
                                    <input type="text" name="po_amount" placeholder="输入取出数量">
                                    <button type="button" class="button button-border button-rounded button-action" data-dismiss="modal" id="sign3">确认取出</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="form">
                                <div class="modal-header">
                                    <span style="font-size:22px">药品:</span>
                                    <h3 class="modal-title ss" id="myModalLabel2" style="display: inline-block" data-index="0">Modal title</h3>
                                </div>
                                <form class="form-horizontal" id="form2">
                                    <input type="text" name="po_price" placeholder="输入单价">
                                    <button type="button" class="button button-border button-rounded button-action" data-dismiss="modal" id="sign2">确认改价</button>
                                </form>
                            </div>
                        </div>
                    </div>

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
                            str = "<tr><td>"+data[i].po_name+"</td><td>"+data[i].po_amount+"</td><td>"+data[i].po_price+"</td><td><button class='btn btn-primary btn-xs' id='add' data-toggle='modal' data-target='myModal'>补充</button><button class='btn btn-success btn-xs' id='out' style='margin-left: 5px'>取药</button><button class='btn btn-danger btn-xs' id='add2' style='margin-left: 5px'>改价</button></td></tr>";
                            $("table>tbody").append(str)
                        }
                    }
                })
            }

        //添加药物
        var a = 0;
        $(document).on("click","#add",function(){
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

        //改表事件
        $(document).on("click","#sign",function(){
            var data1 = $("#form").serialize()
            var t = $("#myModalLabel").text()
            $("#myModal").find("input").each(function () {
                var q = $(this).val()
                var s = $(this).data("index")
                $("table>tbody").children("tr").eq(a).find("td").eq(s).text(q)
            })
            $.ajax({
                url:"action/add.php?po_name="+t,
                type:"POST",
                data:data1,
                success:function(res){
                }
            })
        })

        //去出药物
        var a = 0;
        $(document).on("click","#out",function(){
            $('#myModal3').modal()
            a = $(this).parents("tr").index() //全局a用来查找当前的下表
            $(this).parents("tr").find("td:not(:last-child)").each(function () {
                var s = $(this).text()
//                     console.log(s)
                var b = $(this).index()

                if(b>0){
                    $("#myModal3 .ss[data-index='"+b+"']").val(s)
                }else{
                    $("#myModal3 .ss[data-index='"+b+"']").text(s)
                }
            })

        })

        //改表事件
        $(document).on("click","#sign3",function(){
            var data1 = $("#form3").serialize()
            var t = $("#myModalLabel3").text()
            $("#myModal3").find("input").each(function () {
                var q = $(this).val()
                var s = $(this).data("index")
                $("table>tbody").children("tr").eq(a).find("td").eq(s).text(q)
            })
            $.ajax({
                url:"action/out.php?po_name="+t,
                type:"POST",
                data:data1,
                success:function(res){
                }
            })
        })

        //修改单价
        $(document).on("click","#add2",function(){
            $('#myModal2').modal()
            a = $(this).parents("tr").index() //全局a用来查找当前的下表
            $(this).parents("tr").find("td:not(:last-child)").each(function () {
                var s = $(this).text()
//                     console.log(s)
                var b = $(this).index()

                if(b>0){
                    $("#myModal2 .ss[data-index='"+b+"']").val(s)
                }else{
                    $("#myModal2 .ss[data-index='"+b+"']").text(s)
                }
            })

        })

        $(document).on("click","#sign2",function(){
            var data1 = $("#form2").serialize()
            var t = $("#myModalLabel2").text()
            $("#myModal2").find("input").each(function () {
                var q = $(this).val()
                var s = $(this).data("index")
                $("table>tbody").children("tr").eq(a).find("td").eq(s).text(q)
            })
            $.ajax({
                url:"action/add2.php?po_name="+t,
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