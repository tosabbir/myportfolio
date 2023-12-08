    @include('admin.includes.header')
      <!-- End Header -->

      <!-- Main Wrapper -->
      <div class="main-wrapper">
         <!-- Sidebar -->
            @include('admin.includes.sidebar')
         <!-- End Sidebar -->

         <!-- Main Content -->
            @include('admin.includes.mainBody')
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
