<html>  
<head>  
    <!-- 解决弹窗对话框乱码问题 -->  
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">  
</head>

<?php
    
    //连接数据库  
    $servername = "localhost";  
    $username = "root";  
    $password = "root";  
    $dbname = "hospital";
    //定义数据库变量

	$conn = new mysqli($servername, $username, $password,$dbname);  
	// 检测连接  
   	if ($conn->connect_error) {  
        die("连接失败: " . $conn->connect_error);  
    }

	if(isset($_POST["Submit"]) && $_POST["Submit"] == "添加病人"){
		$name = $_POST["patient_name"];
		$gender = $_POST["patient_gender"];
		$date_start = $_POST["patient_date_start"];
		$dept = $_POST["patient_dept"];
		$state = $_POST["patient_state"];
		$doc = $_POST["patient_doc"];
		$room = $_POST["patient_room"];
		$bed = $_POST["patient_bed"];

	    $sql = "select patient_name,patient_date_start from patient where patient_name = '$name' and patient_date_start = '$date_start'";

	    $result = $conn->query($sql);  
	    //统计执行结果影响的行数  
	    $num = $result->num_rows;  
	    //如果已经存在该用户      
	    if($name == "" || $gender == "" || $date_start == "" || $dept == "" || $state == "" || $doc == "" || $room == "" || $bed == ""){  
        	echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";  
   		 }else{
	    	if($num){  
	    	       echo "<script>alert('该病人信息已录入过，请勿重复添加！');history.go(-1);</script>";
	    	    }else{//检查病床是否占用
	    	        $sql4 = "select * from bed where room = $room and bed_no = $bed and bed_state='占用'";
                    $res_insert1 = $conn->query($sql4);
                    $num2 = $res_insert1->num_rows;
                    if($num2) {
                        echo "<script>alert('该病床已占用，请重新选择病房和病床！'); history.go(-1);</script>";
                    }else{
                        //插入操作
                       $sql_insert = "insert into patient (patient_name,patient_gender,patient_date_start,patient_dept,patient_state,patient_doc,patient_room,patient_bed) values('$name','$gender','$date_start','$dept','$state','$doc','$room','$bed')";
                       $sql3 = "update bed set pat_name='$name',bed_state='占用' where room=$room and bed_no=$bed";//修改病房表的状态
                        $conn->query($sql3);
                        $res_insert = $conn->query($sql_insert);
                        //统计执行结果影响的行数
                        $num_insert = $res_insert->num_rows;
                        if($res_insert){
                            echo "<script>alert('病人".$name."信息录入成功！'); history.go(-1);</script>";
                        }else{
                            echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";
                        }
                    }
	    	    }
	    }

	}else{
		if(isset($_POST["Submit"]) && $_POST["Submit"] == "删除信息")	{
		$name = $_POST["patient_name"];
		$room = $_POST["patient_room"];
		$bed = $_POST["patient_bed"];

		$sql = "select patient_name,patient_room,patient_bed from patient where patient_name = '$name' and patient_room = '$room' and patient_bed = '$bed'";
		$result = $conn->query($sql);  
	    //统计执行结果影响的行数  
	    $num = $result->num_rows;  
	    //如果已经存在该用户      
	    if($name == "" || $room == "" || $bed == ""){  
        	echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";  
   		 }else{
	    	if($num){
	    			//删除操作  
	    	        $sql_delete = "delete from patient where patient_name = '$name' and patient_room = '$room' and patient_bed = '$bed'"; 

	    	        $res_delete = $conn->query($sql_delete);
	    	        //统计执行结果影响的行数  
	    	        $num_delete = $res_delete->num_rows;  
    	            if($res_delete){  
    	                echo "<script>alert('患者".$name."信息删除成功！'); history.go(-1);</script>";  
    	                }else{  
    	                    echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";  
    	                	}   
	    	    }else{
	    	    	echo "<script>alert('患者".$name."信息不存在！');history.go(-1);</script>";  
	    	    	}
	   		 }
		}else{
			echo "<script>alert('提交未成功！'); history.go(-1);</script>";
			}
		}
?>