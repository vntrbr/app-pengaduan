@include('layouts.navbar')
@include('layouts.sidebar')
    <div class="container-fluid">
        @yield('content')
    </div>
</div>
@include('layouts.footer')