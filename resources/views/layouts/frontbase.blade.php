<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css" type="text/css">

    @yield('head')
</head>


<body>
    @include('home.header')
    @yield('slider')
    @yield('content')
    @include('home.footer')
    @yield('footer')

</body>

</html>