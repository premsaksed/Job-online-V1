<?php
include_once '../connectdb.php';
$position = $_POST['position'];
$property = $_POST['property'];
$ed_qual = $_POST['ed_qual'];
$age = $_POST['age'];
$status = $_POST['status'];
$estab = $_POST['estab'];
$work_id = $_POST['work_id'];

$sql = "UPDATE `work` SET `position`='$position',`age`='$age',`ed_qual`='$ed_qual',`property`='$property',`status`='$status' WHERE work_id=$work_id";

if (mysqli_query($con, $sql)) {
    echo "<script type='text/javascript'>";
	echo "alert('สำเร็จ');";
	echo "window.location = 'index.php'; ";
	echo "</script>";
  
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
    echo "<script type='text/javascript'>";
	echo "alert('ไม่สำเร็จ');";
	echo "window.location = 'index.php'; ";
	echo "</script>";
    
}

mysqli_close($con);
 ?>
