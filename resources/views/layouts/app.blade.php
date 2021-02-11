@include('layouts.head')
    <body>
        @include('layouts.header')
        @yield('homeContent')
        @yield('content')
    </body>
</html>