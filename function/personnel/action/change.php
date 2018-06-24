<?php
	$name = $_POST['EMP_NAME'];
	$depid = $_POST['EMP_DEPT_ID'];
	$duty = $_POST['EMP_DUTY'];
	$xl = $_POST['EMP_XL'];
    $gender = $_POST['EMP_GENDER'];
    $birthday = $_POST['EMP_BIRTHDAY'];
    $hometown = $_POST['EMP_HOMETOWN'];
    $country = $_POST['EMP_COUNTRY'];
    $nation = $_POST['EMP_NATION'];
    $id1 = $_POST['EMP_ID'];
    $marriage = $_POST['EMP_MARRIAGE'];
    $health = $_POST['EMP_HEALTH'];
    $startwork = $_POST['EMP_STARTWORK'];
    $state = $_POST['EMP_STATE'];
    $homeaddress = $_POST['EMP_HOMEADDRESS'];
    $teleno = $_POST['EMP_TELENO'];
    $email = $_POST['EMP_EMAIL'];
    $jobid = $_POST['EMP_JOB_ID'];
	$t = $_GET['EMP_NO'];
	$_mysqli = new mysqli("localhost","root","root","hospital");  
	if(!$_mysqli){  
	    echo "数据库连接失败";  
	}  
	$_mysqli->set_charset("utf8");  
	$sql = "update personnel set EMP_NAME='$name',EMP_DEPT_ID='$depid',EMP_DUTY='$duty',EMP_XL='$xl',EMP_GENDER='$gender',EMP_BIRTHDAY='$birthday',EMP_HOMETOWN='$hometown',EMP_COUNTRY='$country',EMP_NATION='$nation',EMP_ID='$id1',EMP_MARRIAGE='$marriage',EMP_HEALTH='$health',EMP_STARTWORK='$startwork',EMP_STATE='$state',EMP_HOMEADDRESS='$homeaddress',EMP_TELENO='$teleno',EMP_EMAIL='$email',EMP_JOB_ID='$jobid' where EMP_NO='$t'";
	$_mysqli->query($sql);  
	//echo $sql;  
	if($_mysqli->query($sql)){  
	    echo "修改成功";  
	}else{  
	    echo "修改失败";  
	}  
?>