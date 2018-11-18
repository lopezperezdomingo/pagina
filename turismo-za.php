<?php include "include/header.php"; ?>
<div class="divider"><span></span></div>
	<!--start container-->
    <div class="container clearfix">
       
		<div class="grid_12">
            <div class="titlesection rotate-In-Down-Left">
                <h1>ZONAS ARQUELÓGICAS</h1>
                <h1>__________________________________________________________________</h1>
                <a> ____________________Vive Ocosingo____________________
                </a>
            </div>  
        </div>
    </div>

<!--start page-->
<section id="internalpage">

	<!--start container-->
    <div class="container clearfix">
    

		<!--start blogmasonry-->
		<div class="stylemasonry infinite-scroll">

        
            <!--start post masonry-->
            <div class="grid_4 singlemasonry singlepostmasonry red">
                
                <img alt="" class="imgsinglepostmasonry" src="img/header-page/price.jpg">
                
                <div class="titledaysinglepostmasonry">
                    
                    <p class="titlesinglepostmasonry">KM 12</p>
                
                    <div class="daysinglepostmasonry">
                        <p>Tonina</p>
                        <span>ocosingo-montelibano</span>
                    </div>
                
                </div> 
                
                <p class="descriptionsinglepostmasonry">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin cursus, elit vitae fermentum hendrerit, neque erat fringilla nibh, vel sodales sem diam nec nunc. Donec mattis blandit metus ut volutpat. Quisque orci lectus, sodales at cursus et, gravida quis nisl.</p>   
            
            </div>
            <!--end post masonry-->

            <!--start post masonry-->
            <div class="grid_4 singlemasonry singlepostmasonry blue">
                
                <img alt="" class="imgsinglepostmasonry" src="img/header-page/price.jpg">
                
                <div class="titledaysinglepostmasonry">
                    
                    <p class="titlesinglepostmasonry">KM 261.3</p>
                
                    <div class="daysinglepostmasonry">
                        <p>Yaxchilan</p>
                        <span>Ocosingo-Benemerito</span>
                    </div>
                
                </div> 
                
                <p class="descriptionsinglepostmasonry">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin cursus, elit vitae fermentum hendrerit, neque erat fringilla nibh, vel sodales sem diam nec nunc. Donec mattis blandit metus ut volutpat. Quisque orci lectus, sodales at cursus et, gravida quis nisl.</p>   
                   
            </div>
            <!--end post masonry-->
            
            <!--start post masonry-->
            <div class="grid_4 singlemasonry singlepostmasonry violet">
                
                <img alt="" class="imgsinglepostmasonry" src="img/header-page/price.jpg">
                
                <div class="titledaysinglepostmasonry">
                    
                    <p class="titlesinglepostmasonry">KM 200.1</p>
                
                    <div class="daysinglepostmasonry">
                        <p>Bonampak</p>
                        <span>Ocosingo-Benemerito</span>
                    </div>
                
                </div> 
                
                <p class="descriptionsinglepostmasonry">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin cursus, elit vitae fermentum hendrerit, neque erat fringilla nibh, vel sodales sem diam nec nunc. Donec mattis blandit metus ut volutpat. Quisque orci lectus, sodales at cursus et, gravida quis nisl.</p>   
                   
            </div>
            <!--end post masonry-->

                        <!--start post masonry-->
            <div class="grid_4 singlemasonry singlepostmasonry violet">
                
                <img alt="" class="imgsinglepostmasonry" src="img/header-page/price.jpg">
                
                <div class="titledaysinglepostmasonry">
                    
                    <p class="titlesinglepostmasonry">KM 175</p>
                
                    <div class="daysinglepostmasonry">
                        <p>Plan de ayutla</p>
                        <span>Ocosingo-Benemerito</span>
                    </div>
                
                </div> 
                
                <p class="descriptionsinglepostmasonry">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin cursus, elit vitae fermentum hendrerit, neque erat fringilla nibh, vel sodales sem diam nec nunc. Donec mattis blandit metus ut volutpat. Quisque orci lectus, sodales at cursus et, gravida quis nisl.</p>   
                   
            </div>
            <!--end post masonry-->
        </div>
    </div>       
            
</section>
<!--end internal page-->

<div class="divider"><span></span></div>

<?php include "include/footer.php"; ?>

	<!--Start js-->    
    <script src="js/jquery.min.js"></script> <!--Jquery-->
    <script src="js/jquery-ui.js"></script> <!--Jquery UI-->
    <script src="js/excanvas.js"></script> <!--canvas need for ie-->
    <script src="js/scroolto.js"></script> <!--Scrool To-->
    <script src="js/jquery.nicescroll.min.js"></script> <!--Nice Scroll-->
    <script src="js/jquery.inview.min.js"></script> <!--inview-->
	<script src="js/menu/hoverIntent.js"></script> <!--superfish-->
	<script src="js/menu/superfish.min.js"></script> <!--superfish-->
    <script src="js/menu/tinynav.min.js"></script> <!--tinynav-->
    <script src="js/jquery.parallax-1.1.3.js"></script> <!--parallax-->
    <script src="js/isotope/jquery.isotope.min.js"></script> <!--isotope-->
    <script src="js/isotope/jquery.infinitescroll.min.js"></script> <!--isotope-->
	<script src="js/twitter/jquery.twitterfeed.min.js"></script> <!--twitter-->
    <script src="js/settings.js"></script> <!--settings-->
    <!--End js-->
	
	<script type='text/javascript'>
		/* <![CDATA[ */
		

		//start parallax
		jQuery(document).ready(function() {
			$('.header-page').parallax("100%", 0.1);
		});
		//end parallax
		
		//start masonry
		jQuery(document).ready(function() {

			$(function(){
						  
			  //initialize
			  var $container = $('.stylemasonry');
			  

			  $container.isotope({
				itemSelector : '.singlemasonry'
			  });
			  //end initialize
			  
			  
			  //start masonry
			  $container.isotope({
				itemSelector : '.singlemasonry'
			  });
			  // end masonry
			  

			 //relayout 
			setInterval(function(){
				$container.isotope('reLayout');
			}, 0);
			//reLayout
			
			
			//infinite scrool
		  $('.infinite-scroll').infinitescroll({
			navSelector  : '.archivepagination',            
			nextSelector : '.archivepagination .nextbtn',    
			itemSelector : '.singlemasonry',
			loading: {
				msgText: 'Load',
				finishedMsg: 'Finish',
				img: 'http://i.imgur.com/qkKy8.gif'
			  }
			},
			// call Isotope as a callback
			function( newElements ) {
			  $container.isotope( 'appended', $( newElements ) ); 
			}
		  );
		  //end infiite scrool
			

			});		   

		});
		//end masonry


		/* ]]> */
	</script>
    
</body>  
</html>