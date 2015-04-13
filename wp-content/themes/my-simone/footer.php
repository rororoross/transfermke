<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package my-simone
 */
?>



	<footer>
				<p class="footer-left">101 W. Mitchell St.</br>
		Milwaukee, WI 53204</br>
		<span class="res">Reservations 6 or more:</span> 414.763.0438</p>

		<p class="footer-right"><span>Kitchen Hours</span><br>
		Sun-Thu: 11am-10pm</br>
		Fri-Sat: 11am-11pm</p>
	</footer><!-- #colophon -->


<?php wp_footer(); ?>



	<!-- AddThisEvent -->
	
	<script type="text/javascript" src="https://addthisevent.com/libs/1.5.8/ate.min.js"></script>
    <script src="wp-content/themes/my-simone/js/fastclick.js"></script>
	<script src="wp-content/themes/my-simone/js/scroll.js"></script>
	<script src="wp-content/themes/my-simone/js/fixed-responsive-nav.js"></script>
 	<script src="http://malsup.github.com/jquery.cycle2.js"></script>
	<script src="js/jquery.modal.js" type="text/javascript" charset="utf-8"></script>

</body>
<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);

                $name.text($tab.text());

                $info.show();
            }
        });

        $('#verticalTab').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true,
            closed: 'accordion',
        });

        $('#verticalTab-2').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true,
            closed: 'accordion',
        });
    });
</script>
<script>
$.modal.defaults = {
  overlay: "#000",        // Overlay color
  opacity: 0.50,          // Overlay opacity
  zIndex: 499,              // Overlay z-index.
  escapeClose: true,      // Allows the user to close the modal by pressing `ESC`
  clickClose: true,       // Allows the user to close the modal by clicking the overlay
  closeText: 'Close',     // Text content for the close <a> tag.
  closeClass: '',         // Add additional class(es) to the close <a> tag.
  showClose: true,        // Shows a (X) icon/link in the top-right corner
  modalClass: "modal",    // CSS class added to the element being displayed in the modal.
  spinnerHtml: null,      // HTML appended to the default spinner during AJAX requests.
  showSpinner: true,      // Enable/disable the default spinner during AJAX requests.
  fadeDuration: 200,     // Number of milliseconds the fade transition takes (null means no transition)
  fadeDelay: .5          // Point during the overlay's fade-in that the modal begins to fade in (.5 = 50%, 1.5 = 150%, etc.)
};
</script>

<script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map_canvas');
        var mapOptions = {
          center: new google.maps.LatLng(43.01216, -87.91128),
          zoom: 16,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          scrollwheel: false,
          panControl: true,
  panControlOptions: {
  position: google.maps.ControlPosition.RIGHT_BOTTOM
},
zoomControl: true,
zoomControlOptions: {
  style: google.maps.ZoomControlStyle.SMALL,
  position: google.maps.ControlPosition.LEFT_BOTTOM,
}

        }
        var map = new google.maps.Map(mapCanvas, mapOptions);
        var marker = new google.maps.Marker({
      position: map.getCenter(),
      map: map
    });
      }




      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</html>
