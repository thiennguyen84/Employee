<!DOCTYPE html>
<html lang="en">
  <head>
    <title>HapoERP</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://localhost:8000/asset/fonts/themify-icons/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.google.com/specimen/Roboto?selection.family=Roboto">
    <link rel="stylesheet" type="text/css" href="http://localhost:8000/asset/css/style.css">
    <link rel="stylesheet" type="text/css" href="http://localhost:8000/css/style.css">
    <!-- Bootstrap -->
    <link href="http://localhost:8000/asset/css/bootstrap.min.css" rel="stylesheet">
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="http://localhost:8000/asset/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="http://localhost:8000/asset/owlcarousel/assets/owl.theme.default.min.css">
  </head>
  <body>
    <!-- header -->
    @include('header')

  <!-- body -->
    @yield('content')

    <!-- footer -->
    @include('footer')
     <!-- javascript -->
    <script src="http://localhost:8000/asset/vendors/jquery.min.js"></script>
    <script src="http://localhost:8000/asset/owlcarousel/owl.carousel.js"></script>
    <script src="http://localhost:8000/asset/js/script.js"></script>
  </body>
</html>