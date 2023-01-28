<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SISTEMA DE CONTROL</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

   <!-- Favicon -->
   <link href="img/favicon.ico" rel="icon">

   <!-- Google Web Fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
   
   <!-- Icon Font Stylesheet -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

   <!-- Libraries Stylesheet -->
   <link href="{{URL::asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
   <link href="{{URL::asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

   <!-- Customized Bootstrap Stylesheet -->
   <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">

   <!-- Template Stylesheet -->
   <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">


   
</head>

<body>
   
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign In Start -->
        <div class="container-fluid">
            @yield('login')

        </div>
        <!-- Sign In End -->
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
   
    <script src="{{URL::asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <!-- Template Javascript -->
    <script src="{{URL::asset('js/main.js')}}"></script>

</body>

</html>