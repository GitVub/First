<?php
	$del = $_POST["EMP_NO"];
	$_mysqli = new mysqli("localhost","root","root","hospital");  
	if(!$_mysqli){  
	    echo "数据库连接失败";  
	}
	$_mysqli->set_charset("utf8");
	$sql = "delete from personnel where EMP_NO='$del'";
	$_mysqli->query($sql);  
	if($_mysqli->query($sql)){  
	    echo 1;  
	}else{  
	    echo 2;  
	} 
?>GET