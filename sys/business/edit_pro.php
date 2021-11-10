<?php
include_once '../connectdb.php';
$Username = $_POST['Username'];
$Firstname = $_POST['Firstname'];
$ID = $_POST['ID'];


$sql = "UPDATE `user` SET `Username`='$Username',`Firstname`='$Firstname' WHERE ID = $ID";

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
