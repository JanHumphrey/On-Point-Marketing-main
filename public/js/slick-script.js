( function($) {
    let main = {
        init: function() {
            this.events()
        },

        events: function() {
            this.slick()
        },

        slick: function() {
            // Our recent work section
            $('.our-recent-work__slider-main').slick({
                dots: false,
                arrows: false,
                infinite: true,
                speed: 300,
                slidesToShow: 3,
                slidesToScroll: 3,
                centerMode: true,
                centerPadding: "12%",
                autoplaySpeed: 5000,
                autoplay: true,
                responsive: [
                  {
                    breakpoint: 1024,
                    settings: {
                      slidesToShow: 3,
                      slidesToScroll: 3,
                      infinite: true,
                      dots: false
                    }
                  },
                  {
                    breakpoint: 600,
                    settings: {
                      slidesToShow: 2,
                      slidesToScroll: 2
                    }
                  },
                  {
                    breakpoint: 480,
                    settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1
                    }
                  }
                ]
            });

            // People who trust us section
            $('.people-who-trust-us__slider-main').slick({
                dots: false,
                arrows: false,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: true,
                centerPadding: "25%",
                autoplaySpeed: 5000,
                autoplay: true,
                responsive: [
                  {
                    breakpoint: 1024,
                    settings: {
                      slidesToShow: 3,
                      slidesToScroll: 3,
                      infinite: true,
                      dots: false
                    }
                  },
                  {
                    breakpoint: 600,
                    settings: {
                      slidesToShow: 2,
                      slidesToScroll: 2
                    }
                  },
                  {
                    breakpoint: 480,
                    settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1
                    }
                  }
                ]
            });
        },
    }

    $( document ).ready( function() {
        main.init()
    } )

} )( jQuery )
