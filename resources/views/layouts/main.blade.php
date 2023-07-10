<!DOCTYPE html>
<html lang="en">

 @include('shared.head')

<body>

  <!-- ======= Header ======= -->
    @include('shared.nav')

    @include('shared.side')

  <main id="main" class="main">
    @yield('content')
  </main><!-- End #main -->

    @include('shared.foot')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  @yield('scripts')
  @include('shared.scripts')

</body>

</html>



