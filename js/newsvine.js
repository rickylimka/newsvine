$(document).ready(function() {
    $('.news-vid').width($('.news-vid').parent().width());
    
    
    
    $('.nwsv-comment-box input').click(function() {
        var commentText = $(this).closest('form').find('textarea');
        alert(commentText.val());
        
        var comments = $(this).closest('form').prev();
        comments.append("<li class='ui-li-static ui-body-inherit ui-last-child'>nanannananna</li>");
        comments.find(".ui-last-child").first().removeClass("ui-last-child");
    });
    
});