<?php
	$name = $_POST["patient_name"];
	$gender = $_POST['patient_gender'];
	$date_start = $_POST['patient_date_start'];
	$dept = $_POST['patient_dept'];
	$state = $_POST['patient_state'];
	$doc = $_POST['patient_doc'];
	$room = $_POST['patient_room'];
	$bed = $_POST['patient_bed'];
	$t = $_GET["id"];

	$_mysqli = new mysqli("localhost","root","root","hospital");
	if(!$_mysqli){
	    echo "<script>alert('数据库连接失败'); history.go(-1);</script>";
	}
	$_mysqli->set_charset("utf8");

	//查找正在修改信息对应的病房病床
	$_sq1 = "select patient_room,patient_bed from patient where id=$t";
    //创建一个结果集
    $_result = $_mysqli->query($_sq1);
    //使用关联数组取值
    //print_r($_result->fetch_assoc());
    while($_assoc = $_result->fetch_assoc()){
        $room1 = $_assoc['patient_room'];
        $bed1 = $_assoc['patient_bed'];
    }


        $sq2 = "update bed set pat_name='无',bed_state='空闲' where room=$room1 and bed_no=$bed1";//初始化修改前的病房状态
        $sq3 = "update patient set patient_name='$name',patient_gender='$gender',patient_date_start='$date_start',patient_dept='$dept',patient_state='$state',patient_doc='$doc',patient_room='$room',patient_bed='$bed' where id=$t";
        $sq4 = "update bed set pat_name='$name',bed_state='占用' where room=$room and bed_no=$bed";//修改病房表

        $_mysqli->query($sq2);//执行操作
        $_mysqli->query($sq3);
        $_mysqli->query($sq4);
        //echo $sql;
        if($_mysqli->query($sq3)){
            echo 1;
        }else{
            echo 2;
        }

?>