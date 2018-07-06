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
$EMAILID = $_POST['textfield'];
$MOBILENUMBER = $_POST['textfield2'];
$PASSWORD = $_POST['textfield3'];


$sql = mysqli_query($conn,"insert into cab(EMAILID,MOBILENUMBER,PASSWORD) values('$EMAILID','$Password')");
if($sql)
{
echo "Saved Successfully";
}
else
{
echo "Error!";
}
?>
