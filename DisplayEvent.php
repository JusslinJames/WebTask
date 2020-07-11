
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Events</title>
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
   
<div class="container">

<h1 class="text-center my-5">Records Of Events</h1><br><br>
<a href="index.html" class="btn btn-success mb-3" role="button">Create Event</a>
<a href="Calendar.php" class="btn btn-success mb-3" role="button">Display Calendar</a>
<table class="table text-center table-striped">
  <thead>
    <tr class="bg-dark text-white">
      <th scope="col">Sr.</th>
      <!-- <th scope="col">Id</th> -->
      <th scope="col">Event Date</th>
      <th scope="col">Event Title</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>






  <?php

$servername="localhost";
$username="root";
$password="";
$dbname = "calendar";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// else{
//     echo "Connected successfully";
// }

$srno=0;
$sql="select * from event";
$query=mysqli_query($conn,$sql);
while($res= mysqli_fetch_array($query))
{
    $srno=$srno+1;
?>






    <tr>
      <th> <?php echo $srno ?> </th>
      <!-- <th> <?php echo $res['eventId']; ?> </th> -->
      <td> <?php echo $res['eventDate']; ?> </td>
      <td> <?php echo $res['eventTitle']; ?> </td>
      <td> <button class="btn-danger btn">  <a href="delete.php?eventId=<?php echo $res['eventId']; ?>" class="text-white">Delete</a></button> </td>
    </tr>

<?php
}
?>




  </tbody>
</table>

</div>
















<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>