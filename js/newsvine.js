function initMaps() {
    alert($(".nwsv_map_canvas").html());
    
    
    
    /*
    var myLatlng = new google.maps.LatLng( <?php echo $_GET['long'] ?>, <?php echo $_GET['lat'] ?> );
    var myOptions = {
        zoom: 15,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map( document.getElementById( "<?php echo $_GET['id'].'_map_canvas'?>" ), myOptions );
    */
    // Create a marker and set its position.
    /*var marker = new google.maps.Marker({
        map: map,
        position: myLatlng,
        title: 'Hello World!'
    });*/
}

$(document).ready(function() {
    $('.news-vid').width($('.news-vid').parent().width());
    
    $("iframe").ready(function() {
        initMaps();
    });
});