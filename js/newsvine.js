$(document).ready(function() {
    $('.news-vid').width($('.news-vid').parent().width());
    
    
    
    $('.nwsv-comment-box input').click(function() {
        var comment-box = $(this).closest('form');
        
        var comments = comment-box.prev();
        
        var html = "<li class='ui-li-static ui-body-inherit ui-last-child'>" + "hahhaha" + "</li>";
        comments.append(html);
        comments.find(".ui-last-child").first().removeClass("ui-last-child");
        
        comment-box.text("");
    });
    
});