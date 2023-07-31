function close_show_down_to_up(close, show, duration){
    $(close).animate({marginTop: "+=100px", opacity: '0'}, duration).promise().done(function(){
        $(this).css('margin-top', 0)
        $(this).hide()
        $(this).css('opacity', 1)

        $(show).css('margin-top', 100)
        $(show).css('opacity', 0)
        $(show).show();

        $(show).animate({marginTop: "-=100px", opacity: '1'}, duration)

    })
}

function close_show_right_to_left(close, show, duration){
    $(close).animate({marginLeft: "+=200px", opacity: '0'}, duration).promise().done(function(){
        $(this).css('margin-left', -200)
        $(this).hide()
        $(this).css('opacity', 1)

        $(show).css('margin-left', -200)
        $(show).css('opacity', 0)
        $(show).show();

        $(show).animate({marginLeft: "0px", opacity: '1'}, duration)

    })
}