<!DOCTYPE html>
<html>
	<head>
		<title>Feed Me - map</title>
		<style type="text/css">
			html, body { height: 100%; margin: 0; padding: 0; }
			#map { height: 100%; }
		</style>
		<script>
var lat=24.786811000000004,lng=120.99716149999999;
	
function showPosition(position){
	lat = position.coords.latitude;
	lng = position.coords.longitude;
	console.log(lat+","+lng);
}

function initMap() {
	if(navigator.geolocation) 
		myLatLng = navigator.geolocation.getCurrentPosition(showPosition);
	else
		console.log("nope");
	var myLatLng = {lat:lat,lng:lng};
		
	// Create a map object and specify the DOM element for display.
	var map = new google.maps.Map(document.getElementById('map'), {
				center: myLatLng,
//				scrollwheel: false,
				zoom: 15
	});

	// Create a marker and set its position.
	var marker = new google.maps.Marker({
				map: map,
				position: myLatLng,
				title: 'Hello World!'
	});
}
		</script>
	</head>
	<body style="margin:0">
		<div id="map"></div>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsDRrd6d0FIq1rbOp1_Meq4xqQNM61E1g&callback=initMap"></script>
	</body>
</html>

