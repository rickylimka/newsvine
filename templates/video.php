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


$location = explode(" ", $location);

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
            <li data-icon="false">
                <a href="#<?php echo $id;?>_popup_map" data-transition="slideup" data-rel="popup" class="nwsv_map_latlng">
                    <input type="button" data-icon="location" data-iconpos="top" value="Location">
                </a>
                <div data-role="popup" class="popupMap" id="<?php echo $id;?>_popup_map" data-overlay-theme="a" data-theme="a" data-corners="false" data-tolerance="15,15">
                    <a href="#" data-rel="back" class="ui-btn ui-btn-b ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">Close</a>
                    
                    
                    
                    <iframe src="<?php echo 'map.php?id='.urlencode($id).'&long='.$location[0].'&lat='.$location[1]; ?>" width="480" height="320" seamless=""></iframe>
                </div>
            </li>
        </ul>
    </div>
    
    <div data-role="collapsible" data-inset="false">
        <h3>comments</h3>
        <ul class="nwsv-comments" data-role="listview" data-inset="false">
            <li><span class="bold">user1 </span>comment 1</li>
            <li><span class="bold">user2 </span>comment 2</li>
            <li><span class="bold">user3 </span>comment 3</li>
        </ul>
        <form class="nwsv-comment-box">
            <textarea name="textarea-1" id="textarea-1" placeholder="Comment..."></textarea>
            <input type="button" value="Post">
        </form>
    </div>
</div>