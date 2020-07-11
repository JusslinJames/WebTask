<?php


$servername="localhost";
$username="root";
$password="";
$dbname = "calendar";
$conn = mysqli_connect($servername, $username, $password, $dbname);

$id=$_GET['eventId'];

$sql= " DELETE FROM event WHERE eventId = $id ";
mysqli_query($conn,$sql);
header('location:DisplayEvent.php');

?>