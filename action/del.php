<?php
	$del = $_POST["id"];  
	$_mysqli = new mysqli("localhost","root","root","table");  
	if(!$_mysqli){  
	    echo "数据库连接失败";  
	}  
	$_mysqli->set_charset("utf8");  
	$sql = "delete from table_info where id=$del";  
	$_mysqli->query($sql);  
	if($_mysqli->query($sql)){  
	    echo 1;  
	}else{  
	    echo 2;  
	} 
?>