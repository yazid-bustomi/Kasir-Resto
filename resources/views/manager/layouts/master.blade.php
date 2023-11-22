@include('layouts.header')
<div class="wrapper">

    @include('layouts.navbar')
    @include('manager.layouts.sidebar-manager')



    @yield('content')



    @include('layouts.footer')
</div>
<!-- ./wrapper -->