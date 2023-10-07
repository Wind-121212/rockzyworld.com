<?php include "connect.php";?>
<?php
$sql = "INSERT INTO `rock`(`rock_name`, `rock_type`, `rock_location`, `more_info`, `rock_img`) 
VALUES ('".$_POST["rock_name"]."','".$_POST["rock_type"]."','".$_POST["rock_location"]."','".$_POST["more_info"]."'
,'".$_POST["rock_img"]."')";
$row = mysqli_query($conn,$sql);
if ($row)
{
echo "<script> alert('เพิ่มข้อมูลสำเร็จ');window.location='home.php';</script>";
}
else
{
echo "<script> alert('เพิ่มข้อมูลไม่สำเร็จ');window.location='rockzy.php';</script>";
}
?>