<?php include "connect.php";?>
<?php
$sql = "INSERT INTO `user`(`user_name`, `user_password`, `user_status`) VALUES ('".$_POST["user_name"]."','".$_POST["password"]."','user')";
$row = mysqli_query($conn,$sql);
if ($row)
{
echo "<script> alert('เพิ่มข้อมูลสำเร็จ');window.location='index.php';</script>";
}
else
{
echo "<script> alert('เพิ่มข้อมูลไม่สำเร็จ');window.location='sign_in.php';</script>";
}
?>