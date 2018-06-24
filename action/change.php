<?php
	$name = $_POST["patient_name"];
	$gender = $_POST["patient_gender"];
	$date_start = $_POST["patient_date_start"];
	$dept = $_POST["patient_dept"];
	$state = $_POST["patient_state"];
	$doc = $_POST["patient_doc"];
	$room = $_POST["patient_room"];
	$bed = $_POST["patient_bed"];  
	$t = $_GET["id"];  
	$_mysqli = new mysqli("localhost","root","root","table");  
	if(!$_mysqli){  
	    echo "数据库连接失败";  
	}  
	$_mysqli->set_charset("utf8");  
	$sql = "update table_info set PATIENT_NAME='$name',patient_gender='$gender',patient_date_start='$date_start',patient_dept='$dept',patient_state='$state',patient_doc='$doc',patient_room='$roo,',patient_bed='$bed' where id=$t";  
	$_mysqli->query($sql);  
	//echo $sql;  
	if($_mysqli->query($sql)){  
	    echo "修改成功";  
	}else{  
	    echo "修改失败";  
	}  
?>