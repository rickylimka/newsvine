<?php
/*
variables:

$title
$id
$uploader
$rating
$tags
$location

*/
?>

<div class="newsvine-vid">
    <div class="ui-bar">
        <h3><?php echo $title; ?></h3>
    </div>
    
    <div class="ui-body">
        <video class="news-vid" width="" height="" controls>
            <source src="<?php echo "uploads/".$id.".mp4"; ?>" type="video/mp4">
        </video>
    </div>

    <div data-role="collapsible" data-inset="false" data-collapsed="false">
        <h3>details</h3>
        <ul data-role="listview">
            <li>
                Uploaded by: <?php echo $uploader; ?>
            </li>
            <li>
                Rating: <?php echo $rating; ?>
            </li>
            <li>
                Tags: <?php echo $tags; ?>
            </li>
            <li>
                <a href="#popupMap" data-transition="turn" data-rel="popup" class="ui-btn ui-icon-location ui-btn-icon-notext ui-corner-all ui-btn-inline">location</a>
                <div data-role="popup" id="popupMap" data-overlay-theme="a" data-theme="a" data-corners="false" data-tolerance="15,15">
                    <a href="#" data-rel="back" class="ui-btn ui-btn-b ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
                    <iframe src="map.html" width="480" height="320" seamless=""></iframe>
                </div>
            </li>
        </ul>
    </div>
    
    <div data-role="collapsible" data-inset="false">
        <h3>comments</h3>
        <ul data-role="listview" data-inset="false">
            <li>comment 1</li>
            <li>comment 2</li>
            <li>comment 3</li>
            <li><form>
                <textarea name="textarea-1" id="textarea-1"></textarea>
                <input type="submit" value="Post">
            </form></li>
        </ul>
    </div>
</div>