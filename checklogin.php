<?php include "connect.php"?>
<?php 
$sqli = "SELECT * FROM `user` WHERE user_name = '".$_POST["user_name"]."' AND user_password = '".$_POST["password"]."'";
$result = mysqli_query($conn,$sqli);
$row = mysqli_fetch_array($result);
if ($row)
{
    if ($row ["user_status"]== "admin")
    {
        header("location:admin.php");
        exit(0);
        $_SESSION['user']=$row["user_id"];
    }
    else
    {
        header("location:home.php");
        exit(0);
        $_SESSION['user']=$row["user_id"];
    }
}
else
{
    echo("user not found");
}
?>