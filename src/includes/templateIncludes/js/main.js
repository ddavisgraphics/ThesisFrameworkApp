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


});