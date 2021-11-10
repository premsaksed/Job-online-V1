<?php
include_once '../connectdb.php';
$work_id = $_GET['work_id'];

$sql = "UPDATE `w_work` SET `status`='1' WHERE w_id=$work_id";

if (mysqli_query($con, $sql)) {
    echo "<script type='text/javascript'>";
	echo "alert('สำเร็จ');";
	echo "window.location = 'index.php'; ";
	echo "</script>";
  
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
    // echo "<script type='text/javascript'>";
	// echo "alert('ไม่สำเร็จ');";
	// echo "window.location = 'index.php'; ";
	// echo "</script>";
    
}

mysqli_close($con);
 ?>
