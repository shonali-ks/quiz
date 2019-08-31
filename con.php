<?php
//root is the username and users is the name of the database
$con=mysqli_connect("localhost","root",your_password,"users");
if($con==false)
{
die("error in connection".mysqli_connect_error());
}
else echo "success";
?>
