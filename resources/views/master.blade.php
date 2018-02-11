<!DOCTYPE html>
<html lang="en">
  <head>
    @yield('title')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{!! asset('asset/fonts/themify-icons/themify-icons/themify-icons.css') !!}">
    <link rel="stylesheet" type="text/css" href="https://fonts.google.com/specimen/Roboto?selection.family=Roboto">
    <link rel="stylesheet" type="text/css" href="{!! asset('asset/css/style.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! asset('css/style.css') !!}">
    <!-- Bootstrap -->
    <link href="{!! asset('asset/css/bootstrap.min.css') !!}" rel="stylesheet">
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="{!! asset('asset/owlcarousel/assets/owl.carousel.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('asset/owlcarousel/assets/owl.theme.default.min.css') !!}">
  </head>
  <body>
    <!-- header -->
    @include('header')
    <!-- body -->
    @yield('content')
     <!-- javascript -->
    @yield('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{!! asset('asset/vendors/jquery.min.js') !!}"></script>
    <script src="{!! asset('asset/owlcarousel/owl.carousel.js') !!}"></script>
    <script src="{!! asset('asset/js/script.js') !!}"></script>
  </body>
</html>