<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sparkly
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" style="margin-top: 20px">
		
<!-- footer -->
	<div class="footer" id="footer">
		<div class="container">
			<div class="list">
				<div class="col-md-3 wthree_fl">
					<a href="#">Sparkly Cleaners</a>
					</div>
					
				<div class="col-md-6 wthree_fc">
					<h6> 133 Great Plumtree </h6>
					<h6> Harlow </h6>
					<h6> CM20 2NY</h6>
					</div>
					
					<div class="col-md-3 wthree_fr">
					<h6>078333836256</h6>
					<h6><a href="mailto:admin@sparklycleaners.co.uk">admin@sparklycleaners.co.uk</a></h6>
					</div>
				
				
			</div>
		</div>
	</div>
	<!-- //footer -->
<div class="copyright">
		<div class="container">
			<p>© 2018 Sparkly Cleaners. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
		</div>
	</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>



<!-- flexSlider -->
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items :2,
									itemsDesktop : [800,2],
									itemsDesktopSmall : [414,1],
							        lazyLoad : true,
							        autoPlay : true,
							        navigation :true,
									
							        navigationText :  false,
							        pagination : true,
									
							      });
								  
							    });
							    </script>


    <script>
        $(document).ready(function () {
            $('.cm-overlay').cmOverlay();
        });
    </script>
    <!-- //gallery -->

<!-- Move-to-top-->
<script type="text/javascript">
$(document).ready(function() {
var defaults = {
containerID: 'toTop', // fading element id
containerHoverID: 'toTopHover', // fading element hover id
scrollSpeed: 1200,
easingType: 'linear' 
};
$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<!--/Move-to-top-->


</body>
</html>
