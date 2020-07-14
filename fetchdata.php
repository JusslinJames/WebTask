<?php

 $year=$_REQUEST['y'];
 $month=$_REQUEST['m'];
 
 $yearnum=(int)$year;
 $monthnum=(int)$month;

// echo $yearnum;
// echo $monthnum;

$servername="localhost";
$username="root";
$password="";
$dbname = "calendar";
$conn = mysqli_connect($servername, $username, $password, $dbname);



$sql = "select DAY(eventDate) from event where YEAR(eventDate)=2020 AND MONTH(eventDate)=7";  

// $sql = "select DAY(eventDate) from event where YEAR(eventDate)="+$yearnum+" AND MONTH(eventDate)="+$monthnum;




    $query = mysqli_query($conn, $sql);
    $Dayfromdb=array();
      $i=0;     
      while ($result = mysqli_fetch_array($query))
      {
        
        $Dayfromdb[]=$result;
        
        // $Dayfromdb = join(',', $result);
        // // $Dayfromdb = implode(",", $result);
        
      }  
    
      // print_r($Dayfromdb);  


   
    
      for($p=0;$p<count($Dayfromdb);$p++)
      { 
        
        echo $Dayfromdb[$p][0];
        echo " ";
        
      }

     


?>