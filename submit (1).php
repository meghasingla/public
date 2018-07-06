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
$Username = $_POST['username'];
$Password = $_POST['pwd'];
$Surname = $_POST['surname'];
$Date_of_Birth = $_POST['dob'];
$Email = $_POST['email'];
$Telephone = $_POST['tel'];
$Address = $_POST['add'];
$Post_Code = $_POST['ptc'];

$sql = mysqli_query($conn,"insert into registration(username,password,surname,dateofbirth,email,telephone,address,postcode) values('$Username','$Password','$Surname','$Date_of_Birth','$Email','$Telephone','$Address','$Post_Code')");
if($sql)
{
echo "Saved Successfully";
}
else
{
echo "Error!";
}
?>
