$(document).ready(function() {
    $('.news-vid').width($('.news-vid').parent().width());
    
    
    
    $('.nwsv-comment-box input').click(function() {
        var commentText = $(this).closest('form').find('textarea');
        
        var comments = $(this).closest('form').prev();
        var html = "<li class='ui-li-static ui-body-inherit ui-last-child'><span class='bold'>demo_user </span>" + commentText.val() + "</li>";
        
        comments.append(html);
        comments.find(".ui-last-child").first().removeClass("ui-last-child");
        
        commentText.val("");
    });
    
});