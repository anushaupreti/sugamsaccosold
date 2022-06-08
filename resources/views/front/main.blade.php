<!doctype html>
<html lang="en">

<head>
    @include('front.includes.head')
</head>

<body>
    <!-- Start Header -->
    @include('front.includes.header')
    <!-- End Header -->

    @yield('content')

    <!-- Start Footer -->
    @include('front.includes.footer')
    <!-- End Footer -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script> -->

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!-- jQuery (neces sary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('front/js/jquery.min.js') }}"></script>
    <!-- Bootsrap JS -->
    <script src="{{ asset('front/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Select2 JS -->
    <script src="{{ asset('front/assets/select2/js/select2.min.js') }}"></script>
    <!-- Match Height JS -->
    <script src="{{ asset('front/assets/matchHeight/js/matchHeight-min.js') }}"></script>
    <!-- Bxslider JS -->
    <script src="{{ asset('front/assets/bxslider/js/bxslider.min.js') }}"></script>
    <!-- Waypoints JS -->
    <script src="{{ asset('front/assets/waypoints/js/waypoints.min.js') }}"></script>
    <!-- Counter Up JS -->
    <script src="{{ asset('front/assets/counterup/js/counterup.min.js') }}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{ asset('front/assets/magnific-popup/js/magnific-popup.min.js') }}"></script>
    <!-- Owl Carousal JS -->
    <script src="{{ asset('front/assets/owl-carousel/js/owl.carousel.min.js') }}"></script>
    <!-- Modernizr JS -->
    <script src="{{ asset('front/js/modernizr.custom.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('front/js/custom.js') }}"></script>

</body>

</html>