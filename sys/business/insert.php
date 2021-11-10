

<?php
include_once '../connectdb.php';
$position = $_POST['position'];
$property = $_POST['property'];
$ed_qual = $_POST['ed_qual'];
$age = $_POST['age'];
$estab = $_POST['estab'];
$time = date("h:i:sa");
$datenow = date("Y/m/d");
$sql = "INSERT INTO `work`( `position`, `age`, `ed_qual`, `estab`, `property`, `date`, `time`, `status`)  
VALUES ('$position','$age','$ed_qual','$estab','$property','$datenow','$time','1')";

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
