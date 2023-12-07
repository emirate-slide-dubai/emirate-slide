<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta quiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,scale=1">

    <link rel="icon" href="{{ asset('web_asset/img/fav-icon.png') }}" type="image/x-icon" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>

    @include('layouts.web.header')
       
        <!-- HTML5 shim and Respond.js') }} for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js') }} doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        {{-- <script src="{{ asset('web_asset/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js') }}"></script> --}}
        {{-- <script src="{{ asset('web_asset/https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script> --}}
        <![endif]-->
</head>

<body>
 
<!--================Header Menu Area =================-->
   @include('layouts.web.navbar')
<!--================End Header Menu Area =================-->

@yield('view-area')
    
    @include('layouts.web.footer')
</body>

</html>
