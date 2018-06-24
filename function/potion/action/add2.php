<?php
	$price = $_POST["po_price"];
	$t = $_GET['po_name'];
	$_mysqli = new mysqli("localhost","root","root","hospital");  
	if(!$_mysqli){  
	    echo "数据库连接失败";  
	}  
	$_mysqli->set_charset("utf8");  
	$sql = "update potion set po_price='$price' where po_name='$t'";
	$_mysqli->query($sql);  
	//echo $sql;  
	if($_mysqli->query($sql)){  
	    echo "修改成功";  
	}else{  
	    echo "修改失败";  
	}  
?>