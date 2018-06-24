<html>  
<head>  
    <!-- 解决弹窗对话框乱码问题 -->  
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">  
</head>
</html>
<?php
    
    //连接数据库  
    $servername = "localhost";  
    $username = "root";  
    $password = "root";  
    $dbname = "hospital";
    //定义数据库变量

	$conn = new mysqli($servername, $username, $password,$dbname);  
	// 检测连接  
   	if ($conn->connect_error) {  
        die("连接失败: " . $conn->connect_error);  
    }

	$name = $_POST['po_name'];
	$amount = $_POST['po_amount'];
	$price = $_POST['po_price'];

    $sql = "select po_name where po_name = '$name'";

    $result = $conn->query($sql);  
    //统计执行结果影响的行数  
    $num = $result->num_rows;  
	          
    if($name == "" || $amount == "" || $price == ""){  
    	echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";  
		 }else{
		 	//如果已经存在该药物
    	if($num){  //检查病床是否占用
    	       echo "<script>alert('该药物信息已录入过，请直接添加！');history.go(-1);</script>";
    	    }else{
                //插入操作
	                $sql = "insert into potion(po_name,po_amount,po_price) values('$name','$amount','$price')";
	                $res_insert = $conn->query($sql);
	                //统计执行结果影响的行数
	                $num_insert = $res_insert->num_rows;
	                if($res_insert){
	                    echo "<script>alert('药物".$name."信息录入成功！'); history.go(-1);</script>";
	                }else{
	                    echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";
	                }
                }
    	    }

?>