<!--
Created by Sublime Text 3.
User: Aris
Date: 2018/6/13
Time: 17:20
To change this template use File | Settings | File Templates.
-->
<!DOCTYPE html>    
<html>    
<head>    
    <title>住院部</title>    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link href="../../lib/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../lib/css/buttons.css">
    <link rel="stylesheet" href="../../lib/css/form.css">
    <link rel="stylesheet" href="../../lib/css/bootstrap-select.css">
    <link rel="stylesheet" href="../../lib/css/bootstrap-select.main.css">
    
    <style>
    	body{
     	 	padding-top: 50px;
   		 }  
   		.starter{
      		padding: 40px 15px;
     		text-align: center;
   		 }
  </style>

  <style>
      .center { 
        margin:0 auto;   
        width:300px;   
        height:200px;  
  }  
  </style>

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
            <a class="" href="#">  
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
            <li class="dropdown">  
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">  
                    员工管理<span class="caret"></span>  
                </a>  
                <ul class="dropdown-menu" role="menu">
                    <li><a href="../../function/personnel/">人事调动</a></li>
                    <li><a href="../../function/personnel/">员工一览</a></li>
                    <li><a href="../../function/personnel/">工资报表</a></li>
                </ul>  
            </li>
            <li class="dropdown">  
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">  
                    药品和仪器<span class="caret"></span>  
                </a>  
                <ul class="dropdown-menu" role="menu">  
                    <li><a href="../../function/potion_apparatus/">查询维护</a></li>
                </ul>  
            </li>  
          </ul>    
        </div>  
      </div>  
    </div>     
    <script src="../../lib/js/jquery-3.3.1.min.js"></script>
    <script src="../../lib/js/bootstrap.min.js"></script>
    <script src="../../lib/js/bootstrap-select.js"></script>
    <script src="../../lib/js/bootstrap-select.min.js"></script>
    <div class="container">
    	<div class="starter">
    		<h1 class="textcolor">病人查询</h1>
            <a type="submit" class="button button-3d button-action button-rounded button-large" data-toggle="modal" data-target="#delete">患者信息</a>
            <div id="delete" class="modal fade" tabindex="-1">
                <div class="modal_wrapper">
                    <div class="modal-dialog" style="width:900px"> <!--模态框的宽度可以自己设置-->
                        <div class="modal-content">
                            <div class="modal-body">
                                <button class="close" data-dismiss="modal">
                                    <span>×</span>
                                </button>
                            </div>
                            <div class="modal-title">
                                <h2 class="text-center">患者信息表</h2>
                            </div>
                            <div class="modal-body">
                                <div id="wrapper">
                                    <div>
                                        <table class="table table-bordered text-center table-hover">
                                            <tr>
                                                <th class="text-center">编号</th>
                                                <th class="text-center">姓  名</th>
                                                <th class="text-center">性别</th>
                                                <th class="text-center">入院日期</th>
                                                <th class="text-center">所属科室</th>
                                                <th class="text-center">患者状况</th>
                                                <th class="text-center">主治医生</th>
                                                <th class="text-center">房间号</th>
                                                <th class="text-center">病床号</th>
                                                <th class="text-center">操作</th>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--模态框：修改信息-->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="form">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <span style="font-size:22px">当前编辑:</span>
                            <h4 class="modal-title ss" id="myModalLabel" style="font-size:25px;display: inline-block" data-index="0"></h4>
                            <span style="font-size:22px">号</span>
                            <input type="text" style="background-color:white;font-size:32px;color:blue;" class="ss form-group col-xs-5 text-center" data-index="1">
                            <form class="form-horizontal" id="form">
                                <input type="text" class="ss" name="patient_name" placeholder="姓名" data-index="1">
                                <input type="text" class="ss" name="patient_gender" placeholder="性别" data-index="2">
                                <input type="text" class="ss" name="patient_date_start" placeholder="入院日期" data-index="3">
                                <input type="text" class="ss" name="patient_dept" placeholder="所属科室" data-index="4">
                                <input type="text" class="ss" name="patient_state" placeholder="患者状况" data-index="5">
                                <input type="text" class="ss" name="patient_doc" placeholder="主治医生" data-index="6">
                                <input type="text" class="ss" name="patient_room" placeholder="房间号" data-index="7">
                                <input type="text" class="ss" name="patient_bed" placeholder="病床号" data-index="8">
                                <br>
                                <button type="button" class="button button-border button-rounded button-caution" data-dismiss="modal" id="sign">修改</button>
                            </form>
                        </div>
                    </div>
                </div>

            <h1 class="textcolor">添加病人</h1>
            <a type="submit" class="button button-3d button-action button-rounded button-large" data-toggle="modal" data-target="#add">添加病人</a>
                <div id="add" class="modal fade" tabindex="-1">
                    <div class="modal_wrapper">
                        <div class="modal-dialog">
                                <div class="modal-body">
                                      <div id="wrapper" class="login-page">
                                      <div id="login_form" class="form">
                                          <div class="modal-title">
                                              <h2 class="text-center">患者信息登记</h2>
                                          </div>
                                        <form class="login-form" action="patients.php" method="post">
                                          <br>
                                          <input type="text" id="patient_name" name="patient_name" placeholder="病人姓名"/>
                                          <select class="selectpicker"  title="选择性别" id="patient_gender" name="patient_gender">
                                            <option value="男">男</option>
                                            <option value="女">女</option>
                                          </select>
                                            <br><br>
                                          <input type="text" id="patient_date_start" name="patient_date_start" placeholder="入院时间"/>
                                          <input type="text" id="patient_dept" name="patient_dept" placeholder="所属科室"/>
                                          <input type="text" id="patient_state" name="patient_state" placeholder="病人状况"/>
                                          <input type="text" id="patient_doc" name="patient_doc" placeholder="主治医生"/>
                                          <input type="text" id="patient_room" name="patient_room" placeholder="病人房间号"/>
                                          <input type="text" id="patient_bed" name="patient_bed" placeholder="病人病床号"/>
                                          <br>
                                          <br>
                                          <button type="Submit" class="button button-primary button-rounded" name="Submit" value="添加病人">添加</button>
                                          <button class="button button-border button-rounded button-primary" data-dismiss="modal">返回</button>
                                        </form>
                                      </div>
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
                        str = "<tr><td>"+data[i].id+"</ta><td>"+data[i].patient_name+"</td><td>"+data[i].patient_gender+"</td><td>"+data[i].patient_date_start+"</td><td>"+data[i].patient_dept+"</td><td>"+data[i].patient_state+"</td><td>"+data[i].patient_doc+"</td><td>"+data[i].patient_room+"</td><td>"+data[i].patient_bed+"</td><td><button class='btn btn-primary btn-xs' id='change' data-toggle='modal' data-target='myModal'>修改</button><button class='btn btn-danger btn-xs' id='del' style='margin-left: 5px'>删除</button></td></tr>";
                        $("table>tbody").append(str)
                    }
                }
            })
        }

        //删除按钮的事件
        $(document).on("click","#del", function () {
            var _this = $(this)

            $.ajax({
                url:"action/del.php",
                type:"POST",
                data:{
                    val:"del",
                    id:_this.parents("tr").find("td:eq(0)").text()
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
                        alert("修改成功")
                    }else{
                        alert("修改失败")
                    }
                }
            })
        })
    </script>
</body>
</html>  