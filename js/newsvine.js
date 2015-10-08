$(document).ready(function() {
    $('.news-vid').width($('.news-vid').parent().width());
    
    
    
    $('.nwsv-comment-box input').click(function() {
        
        alert($(this).closest('form').prev().attr('class'));
    });
    
});