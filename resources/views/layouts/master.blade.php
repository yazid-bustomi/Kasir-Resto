@include('layouts.header')
<div class="wrapper">

    @include('layouts.navbar')
    @include('layouts.sidebar')



    @yield('content')



    @include('layouts.footer')
</div>
<!-- ./wrapper -->