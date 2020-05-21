<!-- jQuery -->
<script type="text/javascript" src="<?php echo base_url('assets/assets2/js/jquery.min.js')?>"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="<?php echo base_url('assets/assets2/js/popper.min.js')?>"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?php echo base_url('assets/assets2/js/bootstrap.min.js')?>"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="<?php echo base_url('assets/assets2/js/mdb.min.js')?>"></script>
<!-- Your custom scripts (optional) -->
<script type="text/javascript" src="<?php echo base_url('assets/assets2/js/javascript.js')?>"></script>

	<script src="<?=base_url('assets/assets_galeri/js/jquery-3.3.1.min.js')?>"></script>
	<!-- <script src="js/jquery-migrate-3.0.1.min.js"></script> -->
	<script src="<?=base_url('assets/assets_galeri/js/jquery-ui.js')?>"></script>
	<!-- <script src="js/popper.min.js"></script> -->
	<!-- <script src="js/bootstrap.min.js"></script> -->
	<!-- <script src="js/owl.carousel.min.js"></script> -->
	<!-- <script src="js/jquery.stellar.min.js"></script> -->
	<script src="<?=base_url('assets/assets_galeri/js/jquery.countdown.min.js')?>"></script>
	<!-- <script src="js/jquery.magnific-popup.min.js"></script> -->
	<script src="<?=base_url('assets/assets_galeri/js/bootstrap-datepicker.min.js')?>"></script>
	<!-- <script src="js/aos.js"></script> -->

	<script src="<?=base_url('assets/assets_galeri/js/jquery.fancybox.min.js')?>"></script>

	<script src="<?=base_url('assets/assets_galeri/js/main.js')?>"></script>
	<!-- JS Fox Template  -->

	<script src="<?=base_url('assets/assets_fox/js/jquery.min.js')?>"></script>
	<script src="<?=base_url('assets/assets_fox/js/jquery-migrate-3.0.1.min.js')?>"></script>
	<script src="<?=base_url('assets/assets_fox/js/popper.min.js')?>"></script>
	<script src="<?=base_url('assets/assets_fox/js/jquery.easing.1.3.js')?>"></script>
	<script src="<?=base_url('assets/assets_fox/js/jquery.waypoints.min.js')?>"></script>
	<script src="<?=base_url('assets/assets_fox/js/jquery.stellar.min.js')?>"></script>
	<script src="<?=base_url('assets/assets_fox/js/owl.carousel.min.js')?>"></script>
	<script src="<?=base_url('assets/assets_fox/js/jquery.magnific-popup.min.js')?>"></script>
	<script src="<?=base_url('assets/assets_fox/js/aos.js')?>"></script>
	<script src="<?=base_url('assets/assets_fox/js/jquery.animateNumber.min.js')?>"></script>
	<script src="<?=base_url('assets/assets_fox/js/scrollax.min.js')?>"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="<?=base_url('assets/assets_fox/js/google-map.js')?>"></script>
	<script src="<?=base_url('assets/assets_fox/js/main.js')?>"></script>

	<!-- <script src="assets/js/jquery.min.js"></script> -->
	<!-- <script src="<?=base_url('assets/radius/js/skel.min.js')?>"></script> -->
	<script src="<?=base_url('assets/radius/js/util.js')?>"></script>
	<script src="<?=base_url('assets/radius/js/main.js')?>"></script>


	
	<script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
  <script type="text/javascript" src="<?=base_url('assets/photoarkwork/js/jquery.galleriffic.js')?>"></script>
  <script type="text/javascript" src="<?=base_url('assets/photoarkwork/js/jquery.opacityrollover.js')?>"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      // we only want these styles applied when javascript is enabled
      $('div.content').css('display', 'block');
      // initially set opacity on thumbs and add additional styling for hover effect on thumbs
      var onMouseOutOpacity = 0.67;
      $('#thumbs ul.thumbs li, div.navigation a.pageLink').opacityrollover({
        mouseOutOpacity:   onMouseOutOpacity,
        mouseOverOpacity:  1.0,
        fadeSpeed:         'fast',
        exemptionSelector: '.selected'
      });
      // initialize advanced galleriffic gallery
      var gallery = $('#thumbs').galleriffic({
        delay:                     3500,
        numThumbs:                 10,
        preloadAhead:              10,
        enableTopPager:            false,
        enableBottomPager:         false,
        imageContainerSel:         '#slideshow',
        controlsContainerSel:      '#controls',
        captionContainerSel:       '#caption',
        loadingContainerSel:       '#loading',
        renderSSControls:          true,
        renderNavControls:         true,
        playLinkText:              'Play Slideshow',
        pauseLinkText:             'Pause Slideshow',
        prevLinkText:              '&lsaquo; Previous Photo',
        nextLinkText:              'Next Photo &rsaquo;',
        nextPageLinkText:          'Next &rsaquo;',
        prevPageLinkText:          '&lsaquo; Prev',
        enableHistory:             true,
        autoStart:                 false,
        syncTransitions:           true,
        defaultTransitionDuration: 900,
        onSlideChange:             function(prevIndex, nextIndex) {
          // 'this' refers to the gallery, which is an extension of $('#thumbs')
          this.find('ul.thumbs').children()
            .eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
            .eq(nextIndex).fadeTo('fast', 1.0);

          // update the photo index display
          this.$captionContainer.find('div.photo-index')
            .html('Photo '+ (nextIndex+1) +' of '+ this.data.length);
        },
        onPageTransitionOut:       function(callback) {
          this.fadeTo('fast', 0.0, callback);
        },
        onPageTransitionIn:        function() {
          var prevPageLink = this.find('a.prev').css('visibility', 'hidden');
          var nextPageLink = this.find('a.next').css('visibility', 'hidden');
          // show appropriate next / prev page links
          if (this.displayedPage > 0)
            prevPageLink.css('visibility', 'visible');
          var lastPage = this.getNumPages() - 1;
          if (this.displayedPage < lastPage)
            nextPageLink.css('visibility', 'visible');
          this.fadeTo('fast', 1.0);
        }
      });
      // event handlers for custom next / prev page links
      gallery.find('a.prev').click(function(e) {
        gallery.previousPage();
        e.preventDefault();
      });
      gallery.find('a.next').click(function(e) {
        gallery.nextPage();
        e.preventDefault();
      });
    });
  </script>