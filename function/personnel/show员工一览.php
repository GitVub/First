<html>
	<head>
	<title>浏览表中记录</title>
	<style type="text/css">
		@import "bootstrap.css"
	</style>
	</head>
<body>
	<center>
	<?php
	$db_host="localhost";      //MYSQL服务器名
	$db_user="root";       //MYSQL用户名
	$db_pass="root";       //MYSQL用户对应密码
	$db_name="hospital";      //要操作的数据库
	//使用mysql_connect()函数对服务器进行连接，如果出错返回相应信息
	$link=mysql_connect($db_host,$db_user,$db_pass)or die("不能连接到服务器".mysql_error());
	mysql_select_db($db_name,$link);   //选择相应的数据库，这里选择test库
	$sql="select * from patient";     //先执行SQL语句显示所有记录以与插入后相比较
	$result=mysql_query($sql,$link);   //使用mysql_query()发送SQL请求
	echo "当前表中的记录有：";
	echo "<table border=1>";//使用表格格式化数据
	echo "<tr><td>姓名</td><td>性别</td><td>入院时间</td><td>所属科室</td><td>病人状况</td><td>主治医生</td><td>房间号</td><td>病床号</td></tr>";
	while($row=mysql_fetch_array($result))  //遍历SQL语句执行结果把值赋给数组
	{
		 echo "<tr>";
		 echo "<td>".$row["patient_name"]."</td>";   //显示ID
		 echo "<td>".$row["patient_gender"]." </td>";  //显示姓名
		 echo "<td>".$row["patient_date_start"]." </td>";   //显示邮箱
		 echo "<td>".$row["patient_dept"]." </td>";  //显示电话
		 echo "<td>".$row["patient_state"]." </td>";  //显示地址
		 echo "<td>".$row["patient_doc"]." </td>";  //显示地址
		 echo "<td>".$row["patient_room"]." </td>";  //显示地址
		 echo "<td>".$row["patient_bed"]." </td>";  //显示地址
		 echo "</tr>";
	}
	echo "</table>";
	?>
	</center>
</body>
</html>