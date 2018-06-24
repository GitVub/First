<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">   <!-- 解决弹窗对话框乱码问题 -->  
		
		<title>浏览表中记录</title>
		<style type="text/css">
			@import "../../../lib/css/bootstrap.css"
		</style>
		<link href="../../../lib/css/bootstrap.min.css" rel="stylesheet">
    	<link rel="stylesheet" href="../../../lib/css/buttons.css">
    	<link rel="stylesheet" href="../../../lib/css/form.css">
	</head>
	</html>
<body>
<?php
    
    //连接数据库  
    $db_host="localhost";      //服务器名
	$db_user="root";       //用户名
	$db_pass="root";       //密码
	$db_name="hospital";      //数据库
    //定义数据库变量
	$no = $_POST["EMP_NO"];

	if(isset($_POST["Submit"]) && $_POST["Submit"] == "员工查询"){
	    $link=mysql_connect($db_host,$db_user,$db_pass)or die("不能连接到服务器".mysql_error());
		mysql_select_db($db_name,$link);   //选择相应的数据库，这里选择test库
		$sql="select * from personnel where EMP_NO = '$no'";     //先执行SQL语句显示所有记录以与插入后相比较
		$result=mysql_query($sql,$link);   //使用mysql_query()发送SQL请求     
	    	  
    		echo "<table class='table table-striped table-hover' border=1>";//使用表格格式化数据  
	        echo "<tr><td>姓名</td><td>部门号</td><td>职务</td><td>学历</td><td>性别</td><td>生日</td><td>籍贯</td><td>国籍</td><td>民族</td><td>身份证号</td><td>婚姻状况</td><td>健康状况</td><td>工作时间</td><td>状态</td><td>住址</td><td>电话</td><td>Email</td><td>岗位代号</td></tr>";
	        while($row=mysql_fetch_array($result))  //遍历SQL语句执行结果把值赋给数组
	        {
	        	 echo "<tr>";
				 echo "<td>".$row["EMP_NAME"]." </td>";  //显示姓名
				 echo "<td>".$row["EMP_DEPT_ID"]." </td>";  //显示姓名
				 echo "<td>".$row["EMP_DUTY"]." </td>";  //显示姓名
				 echo "<td>".$row["EMP_XL"]." </td>";  //显示姓名
				 echo "<td>".$row["EMP_GENDER"]." </td>";   //显示邮箱
				 echo "<td>".$row["EMP_BIRTHDAY"]." </td>";  //显示电话
				 echo "<td>".$row["EMP_HOMETOWN"]." </td>";  //显示地址
				 echo "<td>".$row["EMP_COUNTRY"]." </td>";  //显示地址
				 echo "<td>".$row["EMP_NATION"]." </td>";  //显示地址
				 echo "<td>".$row["EMP_ID"]." </td>";  //显示地址
				 echo "<td>".$row["EMP_MARRIAGE"]." </td>";  //显示地址
				 echo "<td>".$row["EMP_HEALTH"]." </td>";  //显示地址
				 echo "<td>".$row["EMP_STARTWORK"]." </td>";  //显示地址
				 echo "<td>".$row["EMP_STATE"]." </td>";  //显示地址
				 echo "<td>".$row["EMP_HOMEADDRESS"]." </td>";  //显示地址
				 echo "<td>".$row["EMP_TELENO"]." </td>";  //显示地址
				 echo "<td>".$row["EMP_EMAIL"]." </td>";  //显示地址
				 echo "<td>".$row["EMP_JOB_ID"]." </td>";  //显示地址  
				 echo "</tr>";


	        }
			echo "</table>";

	}else{
		if(isset($_POST["Submit"]) && $_POST["Submit"] == "工资报表")	{
		$name = $_POST["patient_name"];
		$room = $_POST["patient_room"];
		$bed = $_POST["patient_bed"];

		$sql = "select patient_name,patient_room,patient_bed from patient where patient_name = '$name' and patient_room = '$room' and patient_bed = '$bed'";
		$result = $conn->query($sql);  
	    //统计执行结果影响的行数  
	    $num = $result->num_rows;  
	    //如果已经存在该用户      
	    if($name == "" || $room == "" || $bed == ""){  
        	echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";  
   		 }else{
	    	if($num){
	    			//删除操作  
	    	        $sql_delete = "delete from patient where patient_name = '$name' and patient_room = '$room' and patient_bed = '$bed'"; 

	    	        $res_delete = $conn->query($sql_delete);
	    	        //统计执行结果影响的行数  
	    	        $num_delete = $res_delete->num_rows;  
    	            if($res_delete){  
    	                echo "<script>alert('患者".$name."信息删除成功！'); history.go(-1);</script>";  
    	                }else{  
    	                    echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";  
    	                	}   
	    	    }else{
	    	    	echo "<script>alert('患者".$name."信息不存在！');history.go(-1);</script>";  
	    	    	}
	   		 }
		}else{
			echo "<script>alert('提交未成功！'); history.go(-1);</script>";
			}
		}
?>
</body>
</html>