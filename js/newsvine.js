$(document).ready(function() {
    $('.news-vid').width($('.news-vid').parent().width());
    
    
    
    $('.nwsv-comment-box input').click(function() {
        var commentText = $(this).closest('form').find('textarea');
        
        var comments = $(this).closest('form').prev();
        var commentText = "<li class='ui-li-static ui-body-inherit ui-last-child'>" + commentText.val() + "</li>"
        
        comments.append(commentText);
        comments.find(".ui-last-child").first().removeClass("ui-last-child");
        
        commentText.val("");
    });
    
});