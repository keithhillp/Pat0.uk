<?php wp_footer(); ?>

<script>
$(document).ready(function(){
    $("#mobile").click(function(){
        $("#nav").fadeToggle(800);
    });
});
</script>

<script type="text/javascript">
    $(document).ready(function(){
      $('.your-class').slick({
        autoplay: true,
        arrows: false
      });
    });
  </script>

  <script>
  	$(window).scroll(function() {    
var scroll = $(window).scrollTop();
 //console.log(scroll);
if (scroll >= 350) {
    //console.log('a');
    $(".mainTitle").addClass("navTitle");
} else {
    //console.log('a');
    $(".mainTitle").removeClass("navTitle");
}
});
  </script>

  <script>
	
$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top
            }, 1000);
            return false;
        }
    }
});

</script>

</body>
</html>