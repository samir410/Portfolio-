<!DOCTYPE html>
<html lang="en">

@include('include.head')

<body>
  

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  @include('include.header')

 <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  @include('section.hero')<!-- End Hero -->

  <!--starrt main section-->

  @yield('content')
<!-- End #main -->

  <!-- ======= Footer ======= -->
@include('include.footer')
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('frontend/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('frontend/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/typed.js/typed.min.js')}}"></script>
  <script src="{{asset('frontend/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('frontend/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('frontend/js/main.js')}}"></script>

</body>

</html>