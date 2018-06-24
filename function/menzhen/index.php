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
    <title>门诊</title>
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
        <div class="jumbotron container" style="width:500px;text-align:end">
            <h2 style="text-align: center">
                当前可用病房:
            </h2>
            <br><br>
            <div>
                <table class="table table-bordered text-center table-hover">
                    <tr>
                        <th class="text-center">编号</th>
                        <th class="text-center">房间号</th>
                        <th class="text-center">病床号</th>
                        <th class="text-center">状态</th>
                        <th class="text-center">患者添加</th>
                    </tr>
                </table>

                <!--模态框-->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="form">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <span style="font-size:22px">当前登记病房:</span>
                            <input type="text" style="background-color:white;font-size:32px;color:blue;" class="ss form-group text-center" data-index="1">
                            <form class="form-horizontal" id="form" action="../patient/patients.php" method="post">
                                <input type="text" class="ss" id="patient_name" name="patient_name" placeholder="姓名">
                                <input type="text" class="ss" id="patient_gender" name="patient_gender" placeholder="性别">
                                <input type="text" class="ss" id="patient_date_start" name="patient_date_start" placeholder="入院日期">
                                <input type="text" class="ss" id="patient_dept" name="patient_dept" placeholder="所属科室">
                                <input type="text" class="ss" id="patient_state" name="patient_state" placeholder="患者状况">
                                <input type="text" class="ss" id="patient_doc" name="patient_doc" placeholder="主治医生">
                                <input type="text" class="ss" id="patient_room" name="patient_room" data-index="1" readonly="readonly">
                                <input type="text" class="ss" id="patient_bed" name="patient_bed" data-index="2" readonly="readonly">
                                <br>
                                <button type="Submit" class="button button-primary button-rounded" name="Submit" value="添加病人">添加</button>
                                <button class="button button-border button-rounded button-primary" data-dismiss="modal">返回</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <a class="button button-rounded button-border" href="../patient/"><strong>住院部入口</strong></a>
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
                        str = "<tr><td>"+data[i].id+"</td><td>"+data[i].room+"</td><td>"+data[i].bed_no+"</td><td>"+data[i].bed_state+"</td><td><button class='btn btn-primary btn-xs' id='change' data-toggle='modal' data-target='myModal'>添加</button></td></tr>";
                        $("table>tbody").append(str)
                    }
                }
            })
        }
        //修改按钮的事件
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

        //修改按钮的事件
        $(document).on("click","#sign",function(){
            var data1 = $("#form").serialize()
            var t = $("#myModalLabel").text()
            $("#myModal").find("input").each(function () {
                var q = $(this).val()
                var s = $(this).data("index")
                $("table>tbody").children("tr").eq(a).find("td").eq(s).text(q)
            })
            $.ajax({
                url:"action/change.php?id="+t,
                type:"POST",
                data:data1,
                success:function(res){
                    if(res=="1"){
                        alert("添加成功")
                    }else{
                        alert("添加失败")
                    }
                }
            })
        })
    </script>
</body>

</body>
</html>