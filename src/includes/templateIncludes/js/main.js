var processed = false;

$(function(){
    // Nav Toggle
    // =====================================================
    $('.nav-toggle a').click(function(){
        $('nav').toggleClass('hidden');
    });

    // Home Page Functionality
    // =====================================================
    if($('.registerUser').length != 0){
        console.log('changes added');
        $('.preference').find('a.btn').click(function(){
            $('.preference').find('a.btn').removeClass('active');
            $(this).addClass('active');
            $('#inputJob').val($(this).data('job'));
        });

        $('.occupationSelect').change(function(){
            if($(this).val() == 'other'){
                $('.other-option').removeClass('hidden');
            } else {
                $('.other-option').addClass('hidden');
            }
        });
    }

    // Star System
    // =====================================================
    if($('.rating-system').length != 0){
        $('.rating-system').find('.star').click(function(){
            var rating = $(this).data('star');
            $('.rating').val(rating);

            var stars = $('.star');
            $('.star').removeClass('active');

            for(var i = 0; i <= rating; i++){
                var elm = $('.star:lt('+i+')');
                elm.addClass('active');
            }

        });
    }


    // Track Lessons & Surveys
    // =====================================================
    if($('#track').length !== 0){
        console.log('tracking');
        $(window).on('scroll', scrollTrack);

        $('form').submit(function(){
            pageName = pageName + "Survey";
            $.ajax({
                dataType:'json',
                url:'/ajax/complete/',
                data: { username: sessionUser, ipAddress: ipAddr, page: pageName},
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus + ': ' + errorThrown);
                },
                complete: function(data){
                    var jsonData = data.responseJSON[0];
                    console.log(jsonData);
                },
            });
        });
    }
});

function scrollTrack(){
    if(processed){
        return false;
    }

    console.log('scrolling');

    if($(window).scrollTop() >= ($(document).height() - $(window).height())*0.5){
        processed = true; //sets a processing AJAX request flag

        pageName = pageName + "Lesson";

        $.ajax({
            dataType:'json',
            url:'/ajax/complete/',
            data: { username: sessionUser, ipAddress: ipAddr, page: pageName},
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(textStatus + ': ' + errorThrown);
            },
            complete: function(data){
                var jsonData = data.responseJSON[0];
                console.log(jsonData);
            },
        });
    }
}