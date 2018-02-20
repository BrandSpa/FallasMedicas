
const arrow = () =>{
        
        (function($){
            console.log('load');
            $(document).on('click', 'a[href^="#"]', function (event) {
                event.preventDefault();
            
                $('html, body').animate({
                    scrollTop: $($.attr(this, 'href')).offset().top
                }, 500);
            });

            $(window).on('scroll', function() {
                if ($(this).scrollTop() > 300) {
                    $('#backtotop:hidden').stop(true, true).fadeIn();
                } else {
                    $('#backtotop').stop(true, true).fadeOut();
                }
            });

            $(document).on('click', '#backtotop', function(){
                $('html, body').animate({
                    scrollTop: 0
                }, 500);
            })

        })(jQuery);
    
}

export default arrow;