function initMaps() {
    $('.nwsv_map_latlng').each(function( index ) {
        $loc = $(this).text().split(" ");
        alert($loc[0]);
    });
}

$(document).ready(function() {
    $('.news-vid').width($('.news-vid').parent().width());
    
    initMaps();
});