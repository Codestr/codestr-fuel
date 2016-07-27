<script src="js/jquery-2.0.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--- Google Analytics --->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-34700202-1', 'auto');
  ga('send', 'pageview');
</script>
<script>
    /// Fix nav to top after scroll
    $(document).ready(function () {
        var headerHeight = $('.section-intro').height();
        ////////// Fix Header to Top After Scrolling Past Banner
        $(window).scroll(function () {
            if ($(window).scrollTop() > headerHeight) {
                $('nav').addClass('nav-fixed');
                $('section').first().addClass('nav-push');
            }
            if ($(window).scrollTop() < headerHeight) {
                $('nav').removeClass('nav-fixed');
                $('section').first().removeClass('nav-push');
            }
        });

        /// Recalculate Header height on window resize
        $(window).resize(function () {
            headerHeight = $('.section-intro').height();
        });

        /// Animated Nav Scroll
        $(".scroll").click(function(e){
            e.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);
        });

    });

    /// Mobile Menu Toggle Switch
    $('.menu-main-toggle').click(function() {
            $('.menu-main').slideToggle(1500);
        });
</script>
