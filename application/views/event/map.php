<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />

<style type="text/css">
html { height: 100% }
body { height: 100%; margin: 0; padding: 0 }
#map-canvas { height: 100% }
</style>
<?php var_dump($eDetail); ?>
<script type="text/javascript"
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKLBDT-joRyuz2X9-MIpGitTAKL-MFIn8&sensor=false">
		</script>
		<script type="text/javascript">

		var geocoder;
		
		
		
		function initialize() {
			//create a new 
			geocoder = new google.maps.Geocoder();
			//get addresses
			sAddressPark = "<?php echo $eDetail->parking_location; ?>";
			//decode results
			geocoder.geocode( { 'address': sAddress}, function(results, status) {
				if (status == google.maps.GeocoderStatus.OK) {
					map.setCenter(results[0].geometry.location);

					var marker = new google.maps.Marker({  map: map,  position: results[0].geometry.location });
					} else{
						
						}
				});
			
			
			var mapOptions = {
				center: new google.maps.LatLng(38.830121, -77.307258), 
				scrollwheel: false,
				zoom: 15
			};
			var map = new google.maps.Map(document.getElementById("map-canvas"),
					mapOptions);
			
			//set the parking marker
			var markerOptions = {
				position: new google.maps.GeocoderAddressComponent(38.824807, -77.306350)
			};
			var marker = new google.maps.Marker(markerOptions);
			marker.setMap(map);
			
			//set the building marker
			var markerOptions2 = {
					position: new google.maps.LatLng(38.830673, -77.304732)
			};
			var marker2 = new google.maps.Marker(markerOptions2);
			marker2.setMap(map);
			
			//set the info windows for the markers
			var infoWindowOptions = {
				content: "Parking Lot C"
			};
			var infoWindow = new google.maps.InfoWindow(infoWindowOptions);
			google.maps.event.addListener(marker, 'click', function(e){
				infoWindow.open(map, marker)
			});
			
			var infoWindowOptions2 = {
				content: "The HUB Ballroom"
			};
			var infoWindow2 = new google.maps.InfoWindow(infoWindowOptions2);
			google.maps.event.addListener(marker2, 'click', function(e){
				infoWindow2.open(map, marker2)
			}); 

			var directionsService = new google.maps.DirectionsService();
			var directionsRequest = {
			  origin: markerOptions['position'],
			  destination: markerOptions2['position'],
			  travelMode: google.maps.DirectionsTravelMode.WALKING,
			  unitSystem: google.maps.UnitSystem.METRIC
			};
			
			directionsService.route(
					  directionsRequest,
					  function(response, status)
					  {
					    if (status == google.maps.DirectionsStatus.OK)
					    {
					      new google.maps.DirectionsRenderer({
					        map: map,
					        directions: response,
					        suppressMarkers: true
					      });
					    }
					    else
					      $("#error").append("Unable to retrieve your route<br />");
					  }
					);
		}
		google.maps.event.addDomListener(window, 'load', initialize);
</script>
		
		<body>
		<div id="map-canvas"/></div>
		</body>
</html>