@include('layouts.head')
    <body>
        @include('layouts.header')
        @yield('homeContent')
        @yield('content')
        @include('layouts.footer')
    </body>
</html>