<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bus_booking";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
}
else
{
die("Connection failed:".mysqli_connect_error());
}
$User = $_POST['user'];
$Password = $_POST['pass'];


$sql = mysqli_query($conn,"insert into login(User,Password) values('$User','$Password')");
if($sql)
{
echo "login Successfully";
}
else
{
echo "Error!";
}
?>
