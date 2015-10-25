<!DOCTYPE html>
<html>
	<head>
		<title>Feed Me - map</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="./css/home.css" type="text/css"/>
		<style type="text/css">
			html, body { height: 100%; margin: 0; padding: 0; }
			#map { height: 100%; }
		</style>
		<script>
var lat=24.786811000000004,lng=120.99716149999999;
var locations=[
<?php
//	foreach(/*id*/ as $v){
//		echo "[".$v['adress'].",".$v['content']."],";
//	}
?>
];
	
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
	var marker, i;
	for(i=0; i<location.length; ++i){
		marker = new google.maps.Marker({
				map: map,
				position: new google.maps.LatLng(locations[i][0],locations[i][1])
		});
		google.maps.event.addListener(marker, 'click', (function(marker,i){
			return function(){
				infowindow.setContent(locations[i][2]);
				infowindow.open(map,marker);
			}
		})(marker,i));
	}
	/* your location */
	var Loc = new Image(50,50);
	Loc.src = "./img/dot.png";
	marker = new google.maps.Marker({
		map: map,
		position: myLatLng,
		icon: Loc
	});
}
		</script>
	</head>
	<body style="margin:0;font-family:Microsoft JhengHei ">
	    <div id="navigation" class="no-scroll">
		    <div id="navigation-wrap">
		   		<div id="nav">
					<ul id="nav-ul">
						<li>
							<a id="buttonH" href="index.php">HOME</a>
						</li>
						<li></li>
						<li id="active">
							<a id="buttonI" href="">地圖尋找</a>
						</li>
						<li>
							<a id="buttonA" href="list.php">列表尋找</a>
						</li>
						<li>
							<a id="buttonL" href="post.php">分享美食</a>
						</li>
						<li>
							<a id="buttonG" href="comment.php">我要評價</a>
						</li>
						<li>
							<a id="buttonQ" href="">登入</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div id="map"></div>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsDRrd6d0FIq1rbOp1_Meq4xqQNM61E1g&callback=initMap"></script>
	</body>
</html>

