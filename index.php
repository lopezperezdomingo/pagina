<?php include "include/header.php"; ?>
<?php include "include/home/slide-full-width.php"; ?><!--slider principal-->
<?php include "include/home/services.php"; ?> <!--3 circulos de eventos-->
<div class="divider"></div>
<?php include "include/home/promotions.php"; ?>
<div class="divider"></div>
<?php include "include/home/clients.php"; ?>
<div class="divider"></div>
<?php include "include/footer.php"; ?>

	<!--Start js-->    
    <script src="js/jquery.min.js"></script> <!--Jquery-->
    <script src="js/jquery-ui.js"></script> <!--Jquery UI-->
    <script src="js/excanvas.js"></script> <!--canvas need for ie-->
    <script src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script> <!--rev slider-->
    <script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script> <!--rev slider-->
    <script type="text/javascript" src="showbizpro/js/jquery.themepunch.plugins.min.js"></script> <!--showbiz-->						
	<script type="text/javascript" src="showbizpro/js/jquery.themepunch.showbizpro.min.js"></script> <!--showbiz-->
    <script src="js/scroolto.js"></script> <!--Scrool To-->
    <script src="js/jquery.nicescroll.min.js"></script> <!--Nice Scroll-->
    <script src="js/jquery.easy-pie-chart.js"></script> <!--Chart-->
    <script src="js/fancybox/jquery.fancybox.js"></script> <!--main fancybox-->
    <script src="js/fancybox/jquery.fancybox-thumbs.js"></script> <!--fancybox thumbs-->
    <script src="js/jquery.inview.min.js"></script> <!--inview-->
	<script src="js/menu/hoverIntent.js"></script> <!--superfish-->
	<script src="js/menu/superfish.min.js"></script> <!--superfish-->
    <script src="js/menu/tinynav.min.js"></script> <!--tinynav-->
	<script src="js/twitter/jquery.twitterfeed.min.js"></script> <!--twitter-->
    <script src="js/settings.js"></script> <!--settings-->
    <!--End js-->
	
	<script type='text/javascript'>
		/* <![CDATA[ */
		
		
		//start carousel
		jQuery(document).ready(function() {

			jQuery('.showbiz-container').showbizpro({
				dragAndScroll:"on",
				visibleElementsArray:[4,3,2,1]
			});
		   
		});
		//end carousel
		
		
		//start revolution slider
		var revapi;

		jQuery(document).ready(function() {

			   revapi = jQuery('.tp-banner-full-width').revolution(
				{
					delay:9000,
					startwidth:1170,
					startheight:650,
					hideThumbs:10,
					navigationType:"none",
					fullWidth:"on",
					forceFullWidth:"on"
				});

		});	//ready
		//end revolution slider
		
		
		//start chart
		$(document).ready(function(){
						
			$('.percentagehome').easyPieChart({
				size: 140,
				rotate: 0,
				lineWidth: 10,
				animate: 1000,
				barColor: '#55738F',
				trackColor: 'transparent',
				scaleColor: false,
				lineCap: 'butt',
			});

		});
		//end chart
		
		//start tour
		$(document).ready(function(){

			var qnthometour = $('.hometour').length;
			
			
			setInterval(function(){
				
				i=0;
				
				while ( i < qnthometour ){

					//title and img hometours height
					var titleimghometourheight = $(".hometour-"+i+" .titleimghometour").height();
					var datedayhometourheight = $(".hometour-"+i+" .datedayhometour").height();
			
					$(".hometour-"+i+" .descriptionhometour").css({
					  "height": titleimghometourheight - datedayhometourheight
					});	
	
					//tabshometourheight
					var tabshometourheight = $(".hometour-"+i+" .tabshometour").height();
					var footerhometourheight = $(".hometour-"+i+" .footerhometour").height();
			
					$(".hometour-"+i+" .listhometour").css({
					  "height": tabshometourheight - footerhometourheight
					});
					
					i++;	
				}
			
			}, 0);
			
		});
		//end tour
		
		
		//start tab and tooltip
		$(document).ready(function() {
			$(".hometabs").tabs();
			$( ".hometabs, .tooltip" ).tooltip({ position: { my: "top+0 top-75", at: "center center" } });
		});
		//end tab and tooltip
		
		
		//start scroll
		$(document).ready(function() {
			//description hometour
			$(".descriptionhometour").niceScroll({
				touchbehavior:false,
				cursorcolor:"#EBEEF2",
				cursoropacitymax:0.9,
				cursorwidth:3,
				autohidemode:true,
				cursorborder:"0px solid #2848BE",
				cursorborderradius:"0px"
				
			});
			
			//list home tour
			$(".listhometour, .listarchivedestination").niceScroll({
				touchbehavior:true,
				cursorcolor:"#EBEEF2",
				cursoropacitymax:0.9,
				cursorwidth:3,
				autohidemode:true,
				cursorborder:"0px solid #2848BE",
				cursorborderradius:"0px"
				
			});
		});
		//end scroll
		
		
		//start fancybox
		$(document).ready(function(){
						
			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : true,
				arrows    : true,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});
			
		});
		//end fancybox
		
		
		/* ]]> */
	</script>
	
    
</body>  
</html>