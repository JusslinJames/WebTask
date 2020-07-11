<?php

$servername="localhost";
$username="root";
$password="";
$dbname = "calendar";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";



if(isset($_POST['submit']))
{	 
	 
	 $eventTitle = $_POST['eventTitle'];
	 $eventDate = $_POST['eventDate'];
	 
	 $sql = "INSERT INTO event (eventTitle,eventDate) 
     VALUES ('$eventTitle','$eventDate')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
		header("Location: index.html"); 

	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>