<?php
	$t = $_GET['app_name'];
	$_mysqli = new mysqli("localhost","root","root","hospital");  
	if(!$_mysqli){  
	    echo "数据库连接失败";  
	}  
	$_mysqli->set_charset("utf8");  
	$sql = "update apparetus set app_state='正常' where app_name='$t'";
	$_mysqli->query($sql);  
	//echo $sql;  
	if($_mysqli->query($sql)){  
	    echo 1;  
	}else{  
	    echo 2;  
	}  
?>