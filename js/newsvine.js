function initMaps() {
    $('.nwsv_map_canvas').each(function( index ) {
        $loc = $(this).closest('.nwsv_map_latlng').text().split(" ");
        alert($loc[0]);
    });
}

$(document).ready(function() {
    $('.news-vid').width($('.news-vid').parent().width());
    
    initMaps();
});