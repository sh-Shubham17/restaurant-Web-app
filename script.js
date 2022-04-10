
//home screen black screen opacity
$(window).scroll(function() {
    $('.blackscreen').css({
    opacity: function() {
        var opacity = 0.1+ $(window).scrollTop() / 1000;
        if (opacity < 0.75){
            return opacity;
        }
        else{
            return 0.75;
        }
    }
    });
});

//home screen logo fade in
$(window).scroll(function() {
    $('#logo_overlay').css({
    opacity: function() {
        var opacity = 0+ $(window).scrollTop() / 500;
            return opacity-1.4;
    }
    });
});
