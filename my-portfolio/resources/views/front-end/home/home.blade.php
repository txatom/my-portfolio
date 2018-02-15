@extends('front-end.master')
@section('title')
    Home
    @endsection
@section('body')


<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox" style="background-image: url('{{ asset('/') }}/front-end/images/dedar-boat.jpg');background-size: cover;background-size: 100% 100%;">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active  " >
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="font-weight-bold">Web Developer</h3>
                    <h4 >
                        I am Creating Amazing  Responsive Website with Front End and Back End.
                    </h4>
                </div>
            </div>

            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="font-weight-bold">UX/UI Developer</h3>
                    <h4 >
                        I develop website using Bootstrap front-end framework..</h4>
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="font-weight-bold">JavaScript/jQuery</h3>
                    <h4>
                        jQuery: Write Less, Do More...</h4>
                </div>
            </div>
        </div>
        <!--<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">-->
        <!--<span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
        <!--<span class="sr-only">Previous</span>-->
        <!--</a>-->
        <!--<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">-->
        <!--<span class="carousel-control-next-icon" aria-hidden="true"></span>-->
        <!--<span class="sr-only">Next</span>-->
        <!--</a>-->
    </div>

</header>
@endsection