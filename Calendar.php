

<!DOCTYPE html>
<html>
<head>
	<title>Calender</title>
	<link rel="stylesheet" type="text/css" href="Calendar.css">	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

    
<div class="container">

	<div class="btnclass">
			<a href="index.html" class="btn btn-success mb-3 mx-3" role="button">Create Event</a>
		<!-- <a href="DisplayEvent.php" class="btn btn-success mb-3" role="button">View / Delete Event</a> -->
	</div>

	<div class="calender">
		<div class="months">
			<i class="fa fa-arrow-left previous" aria-hidden="true" id="prev"></i>
			<div class="date">
				<h1></h1>
				<p></p>
			</div>
			<i class="fa fa-arrow-right next" aria-hidden="true" id="next"></i>
		</div>






		<div class="weeks">
			<div>Sun</div>
			<div>Mon</div>
			<div>Tue</div>
			<div>Wed</div>
			<div>Thu</div>
			<div>Fri</div>
			<div>Sat</div>
		</div>




		<div class="days">
			


		</div>
		
	</div>

    
</div>  




<div class="content">

<table class="table table-striped">
  <thead>
    <tr class="bg-dark text-white">
      <th scope="col">Sr.</th>
      <!-- <th scope="col">Id</th> -->
      <th scope="col">Event Date</th>
      <th scope="col">Event Title</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody id="res">


  </tbody>
</table>

</div>





<script type="text/javascript" src="Calendar.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>


</html>