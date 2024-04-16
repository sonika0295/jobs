<!doctype html>
<html lang="en">

@include('partial.head')

<body>

    @include('partial.header')

    @yield('content')


    @include('partial.footer')
</body>

</html>


@stack('scripts')
