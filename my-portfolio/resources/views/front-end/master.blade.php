
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Dedar Hossain">

    <title>@yield('title')</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/') }}/front-end/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <!--<link href="css/full-slider.css" rel="stylesheet">-->
    <link rel="stylesheet" href="{{ asset('/') }}/front-end/gallery/baguetteBox.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}/front-end/gallery/gallery-grid.css">


        <link href="{{ asset('/') }}/front-end/css/my-style.css" rel="stylesheet">
        <link href="{{ asset('/') }}/front-end/css/font-awesome.min.css" rel="stylesheet">





</head>

<body>
<div class="m-5">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand font-italic " href="#"><h3>Dedar Hossain</h3></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('/') }}">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('/about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('/portfolio') }}">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('/gallery') }}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('/contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</div>
@yield('body')


<div class="footer-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h6 class="text-light">
                    All Rights Reserved || Managed By Dedar Hossain
                </h6>
                <div class="footer-social-links m-3">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript -->


<script src="{{ asset('/') }}/front-end/js/jquery.min.js"></script>
<script src="{{ asset('/') }}/front-end/js/bootstrap.bundle.min.js"></script>

</body>

</html>
