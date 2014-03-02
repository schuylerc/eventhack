<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<title>Dashboard - SB Admin</title>

<!-- Bootstrap core CSS -->
<link href="/assets/css/bootstrap.css" rel="stylesheet">

<!-- Add custom CSS here -->
<link href="/assets/css/sb-admin.css" rel="stylesheet">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<!-- Page Specific CSS -->
<link rel="stylesheet"
	href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
<link rel="stylesheet" 
	href="/assets/css/event.css">
	
</head>
<body>

	<div class="row-fluid">
		<span class="col-lg-12">
			<h1><?php echo $eDetail->event_name; ?></h1>
		</span>
	</div>
	<div class = "row-fluid">
		<span class="col-lg-12">
			<button type="button" class="btn btn-primary btn-lg">Register!</button>
		</span>
	</div> 
	
	<div class = "row-fluid">
		<div class = "col-lg-12 event-what">
		 <h2 id = "event-heading">What:</h2>
		 <p class = "event-text"><?php echo $eDetail->event_description; ?></p>
		</div>
	</div> <!--  includes wireless info and other misc info -->
	
	<div class = "row-fluid">
		<div class = "col-lg-12 event-where">
			<h2 id = "event-heading">Where:</h2>
			<div class = "row-fluid">
				<p class = "event-text"><?php echo $eDetail->location; ?></p>
				<p class = "event-text">Building: {The Hub Ballroom}</p>
				<p class = "event-text">Parking: {Lot C}</p>
			</div>
			<span class = "col-lg-1"></span>
			<div class = "row-fluid">
					<span class = "col-lg-10">
						<iframe width="100%" height="75%" src = "/dash/loadMap"></iframe>
					</span>
			</div>
			<span class = "col-lg-1"></span>
		</div>
		
	</div> <!-- includes parking info, campus map(google map api), floor plans -->
	
	<div class = "row-fuild">
		<div class = "col-lg-12 event-when">
			<h2 id = "event-heading">When:</h2>
			<p class = "event-date-text"><?php echo date("l, F jS, Y",strtotime($eDetail->start_time)); ?></p>
			<p class = "event-date-text">at <?php echo date("h:iA",strtotime($eDetail->start_time)); ?></p>
		</div>
		
	</div>
	
	<div class = "row-fluid">
		<div class = "col-lg-12 event-additional-info">
			<h2 id = "event-heading">Additional Information:</h2>

		</div>
	</div> <!--  some secondary information -->
	
</body>
</html>