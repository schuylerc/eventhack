<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />

<style type="text/css">
html { height: 100% }
body { height: 100%; margin: 0; padding: 0 }
#map-canvas { height: 100% }
</style>

<script type="text/javascript"
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKLBDT-joRyuz2X9-MIpGitTAKL-MFIn8&sensor=false">
		</script>
		<script type="text/javascript">
		function initialize() {
			var mapOptions = {
				center: new google.maps.LatLng(38.8301113, -77.3127034), 
				zoom: 15
			};
			var map = new google.maps.Map(document.getElementById("map-canvas"),
					mapOptions);
		}
		google.maps.event.addDomListener(window, 'load', initialize);
		</script>
		</head>
		<body>
		<div id="map-canvas"/>
		</body>
</html>