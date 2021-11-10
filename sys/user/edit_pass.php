<?php
include_once '../connectdb.php';
$Pass = $_POST['Password'];
$Password=md5($Pass);
$ID = $_POST['ID'];


$sql = "UPDATE `user` SET `Password`='$Password' WHERE ID = $ID";

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
