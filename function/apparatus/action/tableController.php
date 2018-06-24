<?php
	$_mysqli = new mysqli();  
	$_mysqli->connect("localhost","root","root","hospital");  
	if(mysqli_connect_error()){  
	    echo "连接数据库失败了";  
	}  
	$_mysqli->set_charset("utf8");  
	$sql = "select * from apparetus";
	$result = $_mysqli->query($sql);  
	$data = array();  
	while($row=$result->fetch_assoc()){  
	    $data[] = $row;  
	}  
	echo json_encode($data,JSON_UNESCAPED_UNICODE);//注意返回json格式到前台  
?>