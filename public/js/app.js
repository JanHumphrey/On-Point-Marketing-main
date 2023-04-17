( function($) {
    let main = {
        init: function() {
            this.events()
        },

        events: function() {
            this.header(),
            this.faq()
        },

        header: function() {
            $("button").on("click", function () {
                $("body").toggleClass("open");
            });

            $(window).scroll(function () {
                if ($(this).scrollTop() > 50) {
                  /*height in pixels when the navbar becomes non opaque*/
                  $(".header").addClass("opaque");
                  $("#site-logo2").show();
                  $("#site-logo").hide();
                } else {
                  $(".header").removeClass("opaque");
                  $("#site-logo").show();
                  $("#site-logo2").hide();
                }
            });
        },
        faq: function() {
                $('.frequently-asked-questions__content .frequently-asked-questions__items:first-of-type').addClass('active');

                $('.frequently-asked-questions__item-answer').click(function() {

                    // const parent = $(this).parent();
                    // const firstClass = parent.attr('class').split(' ')[0];
                    // console.log(firstClass);

                  $('.frequently-asked-questions__item-answer').parent().removeClass('active');
                  $(this).parent().addClass('active');

                //   $('.frequently-asked-questions__item-question').css('visibility', 'hidden');
                //   $(this).prev('.frequently-asked-questions__item-question').css('visibility', 'visible');
                });
        },
    }

    $( document ).ready( function() {
        main.init()
    } )

} )( jQuery )
