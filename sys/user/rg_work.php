<?php session_start();?>
<?php
include_once '../connectdb.php';
$work = $_GET['work'];
$business = $_GET['business'];
$id = $_SESSION["UserID"];

echo $id;


$sql = "INSERT INTO `w_work`( `work`, `user`,`business`, `status`) 
VALUES ('$work','$id','$business','0')";
// w_id	work user status
if (mysqli_query($con, $sql)) {
    echo "<script type='text/javascript'>";
	echo "alert('สมัครงานสำเร็จ โปรเข้าตรวจสอบสถานะการสมัคร');";
	echo "window.location = 'index.php'; ";
	echo "</script>";
  
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
    // echo "<script type='text/javascript'>";
	// echo "alert('สมัครไม่สำเร็จ');";
	// echo "window.location = 'index.php'; ";
	// echo "</script>";
    
}

mysqli_close($con);
 ?>