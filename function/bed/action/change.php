<?php
	$pat_name = $_POST['pat_name'];
	$bed_state = $_POST['bed_state'];

	$t = $_GET['id'];
	$_mysqli = new mysqli("localhost","root","root","hospital");  
	if(!$_mysqli){  
	    echo "数据库连接失败"; 
	}
	$_mysqli->set_charset("utf8");  
	$sql = "update bed set pat_name='$pat_name',bed_state='$bed_state' where id='$t'";
	$_mysqli->query($sql);  
	//echo $sql;  
	if($_mysqli->query($sql)){  
	    echo "修改成功";  
	}else{  
	    echo "修改失败";  
	}  
?>