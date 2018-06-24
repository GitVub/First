
<html>
<head>
    <title>用户管理</title>
    <!-- 解决弹窗对话框乱码问题 -->
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <style type="text/css">
        @import "../../../lib/css/bootstrap.css"
    </style>
    <link href="../../../lib/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../lib/css/buttons.css">
    <link rel="stylesheet" href="../../../lib/css/form.css">
    <script>
        function goBack(){
            window.history.go(-1)
        }
    </script>
</head>
</html>
<?php


    $db_host="localhost";      //服务器名
    $db_user="root";       //用户名
    $db_pass="root";       //密码
    $db_name="hospital";      //数据库

    $psw = $_POST["pswd"];
    if ($psw == ""){
        //弹出对话框后返回到先前页面
        echo "<script>alert('请输入管理员密码！'); history.go(-1);</script>";
    }else {
        $link=mysql_connect($db_host,$db_user,$db_pass)or die("不能连接到服务器".mysql_error());
        mysql_select_db($db_name,$link);

        if ($psw=='root'){

            $sql2="select * from tms";     //先执行SQL语句显示所有记录以与插入后相比较
            $result2=mysql_query($sql2,$link);   //使用mysql_query()发送SQL请求

            echo "<div class='jumbotron container' style='width:500px'>";
            echo "<h2 style='text-align: center'>管理员</h2>";
            echo "<table class='table table-striped table-hover table-bordered'>";//使用表格格式化数据
            echo "<tr><td>ID</td><td>用户名</td><td>密码</td></tr>";
            while($row=mysql_fetch_array($result2))  //遍历SQL语句执行结果把值赋给数组
            {
                echo "<tr>";
                echo "<td>".$row["NO"]."</td>";
                echo "<td>".$row["NAME"]."</td>";
                echo "<td>".$row["FIXED"]." </td>";
                echo "<td>".$row["EXTRA"]." </td>";
                echo "<td>".$row["SUM"]." </td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "<button class='button button-border' onclick='goBack()'>返回</button>";
            echo "</div>";

        }else{
            //弹出对话框后返回到先前页面
            echo "<script>alert('用户名或者密码不正确！');history.go(-1);</script>";
        }
    }
