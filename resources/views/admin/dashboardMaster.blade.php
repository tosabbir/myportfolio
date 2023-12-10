@include('admin.includes.header')
<!-- End Header -->

<!-- Main Wrapper -->
<div class="main-wrapper">
   <!-- Sidebar -->
      @include('admin.includes.sidebar')
   <!-- End Sidebar -->

   <!-- Main Content -->
    <div class="main-content">
        <div class="container-fluid">
        @yield('content')
        </div>
    </div>

   <!-- End Main Content -->
</div>
<!-- End Main Wrapper -->

<!-- Footer -->
  @include('admin.includes.footer')
<!-- End Footer -->
</div>
<!-- End wrapper -->

{{-- js link here  --}}

@include('admin.includes.js')
