<?php
include_once 'connectdb.php';
$Username = $_POST['Username'];
$Pass = $_POST['Password'];
$Firstname = $_POST['Firstname'];
$Userlevel = $_POST['Userlevel'];
$Password=md5($Pass);
echo $Username ;
echo $Password;
echo $Firstname ;
echo $Userlevel ;
$sql = "INSERT INTO `user`(`Username`, `Password`, `Firstname`, `Userlevel`) 
VALUES ('$Username','$Password','$Firstname','$Userlevel')";

if (mysqli_query($con, $sql)) {
    echo "<script type='text/javascript'>";
	echo "alert('สมัครสำเร็จ โปรดเข้าสู่ระบบ');";
	echo "window.location = 'index.php'; ";
	echo "</script>";
  
} else {
    echo "<script type='text/javascript'>";
	echo "alert('สมัครไม่สำเร็จ');";
	echo "window.location = 'index.php'; ";
	echo "</script>";
    
}

mysqli_close($con);
 ?>