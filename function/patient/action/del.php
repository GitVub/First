<?php
	$del = $_POST["id"];
	$_mysqli = new mysqli("localhost","root","root","hospital");
	if(!$_mysqli){
	    echo "数据库连接失败";
	}
	$_mysqli->set_charset("utf8");

    $_sq3 = "select patient_room,patient_bed from patient where id=$del";
    //创建一个结果集
    $_result = $_mysqli->query($_sq3);
    //使用关联数组取值
    //print_r($_result->fetch_assoc());
    while($_assoc = $_result->fetch_assoc()){
        $room1 = $_assoc['patient_room'];
        $bed1 = $_assoc['patient_bed'];
    }

    $sq2 = "update bed set pat_name='无',bed_state='空闲' where room=$room1 and bed_no=$bed1";//初始化病房状态

	$sql = "delete from patient where id=$del";
    $_mysqli->query($sq2);
	$_mysqli->query($sql);


	if($_mysqli->query($sql)){
	    echo 1;
	}else{
	    echo 2;
	}
?>