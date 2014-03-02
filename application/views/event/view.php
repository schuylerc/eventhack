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
	
<!-- Javascript here -->

</head>
<body>

	<div class="row-fluid">
		<span class="col-lg-12">
			<h1>{Event Name}</h1>
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
		</div>
	</div> <!--  includes wireless info and other misc info -->
	
	<div class = "row-fluid">
		<div class = "col-lg-12 event-where">
			<h2 id = "event-heading">Where:</h2>
			<div class = "row-fluid">
				<p class = "event-text">{1234 Street Drive, Fairfax, VA 20042}</p>
				<p class = "event-text">Building: {Engineering Building 4021}</p>
				<p class = "event-text">Parking: {Lot K}</p>
			</div>
			<div class = "row-fluid">
					<span class = "col-lg-12">
						<iframe width="100%" height="75%" src = "/dash/loadMap"></iframe>
					</span>
			</div>
		</div>
		
	</div> <!-- includes parking info, campus map(google map api), floor plans -->
	
	<div class = "row-fuild">
		<div class = "col-lg-12 event-when">
			<h2 id = "event-heading">When:</h2>
		</div>
		<div>

		</div>
	</div> <!-- include countdown timer,  -->
	
	<div class = "row-fluid">
		<div class = "col-lg-12 event-additional-info">
			<h2 id = "event-heading">Additional Information:</h2>
		</div>
	</div> <!--  some secondary information -->
	
	
	
	
	

</body>
</html>