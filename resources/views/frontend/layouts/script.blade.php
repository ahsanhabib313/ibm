<!-- JS here -->
<script type="text/javascript" src="{{ asset('frontend/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/vendor/jquery-2.2.4.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/frontend-app.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/metisMenu.min.js') }}"></script>
{{-- <script type="text/javascript" src="{{asset('frontend/assets/js/jquery.nice-select.js')}}"></script> --}}
<script type="text/javascript" src="{{ asset('frontend/assets/js/ajax-form.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/waypoints.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/jquery.scrollUp.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/jquery.easypiechart.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/plugins.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/main.js') }}"></script>

<script type="text/javascript">
    $('#navbarSupportedContent').find('li').on('click', function() {
        $('#scrollUp').trigger('click')
    });
    // $('#navbarSupportedContent li ul.dropdown-menu').find('li a').on('click', function(){$('#scrollUp').trigger('click')});
</script>

@stack('script')
