(function ($) {
	"use strict";

    $(document).ready(function(){

      $("a[href^='#']").click(function(e) {
            e.preventDefault();
            var position = $($(this).attr("href")).offset().top;

            $("body, html").animate({
                scrollTop: position
            });
        });

    });

    $(document).ready(function(){

        $(".slide-up").click(function(e){
            $(".box").slideUp();
            
        });
        $(".slide-down").click(function(){
            $(".box").slideDown();
        });
    });
    
    $('#myTab a').on('click', function (e) {
      e.preventDefault()
      $(this).tab('show')
    });

}(jQuery));