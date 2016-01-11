/*!
 * Start Bootstrap - Creative Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

(function($) {
    "use strict"; // Start of use strict

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 51
    })

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function() {
        $('.navbar-toggle:visible').click();
    });

    // Fit Text Plugin for Main Header
    $("h1").fitText(
        1.2, {
            minFontSize: '15px',
            maxFontSize: '35px'
        }
    );

    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 100
        }
    });

    var i=1;

    // var sliderText = setInterval(function(){


    //     $(".slider-text").children("span").slideUp(500);
    //     setTimeout(function(){
    //         $(".slider-text").children("span").eq(i).slideDown(500);
    //     },500);

    //     i++;
    //     if(i>=$(".slider-text").children("span").length){
    //         i=0;
    //     }

    // }, 5000);

    // Initialize WOW.js Scrolling Animations

    new WOW().init();


    //Google analytics
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-70825202-1', 'auto');
    ga('send', 'pageview');

    //Yandex analytics
     (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter34084805 = new Ya.Metrika({
                    id:34084805,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");


    function traffic(){
        var width = $("body").innerWidth()

        $("#truck").animate({left: (width - $("#truck").width())+ "px"}, 8000, function(){
            $("#truck").css("left",  "0px");
        });

        $("#moped").animate({left:  "-" + (width - $("#moped").width())+ "px"}, 8000, function(){
            $("#moped").css("left",  "0px");
        });

    }

    traffic();
    var roadAnimation = setInterval(traffic,8000);

     $(function(){
                  $(".arrow-text").typed({
                    strings: ["Ամանօրյա տոներին ընդառաջ, jHunter-ը ներկայանում է աննախադեպ առաջարկով։ Մինչը հունվարի 15-ը բոլոր պատվիրատուները կստանան 1 անգամյա անվճար առաքում։"],
                    typeSpeed: 0,
                    startDelay: "1000",
                  });
     });

     $(document).on("click",".close-popup",function(){
        $(".popup").hide()
     })

    //Form validation

    $("#sendmail").submit(function(e){
        $("#sendmail").find("input:lt(3)").each(function(){
           if($(this).val() == "" || $(this).val() == undefined || $(this).val() == null){
               $(this).css("border","1px solid red");
               e.preventDefault();
           }
           if(!$(this).hasClass("required")){
               e.preventDefault();
               alert("Ծրագրային կոդը փոխվել է");
               location.reload();
           }
        });

    });

    $("#sendmail").find(".required").keydown(function(){
        $(this).css("border","none")
    });



   
})(jQuery); // End of use strict








