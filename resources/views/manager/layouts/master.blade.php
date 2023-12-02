@include('layouts.header')
<div class="wrapper">

    @include('manager.layouts.navbar-manager')
    @include('manager.layouts.sidebar-manager')


    @yield('content')



    @include('layouts.footer')
</div>
<!-- ./wrapper -->
@include('sweetalert::alert')
