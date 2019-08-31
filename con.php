<?php
$con=mysqli_connect("localhost","root","Shons@123","users");
if($con==false)
{
die("error in connection".mysqli_connect_error());
}
else echo "success";
?>
