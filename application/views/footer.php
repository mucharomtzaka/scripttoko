 <script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
    <link href="<?php echo base_url();?>bootstrap/css/flexslider.css" rel='stylesheet' type='text/css' />
							  <script defer src="<?php echo base_url();?>bootstrap/js/jquery.flexslider.js"></script>
							  <script type="text/javascript">
								$(window).load(function(){
								  $('.flexslider').flexslider({
									animation: "slide",
									start: function(slider){
									  $('body').removeClass('loading');
									}
								  });
								});
							  </script>
</div><!-- /#page-wrapper -->
	  <footer class="well text-right">
        <p><?php echo $credit; ?></p>
      </footer>
    </div><!-- /#wrapper -->
</body>
</html>
