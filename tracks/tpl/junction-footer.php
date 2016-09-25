
<footer id="footer" class="footer">
    <div class="container footer-cont">
        <div class="col-md-8 hidden-xs hidden-sm">
            <img src="../../../img/logo_main_grey.svg" class="footer-logo">
            <p class="footer-txt">
                Junction is Europe’s largest hackathon and a converging point for developers, designers, and entrepreneurs from across the world. Held on November 25-27 in Helsinki, Finland.
            </p>
        </div>
        <div class="col-md-4 col-xs-12 footer-rightcol">
            <div class="footer-links">
                <a href="https://www.facebook.com/hackjunction">
                    <i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i>
                </a>
                <a href="https://www.instagram.com/hackjunction">
                    <i class="fa fa-instagram fa-3x" aria-hidden="true"></i>
                </a>
                <a href="https://twitter.com/hackjunction">
                    <i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i>
                </a>
                <a href="https://medium.com/hack-junction">
                    <i class="fa fa-medium fa-3x" aria-hidden="true"></i>
                </a>
            </div>
            <p class="footer-contact">Contact: hello@hackjunction.com</p>
        </div>
        <a href="http://aaltoes.com"><img src="../../../img/aaltoes_grey.png" class="aaltoes-logo"></a>
    </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../../../js/lib/bootstrap.min.js"></script>
<script type="text/javascript" src="../../../js/lib/skrollr.min.js"></script>
<script type="text/javascript" src="../../../js/app/smoothScroll.js"></script>
<script type="text/javascript" src="../../../js/app/faq.js"></script>

<script>
$.preloadImages = function() {
    for (var i = 0; i < arguments.length; i++) {
        $("<img />").attr("src", arguments[i]);
    }
};

$.preloadImages('../../img/logo_nogrunge.png', '../../img/about_img.jpg', '../../img/48hours.jpg', '../../img/junction_logo.png', '../../img/junction_logo_black.png');

$(window).resize(function() {
    sectionHeights();
    calculateTrackBoxHeights();
});

$('.button').on('click', function() {
    if ($(this).find('a').attr('href')) {
        window.location = $(this).find('a').attr('href');
    }
});

$(window).load(function() {
    $('.nav-logo-black').hide();

    $('.button').hover(
        function() {
            $(this).find('a').css('color', 'white');
            $(this).find('p').css('color', 'white');
        },
        function() {
            $(this).find('a').css('color', '#5bc8d7');
            $(this).find('p').css('color', '#5bc8d7');
        }
    );
    $(this).on('scroll', function() {
        if ($(window).scrollTop() === 0) {
            $('.navbar').addClass('navtop');
            $('.nav-logo-black').fadeOut().promise().done(function() {
                $('.nav-logo-white').fadeIn();
            });

        } else {
            $('.navbar').removeClass('navtop');
            $('.nav-logo-white').fadeOut().promise().done(function() {
                $('.nav-logo-black').fadeIn();
            });
        }
    });
    $('.aftermovie').on('click', function() {
        $('.overlay').fadeIn();
        $('.overlay-video').fadeIn();
    });

    $('.overlay').on('click', function() {
        $('.overlay').fadeOut();
        $('.overlay-video').fadeOut();
    });
});
</script>

<!-- Script for opening and closing modal-->
<script>
      var currentModal;

    // Open modal when track is clicked
    $('.challenge-info').click(function(e){
      var clickedTrack = e.target.className.split(" ")[1]; //get the clicked element class (eq. klarna)
      currentModal = $('#' + clickedTrack + '-modal');
      currentModal.modal('show');
    });

    $('.close-modal').click(function(){
      currentModal.modal('hide');
    });
</script>

<script src="../dist/barba.js"></script>
<script src="../nextprev.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.1/TweenMax.min.js"></script>

</body>
</html>
