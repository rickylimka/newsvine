<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/themes/default/jquery.mobile-1.4.5.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.mobile-1.4.5.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    
    <link rel="stylesheet" href="css/newsvine.css">
    <script src="js/popup-iframe-map.js" id="map-script"></script>
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
                <li><a href="#notifications" data-icon="info"></a></li>
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
                <li><a href="#notifications" data-icon="info"></a></li>
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
    </div>

    <div data-role="footer" data-position="fixed">
        <div data-role="navbar">
            <ul>
                <li><a href="#feed" data-icon="home"></a></li>
                <li><a href="#search" data-icon="search"></a></li>
                <li><a href="#upload" data-icon="plus" class="ui-btn-active ui-state-persist"></a></li>
                <li><a href="#notifications" data-icon="info"></a></li>
            </ul>
        </div> <!-- footer -->
    </div> <!-- navbar -->
</div> <!-- feed -->

<div data-role="page" id="notifications">
    <div data-role="header" data-position="fixed">
        <h1>NewsVine</h1>
    </div>

    <div data-role="main" class="ui-content">
        <p>notifications page</p>
    </div>

    <div data-role="footer" data-position="fixed">
        <div data-role="navbar">
            <ul>
                <li><a href="#feed" data-icon="home"></a></li>
                <li><a href="#search" data-icon="search"></a></li>
                <li><a href="#upload" data-icon="plus"></a></li>
                <li><a href="#notifications" data-icon="info" class="ui-btn-active ui-state-persist"></a></li>
            </ul>
        </div> <!-- footer -->
    </div> <!-- navbar -->
</div> <!-- feed -->

</body>
</html>