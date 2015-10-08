<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/themes/default/jquery.mobile-1.4.5.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.mobile-1.4.5.min.js"></script>
    
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="js/popup-iframe-map.js" id="map-script"></script>
    
    <link rel="stylesheet" href="css/newsvine.css">
    <script src="js/newsvine.js"></script>
</head>
    
<body>

<div data-role="page" id="feed">
    <div data-role="header" data-position="fixed">
        <h1>NewsVine</h1>
    </div>

    <div data-role="main" class="ui-content">
        <?php
        
        $videos = json_decode(file_get_contents('db/videos.json'), true);

        foreach ($videos as $vid) {
            #parameters
            $title = $vid["title"];
            $id = $vid["id"];
            $uploader = $vid["uploader"];
            $rating = $vid["rating"];
            $tags = $vid["tags"];
            $location = $vid["location"];
            
            include('templates/video.php');
        }

        ?>
        
        
        
        
        
        
        
        
    </div> <!-- .ui-content -->

    <div data-role="footer" data-position="fixed">
        <div data-role="navbar">
            <ul>
                <li><a href="#feed" data-icon="home" class="ui-btn-active ui-state-persist"></a></li>
                <li><a href="#search" data-icon="search"></a></li>
                <li><a href="#upload" data-icon="plus"></a></li>
                <li><a href="#map-page" data-icon="info"></a></li>
            </ul>
        </div> <!-- footer -->
    </div> <!-- navbar -->
</div> <!-- feed -->

<div data-role="page" id="search">
    <div data-role="header" data-position="fixed">
        <h1>NewsVine</h1>
    </div>

    <div data-role="main" class="ui-content">
        <input id="filterBasic-input" data-type="search">
        
    </div>

    <div data-role="footer" data-position="fixed">
        <div data-role="navbar">
            <ul>
                <li><a href="#feed" data-icon="home"></a></li>
                <li><a href="#search" data-icon="search" class="ui-btn-active ui-state-persist"></a></li>
                <li><a href="#upload" data-icon="plus"></a></li>
                <li><a href="#map-page" data-icon="info"></a></li>
            </ul>
        </div> <!-- footer -->
    </div> <!-- navbar -->
</div> <!-- feed -->

<div data-role="page" id="upload">
    <div data-role="header" data-position="fixed">
        <h1>NewsVine</h1>
    </div>

    <div data-role="main" class="ui-content">
        <input type="file" name="file" id="file" value="">
        <input type="submit" value="Upload">
    </div>

    <div data-role="footer" data-position="fixed">
        <div data-role="navbar">
            <ul>
                <li><a href="#feed" data-icon="home"></a></li>
                <li><a href="#search" data-icon="search"></a></li>
                <li><a href="#upload" data-icon="plus" class="ui-btn-active ui-state-persist"></a></li>
                <li><a href="#map-page" data-icon="info"></a></li>
            </ul>
        </div> <!-- footer -->
    </div> <!-- navbar -->
</div> <!-- feed -->
    
<div data-role="page" id="map-page" data-url="map-page">
    <script>
        $( document ).on( "pageinit", "#map-page", function() {
            var defaultLatLng = new google.maps.LatLng(34.0983425, -118.3267434);  // Default to Hollywood, CA when no geolocation support
            if ( navigator.geolocation ) {
                function success(pos) {
                    // Location found, show map with these coordinates
                    drawMap(new google.maps.LatLng(pos.coords.latitude, pos.coords.longitude));
                }
                function fail(error) {
                    drawMap(defaultLatLng);  // Failed to find location, show default map
                }
                // Find the users current position.  Cache the location for 5 minutes, timeout after 6 seconds
                navigator.geolocation.getCurrentPosition(success, fail, {maximumAge: 500000, enableHighAccuracy:true, timeout: 6000});
            } else {
                drawMap(defaultLatLng);  // No geolocation support, show default map
            }
            function drawMap(latlng) {
                var myOptions = {
                    zoom: 10,
                    center: latlng,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);
                // Add an overlay to the map of current lat/lng
                
                
                
                <?php
                foreach ($videos as $vid) {
                    #parameters
                    $title = $vid["title"];
                    $id = $vid["id"];
                    $uploader = $vid["uploader"];
                    $rating = $vid["rating"];
                    $tags = $vid["tags"];
                    $location = $vid["location"];
                    $location = explode(" ", $location);

                    echo "var " . $vid['id'] . "_latlng = new google.maps.LatLng(" . $location[0] . "," . $location[1] . ");"
                    . "var marker_" . $vid['id'] . " = new google.maps.Marker({"
                    . "    position: " . $vid['id'] . "_latlng,"
                    . "    map: map,"
                    . "    title: '" . $vid['title'] . "'"
                    . "});";
                }
                
                
                ?>
                
                
                
                var marker = new google.maps.Marker({
                    position: latlng,
                    map: map,
                    title: "your pos!",
                    icon: "http://maps.google.com/mapfiles/ms/icons/green-dot.png"
                });
            }
        });
    </script>
    
    <div data-role="header" data-position="fixed">
        <h1>NewsVine</h1>
    </div>
    <div role="main" class="ui-content" id="map-canvas">
        <!-- map loads here... -->
    </div>

    <div data-role="footer" data-position="fixed">
        <div data-role="navbar">
            <ul>
                <li><a href="#feed" data-icon="home"></a></li>
                <li><a href="#search" data-icon="search"></a></li>
                <li><a href="#upload" data-icon="plus"></a></li>
                <li><a href="#map-page" data-icon="info" class="ui-btn-active ui-state-persist"></a></li>
            </ul>
        </div> <!-- footer -->
    </div> <!-- navbar -->
</div> <!-- feed -->

</body>
</html>