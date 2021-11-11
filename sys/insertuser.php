<?php
include_once 'connectdb.php';
$Username = $_POST['Username'];
$Pass = $_POST['Password'];
$Firstname = $_POST['Firstname'];
$date = $_POST['date'];
$phone = $_POST['phone'];
$education = $_POST['education'];
$Firstname = $_POST['Firstname'];
$group = $_POST['group'];
$lavel = $_POST['lavel'];
$qualification = $_POST['qualification'];
$faculty = $_POST['faculty'];

$Password=md5($Pass);

$sql = "INSERT INTO `user`(`Username`, `Password`, `Firstname`, `Userlevel`, `date`, `phone`, 
`education`, `group`, `lavel`, `qualification`, `faculty`) 
VALUES ('$Username','$Password','$Firstname','M','$date','$phone'
,'$education','$group','$lavel','$qualification','$faculty')";

if (mysqli_query($con, $sql)) {
    echo "<script type='text/javascript'>";
	echo "alert('สมัครสำเร็จ โปรดเข้าสู่ระบบ');";
	echo "window.location = 'index.php'; ";
	echo "</script>";
  
} else {
   echo $sql;
	// echo "<script type='text/javascript'>";
	// echo "alert('สมัครไม่สำเร็จ');";
	// echo "window.location = 'index.php'; ";
	// echo "</script>";
    
}

mysqli_close($con);
 ?>