$(document).ready(function() {
    $('.news-vid').width($('.news-vid').parent().width());
    
    
    
    $('.nwsv-comment-box input').click(function() {
        $(this).closest('form').prev().append("<li>nanannananna</li>");
    });
    
});