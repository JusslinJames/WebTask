

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calender</title>
	<link rel="stylesheet" type="text/css" href="Calendar.css">		
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>


<div class="container c">

	<div class="row">

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
		
		<div class="btnclass text-center">
			<a href="index.html" class="btn btn-success mb-3 mx-3" role="button">Create Event</a>
		<!-- <a href="DisplayEvent.php" class="btn btn-success mb-3" role="button">View / Delete Event</a> -->
		</div>  

	</div>



		<!-- Display Event block -->
		<div class="bx" style="height:auto; width:auto; border:1px solid black; padding:0;">
		<div class="content">

		<table class="table table-striped">
		<thead>
			<tr style="background-color:black; color:white; text-align:center;">
			<th scope="col">Sr. No.	</th>
			<th scope="col">Event Date</th>
			<th scope="col">Event Title</th>
			<th scope="col">Delete</th>
			</tr>
		</thead>
		<tbody id="res">
		<p></p>

		</tbody>
		</table>

		</div>
		</div>
		<!-- Display Event block ends -->

	</div>
</div>  
















	</body>
	<script type="text/javascript" src="Calendar.js"></script>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	


</html>