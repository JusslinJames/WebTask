<?php

$year=$_REQUEST['y'];
$month=$_REQUEST['m'];

$yearnum=(int)$year;
$monthnum=(int)$month;


$servername="localhost";
$username="root";
$password="";
$dbname = "calendar";
$conn = mysqli_connect($servername, $username, $password, $dbname);

$srno=0;

$sql = "select * from event where YEAR(eventDate)=".$yearnum." AND MONTH(eventDate)=".$monthnum;

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
      <td> <button class="btn-danger btn">  <a href="delete.php?eventId=<?php echo $res['eventId']; ?>" class="text-white" style="color:white;">Delete</a></button> </td>
    </tr>

<?php
}
?>