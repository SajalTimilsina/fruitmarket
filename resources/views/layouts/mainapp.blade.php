<!doctype html>

<head>
    @include('layouts.header-script')
    @include('layouts.header')

</head>

<body>
            
    @yield('inner-content')
      
    @include('layouts.footer')

    @include('layouts.footer-script')
    

</body>

</html>
