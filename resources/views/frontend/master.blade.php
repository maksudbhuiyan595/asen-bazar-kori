<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Asen-Bazar-Kori</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('ui/frontend')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('ui/frontend')}}/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    @include('frontend.layouts.includes.topbar')
    <!-- Topbar End -->


    <!-- Navbar Start -->
   @include('frontend.layouts.includes.navbar')
    <!-- Navbar End -->


  <!-- main body start -->
    @yield('content')
  <!-- main body end -->


    <!-- Footer Start -->
   @include('frontend.layouts.includes.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('ui/frontend')}}/lib/easing/easing.min.js"></script>
    <script src="{{asset('ui/frontend')}}/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="{{asset('ui/frontend')}}/mail/jqBootstrapValidation.min.js"></script>
    <script src="{{asset('ui/frontend')}}/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="{{asset('ui/frontend')}}/js/main.js"></script>
</body>

</html>