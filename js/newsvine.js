$(document).ready(function() {
    $('.news-vid').width($('.news-vid').parent().width());
    
    
    
    $('.nwsv-comment-box input').click(function() {
        var comment-box = $(this).closest('form').find('textarea');
        var comment-text = comment-box.text();
        
        var comments = $(this).closest('form').prev();
        comments.append("<li class='ui-li-static ui-body-inherit ui-last-child'>" + comment-text + "</li>");
        comments.find(".ui-last-child").first().removeClass("ui-last-child");
        
        comment-box.text("");
    });
    
});