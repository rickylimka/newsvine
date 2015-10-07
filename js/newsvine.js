function initMaps() {
    $('.nwsv_map_latlng').each(function( index ) {
        $loc = $(this).text();
        alert($loc);
    });
}

$(document).ready(function() {
    $('.news-vid').width($('.news-vid').parent().width());
    
    initMaps();
});