
<!-- Add custom CSS here -->
<link href="/assets/css/sb-admin.css" rel="stylesheet">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<!-- Page Specific CSS -->
<link rel="stylesheet"
	href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
<link rel="stylesheet" 
	href="/assets/css/event.css">
	
<!-- countdown -->
<script src="/assets/js/countdown.js"></script>

<body>

	<div class="row-fluid">
		<span class="col-lg-12">
			<h1 class = "event-heading"><?php echo $eDetail->event_name; ?></h1>
		</span>
	</div>
	<div class = "row-fluid">
		<span align = "center" class="col-lg-12">
			<button type="button" class="btn btn-primary btn-lg">Register!</button>
		</span>
	</div> 
	<br><br>
	<div class = "row-fluid">
		<div class = "col-lg-12 event-where">
			<h1 class = "event-heading">WHERE</h1>
			<div class = "row-fluid">
				<p class = "event-text"><?php echo $eDetail->location; ?></p>
				<p class = "event-text">Building: <?php echo $eDetail->address; ?></p>
				<p class = "event-text">Parking: <?php echo $eDetail->parking_location; ?></p>
			</div>
			<div class = "col-lg-12-offset-1" style="height: 90%; width: 100%">
				<iframe width="100%" height="75%" src = "/dash/loadMap"></iframe>
			</div>
		</div>
		
	</div>
	
	<div class = "row-fluid">
		<div class = "col-lg-12 event-when">
			<h1 class = "event-heading">WHEN</h1>
			<p class = "event-date-text"><?php echo date("l, F jS, Y",strtotime($eDetail->start_time)); ?></p>
			<p class = "event-date-text">at <?php echo date("h:iA",strtotime($eDetail->start_time)); ?></p>
			<div align = "center" class = "col-lg-12">		
				<script>
					var timeToCD = <?php echo json_encode((strtotime($eDetail->start_time)) - time()); ?>;
					var myCountdown1 = new Countdown({time:timeToCD});
				</script>
			</div>
		</div>
	</div>
	
	
	<div class = "row-fluid">
		<div class = "col-lg-12 event-what">
			 <h1 class = "event-heading">WHAT</h1>
			<div class = "row-fluid">
					<div class = "col-lg-2"></div>
				 <div class = "col-lg-8">
				 	<p class = "event-text"><?php echo $eDetail->event_description; ?></p>
				 </div>
				 <div class = "col-lg-2"></div>
			</div>
		</div>
	</div> <!--  includes wireless info and other misc info -->
	
</body>
