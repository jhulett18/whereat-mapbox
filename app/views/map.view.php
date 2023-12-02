<!doctype html>
<html lang="en" class="h-100">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="generator" content="Hugo 0.88.1">
		<title>Cover Template ? Bootstrap v5.1</title>
		<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
		
		<link rel="stylesheet" type="text/css" href="<?=ROOT?>/app/css/map.css" />

		<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		
		<style>
			/* Always set the map height explicitly to define the size of the div
			 * element that contains the map. */
			#map {
				height: 100%;
			}
			/* Optional: Makes the sample page fill the window. */
			html, body {
				height: 100%;
				margin: 0;
				padding: 0;
			}
		</style>
	
	</head>
	<body>
		<h3>My Google Maps Demo</h3>
		<!--The div element for the map -->
		<div id="map"></div>
		
		<!--
		  The `defer` attribute causes the callback to execute after the full HTML
		  document has been parsed. For non-blocking uses, avoiding race conditions,
		  and consistent behavior across browsers, consider loading using Promises
		  with https://www.npmjs.com/package/@googlemaps/js-api-loader.
		  -->
		<script>
			function initMap() {
				// The location of Uluru
				const uluru = { lat: -25.344, lng: 131.031 };
				
				/**
				 * Problem
				 * 		Call needed to grab event data
				 * Solution
				 * 		AJAX call to php file to query data
				 * @type {(string|number)[][]}
				 */
				
				$.ajax({
					url:"https://whereat.top/events/all",    //the page containing php script
					type: "get",    //request type,
					dataType: 'json',
					// data: {registration: "success", name: "xyz", email: "abc@gmail.com"},
					success:function(result){
						console.log(result);
						
						var locations = result;
						// The map, centered at Uluru
						var map = new google.maps.Map(document.getElementById('map'), {
							zoom: 10,
							center: new google.maps.LatLng(-33.92, 151.25),
							mapTypeId: google.maps.MapTypeId.ROADMAP
						});
						
						var infowindow = new google.maps.InfoWindow();
						
						var marker, i;
						
						locations.forEach(function(pin){
							console.log(pin['_id'])
							marker = new google.maps.Marker({
								position: new google.maps.LatLng(pin['lat'], pin['long']),
								map: map
							});
							
							google.maps.event.addListener(marker, 'click', (function(marker, i) {
								return function() {
									infowindow.setContent(pin['name']);
									infowindow.open(map, marker);
								}
							})(marker, i));
						})
						
					},
					
				});
			}
			
			window.initMap = initMap;
		</script>
		
		<script
			src="https://maps.googleapis.com/maps/api/js?key=<?=MAPAPI?>&callback=initMap&v=weekly"
			defer
		></script>
		
		</body>

</html>
