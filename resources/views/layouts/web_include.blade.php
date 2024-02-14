<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta quiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="F7inAp89E3p-8kyY0-Fq-m7r4zzbkVa7IAa0x8DRxD8" />
    <meta name="meta_title" content = "@yield('meta_title')">
    <meta name="description" content = "@yield("meta_desctipiton")">
    <link rel="canonical" href={{ url()->current() }} />
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />


    <link rel="icon" href="{{ asset('web_asset/logos/logo_fav-con.png') }}" type="image/x-icon" />
    <title>@yield('title')</title>

    @include('layouts.web.header')
       
        <!-- HTML5 shim and Respond.js') }} for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js') }} doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        {{-- <script src="{{ asset('web_asset/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js') }}"></script> --}}
        {{-- <script src="{{ asset('web_asset/https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script> --}}
        <![endif]-->

        <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WT74VB5N');</script>
        <!-- End Google Tag Manager -->
</head>

<body>
 {{-- ================ --}}

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WT74VB5N"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
{{-- ================ --}}

<!--================Header Menu Area =================-->
   @include('layouts.web.navbar')
<!--================End Header Menu Area =================-->

@yield('view-area')

    
    @include('layouts.web.footer')
</body>

</html>
