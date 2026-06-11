<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        @include('p4.layouts.header')
        <div style="margin-top: 20px; margin-bottom: 20px">
            @yield('content') 
        </div>
        @include('p4.layouts.daftar_nilai')
        @include('p4.layouts.footer')
    </body>
</html>