<?php
include_once '../connectdb.php';
$Username = $_POST['Username'];
$Firstname = $_POST['Firstname'];
$date = $_POST['date'];
$phone = $_POST['phone'];
$education = $_POST['education'];
$group = $_POST['group'];
$lavel = $_POST['lavel'];
$qualification = $_POST['qualification'];
$faculty = $_POST['faculty'];
$ID = $_POST['ID'];


$sql = "UPDATE `user` SET `Username`='$Username',`Firstname`='$Firstname',`date`='$date',`phone`='$phone',`education`='$education',`group`='$group',`lavel`='$lavel',`qualification`='$qualification',faculty='$faculty' WHERE ID = $ID";

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
