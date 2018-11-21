	<!DOCTYPE html>
	<html>
	<title>Ubicacion</title>
	<head>
			<style>
	#map{
		height: 760px;
		width: 100%;
	}

	</style>
	</head>
	<body>
	
<br>
	<center><div id="map"></div></center>
<script>
	function initMap(){
		var uluru={lat:-22.0489293, lng:-63.6809603};
		var map=new google.maps.Map(document.getElementById('map'),
			{zoom:9, center:uluru});
		var marker =new google.maps.Marker({position:uluru, map:map});
	}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBS5F-k0NnqvZTNStpYa9cC-iPzLOstfzM&callback=initMap"
  type="text/javascript"></script>
	

	</body>
	</html>