
<!--Footer Section Start-->
<footer class="footersection text-center">
<p>&copy; Copyright 2016 University of IIUC. All rights reserved.</p>
</footer>

<!--Footer Section End-->	
<!--scrollToUp section start-->
<script type="text/javascript" src="http://arrow.scrolltotop.com/arrow25.js"></script>

<!--scrollToUp section End-->
	
		
		
       <!-- <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script> -->
       <!-- <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"></script>')</script>
        <script src="js/bootstrap.min.js"></script>    <!--new Enter-->
		<script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. 
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
		-->
		<script src="assets/js/jquery-1.12.4.js"></script>
		<script src="assets/js/jquery-ui.js"></script>
	<!--	<script type="text/javascript" src="js/jssor.slider.mini.js"></script> for slider  -->
<!--		<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>  -->
		    <!-- use jssor.slider.debug.js instead for debug -->


   	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="assets/js/modal.js"></script>
   	<script type="type/javascript" src="js/scroll.js"></script>
	<script type="type/javascript" src="js/smooth.js"></script>
			<script src="../assets/js/jquery-1.12.4.js"></script>  <!--রক্ত দানের অভিজ্ঞতা-->
		<script src="../assets/js/jquery-ui.js"></script>      <!--রক্ত দানের অভিজ্ঞতা -->
   

	
		<!--For Scrool Start-->
		<script type="text/javascript">
	var $animation_elements = $('.animated');
var $window = $(window);

function check_if_in_view() {
  var window_height = $window.height();
  var window_top_position = $window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);
 
  $.each($animation_elements, function() {
    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);
 
    //check to see if this current container is within viewport
    if ((element_bottom_position >= window_top_position) &&
        (element_top_position <= window_bottom_position)) {
      $element.addClass('animated zoomIn');
    } else {
      $element.removeClass('animated zoomIn');
    }
  });
}

$window.on('scroll resize', check_if_in_view);
$window.trigger('scroll');
	</script>
	<!--For Scrool End-->
	
	
		<!--রক্ত দানের অভিজ্ঞতা শুরু-->
	<script>
		  $( function() {
			$( "#tabs" ).tabs({
			  event: "mouseover"
			});
		  } );
	</script>
	<!--রক্ত দানের অভিজ্ঞতা শেষ-->

  
</body>
</html>
