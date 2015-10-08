<!-- Bootstrap core and JavaScript's
    ================================================== -->
    <script src="{{ asset('/assets/home/js/jquery-1.10.2.min.js') }}"></script>
    <script src="{{ asset('/assets/home/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/assets/home/js/jquery.parallax.js') }}"></script>
    <script src="{{ asset('/assets/home/js/jquery.fitvids.js') }}"></script>    
	<script src="{{ asset('/assets/home/js/jquery.unveilEffects.js') }}"></script>	
	<script src="{{ asset('/assets/home/js/retina-1.1.0.js') }}"></script>
    <script src="{{ asset('/assets/home/js/fhmm.js') }}"></script>
	<script src="{{ asset('/assets/home/js/bootstrap-select.js') }}"></script>
    <script src="{{ asset('/assets/home/fancyBox/jquery.fancybox.pack.js') }}"></script>
	<script src="{{ asset('/assets/home/js/application.js') }}"></script>
    
	<!-- FlexSlider JavaScript
    ================================================== -->
 	<script src="{{ asset('/assets/home/js/jquery.flexslider.js') }}"></script>
	<script>
        $(window).load(function() {
            $('#carousel').flexslider({
                animation: "slide",
                controlNav: true,
                directionNav: false,
                animationLoop: true,
                slideshow: true,
                itemWidth: 114,
                itemMargin: 0,
                asNavFor: '#slider'
            });
       
            $('#slider').flexslider({
                animation: "fade",
                controlNav: false,
                animationLoop: false,
                slideshow: true,
                sync: "#carousel"
            });
            
            $('#property-slider .flexslider').flexslider({
                animation: "fade",
                slideshowSpeed: 6000,
                animationSpeed:	1300,
                directionNav: true,
                controlNav: false,
                keyboardNav: true
            });
        });
    </script>
    @yield('scripts')