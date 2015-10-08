<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Map</title>
    
    <script src="js/jquery.min.js"></script>
	<script>
		function initialize() {
			var myLatlng = new google.maps.LatLng( <?php echo $_GET['long']; ?>, <?php echo $_GET['lat']; ?> );
			var myOptions = {
				zoom: 14,
				center: myLatlng,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			}
			var map = new google.maps.Map( document.getElementById( "map_canvas" ), myOptions );
            
            // Create a marker and set its position.
            var marker = new google.maps.Marker({
                map: map,
                position: myLatlng,
                title: 'Hello World!'
            });
            
            
		}
        
        
        
        $(document).ready(function() {
            initialize();
            
            $( document ).bind( "pageshow", function( event, data ){
            google.maps.event.trigger(map, 'resize');
            });
        });
	</script>
    
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
<body>

	<div id="map_canvas"></div>

</body>
    
    
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
</html>
