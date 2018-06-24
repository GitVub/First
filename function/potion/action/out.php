<?php
	$amount = $_POST['po_amount'];
	$t = $_GET['po_name'];
	$_mysqli = new mysqli("localhost","root","root","hospital");  
	if(!$_mysqli){  
	    echo "数据库连接失败";  
	}  
	$_mysqli->set_charset("utf8");  
	$sql = "update potion set po_amount=po_amount-$amount/2 where po_name='$t'";
	$_mysqli->query($sql);  
	//echo $sql;  
	if($_mysqli->query($sql)){  
	    echo "添加成功";  
	}else{  
	    echo "添加失败";  
	}  
?>