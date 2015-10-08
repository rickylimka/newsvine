<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Map</title>
	<!--<script>
		function initialize() {
			var myLatlng = new google.maps.LatLng( <?php echo $_GET['long'] ?>, <?php echo $_GET['lat'] ?> );
			var myOptions = {
				zoom: 15,
				center: myLatlng,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			}
			var map = new google.maps.Map( document.getElementById( "<?php echo $_GET['id'].'_map_canvas'?>" ), myOptions );
            
            // Create a marker and set its position.
            var marker = new google.maps.Marker({
                map: map,
                position: myLatlng,
                title: 'Hello World!'
            });
		}
	</script>-->
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<style>
		html {
			height: 100%;
			overflow: hidden;
		}
		body {
			margin: 0;
			padding: 0;
			height: 100%;
		}
		#map_canvas {
			height: 100%;
		}
	</style>
</head>
<body onload="initialize()">

	<div class="nwsv_map_canvas" id="<?php echo $_GET['id'].'_map_canvas'?>"><?php echo $_GET['long'] ?> <?php echo $_GET['lat']</div>

</body>
</html>
