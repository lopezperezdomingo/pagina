<?php include "include/header.php"; ?>
<div class="divider"><span></span></div>
<!--start contact-->
<div class="contactmap">
	
    <!--start info contact-->
    <div class="infocontact infocontactlight blue">
    
    	<div class="contentinfocontact">
        	<p class="titleinfocontact">H. AYUNTAMIENTO MUNICIPAL</p>
            <ul>
            	<li><p><img alt="" src="img/contact/iconinfocontactaddress.png">Dirección: BARRIO CENTRO</p></li>
                <li><p><img alt="" src="img/contact/iconinfocontactphone.png">Telefono: (01) 919-673-00-15</p></li>
                <li><p><img alt="" src="img/contact/iconinfocontactmail.png">Mail:presidencia@ocosingo.gob.mx</p></li>
            </ul>
        </div>
        
        <div class="triangleinfocontact">
        	<span></span>
        </div>
    
    </div>
    <!--end info contact-->
    
	<!--google maps-->
    <div id="map-canvas"></div>
    <!--google maps-->
    	
</div>
<!--end contactmap-->   
</section>
<!--end internal page-->
<?php include "include/footer.php"; ?>

	<!--Start js-->    
    <script src="js/jquery.min.js"></script> <!--Jquery-->
    <script src="js/jquery-ui.js"></script> <!--Jquery UI-->
    <script src="https://maps.googleapis.com/maps/api/js?sensor=true"></script> <!-- Google Map API -->
    <script src="js/excanvas.js"></script> <!--canvas need for ie-->
    <script src="js/scroolto.js"></script> <!--Scrool To-->
    <script src="js/jquery.nicescroll.min.js"></script> <!--Nice Scroll-->
    <script src="js/jquery.inview.min.js"></script> <!--inview-->
	<script src="js/menu/hoverIntent.js"></script> <!--superfish-->
	<script src="js/menu/superfish.min.js"></script> <!--superfish-->
    <script src="js/menu/tinynav.min.js"></script> <!--tinynav-->
    <script src="js/jquery.parallax-1.1.3.js"></script> <!--parallax-->
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
		
		//start map
		$(document).ready(function(){
		
			var map;
			var brooklyn = new google.maps.LatLng(16.9080298, -92.0956294);
			
			var MY_MAPTYPE_ID = 'custom_style';
			
			function initialize() {
				
				
			  var mapcanvasdark = $('.map-canvas-dark').length;
			
			  
			  if (mapcanvasdark==1){
				  
				var featureOpts = [
			 
				  {
					"stylers": [
					  { "saturation": -100 }
					]
				  },{
				  }
			  ];	
				  
			  }else{
				  
				var featureOpts = [];	  
				  
			  }
			  
			  var mapOptions = {
				zoom: 14,
				draggable: false,
				center: brooklyn,
				disableDefaultUI: true,
				scrollwheel: false,
				mapTypeControlOptions: {
				  mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
				},
				mapTypeId: MY_MAPTYPE_ID
			  };
			
			  map = new google.maps.Map(document.getElementById('map-canvas'),
				  mapOptions);
			
			  var styledMapOptions = {
				name: 'Custom Style'
			  };
			
			  var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);
			
			  map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
			}
			
			google.maps.event.addDomListener(window, 'load', initialize);
		
		});
		//end map
		
		//start accordion
		$(document).ready(function() {
			$( ".accordion" ).accordion();
		});
		//end accordion
		

		/* ]]> */
	</script>
    
</body>  
</html>