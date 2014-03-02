
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
		 <h2 class = "event-heading">What:</h2>
		 <p class = "event-text"><?php echo $eDetail->event_description; ?></p>
		</div>
	</div> <!--  includes wireless info and other misc info -->
	
	<div class = "row-fluid">
		<div class = "col-lg-12 event-where">
			<h2 class = "event-heading">Where:</h2>
			<div class = "row-fluid">
				<p class = "event-text"><?php echo $eDetail->address; ?></p>
				<p class = "event-text">Building: <?php echo $eDetail->location; ?></p>
				<p class = "event-text">Parking: <?php echo $eDetail->parking_location; ?></p>
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
	
	<div class = "row-fluid">
		<div class = "col-lg-12 event-when">
			<h2 class = "event-heading">When:</h2>
			<p class = "event-date-text"><?php echo date("l, F jS, Y",strtotime($eDetail->start_time)); ?></p>
			<p class = "event-date-text">at <?php echo date("h:iA",strtotime($eDetail->start_time)); ?></p>
			<div align = "center" class = "col-lg-12">		
				<script>
					var myCountdown1 = new Countdown({time:316});
				</script>
			</div>
		</div>
	</div>
	
	<div class = "row-fluid">
		<div class = "col-lg-12 event-additional-info">
			<h2 class = "event-heading">Additional Information:</h2>

		</div>
	</div> <!--  some secondary information -->
	
</body>