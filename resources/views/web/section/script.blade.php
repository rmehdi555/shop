<!-- JS Part Start-->
<script type="text/javascript" src="{{asset('web/2020/js/jquery-2.1.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/2020/js/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/2020/js/jquery.easing-1.3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/2020/js/jquery.dcjqaccordion.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/2020/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/2020/js/custom.js')}}"></script>



<script type="text/javascript" src="{{asset('web/2020/js/jquery.elevateZoom-3.0.8.min.js')}}"></script>
<script type="text/javascript" src="{{asset('web/2020/js/swipebox/lib/ios-orientationchange-fix.js')}}"></script>
<script type="text/javascript" src="{{asset('web/2020/js/swipebox/src/js/jquery.swipebox.min.js')}}"></script>

<!-- JS Part End-->

<script type="text/javascript">
// Elevate Zoom for Product Page image
$("#zoom_01").elevateZoom({
gallery:'gallery_01',
cursor: 'pointer',
galleryActiveClass: 'active',
imageCrossfade: true,
zoomWindowFadeIn: 500,
zoomWindowFadeOut: 500,
zoomWindowPosition : 11,
lensFadeIn: 500,
lensFadeOut: 500,
loadingIcon: 'image/progress.gif'
});
//////pass the images to swipebox
$("#zoom_01").bind("click", function(e) {
var ez =   $('#zoom_01').data('elevateZoom');
$.swipebox(ez.getGalleryList());
return false;
});
</script>
<!-- JS Part End--
</body>
</html>