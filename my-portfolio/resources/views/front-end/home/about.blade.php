@extends('front-end.master')
@section('title')
    about
@endsection
@section('body')
    <div class="about-area m-lg-auto">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 no-padding">
                    <div class="mr-lg-auto">
                        <img src="{{ asset('/') }}/front-end/images/dd.jpg" alt="" class="img-fluid" >
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="about-title">
                                <h1>About Me</h1>
                                <p>I am Dedar Hossain, learning and working on web design and development. In this sector i have learned PHP(OOP,MVC,Laravel), BootStrap,HTML,CSS,JS/JQuery 
								and looking forward to learn new technologies.
                                    </br>
                                    </br>
									WEB design and web development is a vast area. and this is expanding rapidly.now web application is commonly 
									in use. In future this will use in every daily work.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="single-about-box">
                                <i class="fa fa-globe"></i>
                                <h2 class="font-weight-bold">WEB DESIGN</h2>
                                <p>BootStrap,HTML,CSS,JS/JQuery</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-about-box">
                                <i class="fa fa-globe"></i>
                                <h2 class="font-weight-bold">WEB DEVELOPMENT</h2>
                                <p>PHP(OOP,MVC,Laravel)</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-about-box">
                                <i class="fa fa-globe"></i>
                                <h2 class=" font-weight-bold">UX/UI Developer</h2>
                                <p>BootStrap,HTML,CSS,JS/JQuery</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="single-about-box">
                                <i class="fa fa-globe"></i>
                                <h2 class="font-weight-bold">JavaScript/jQuery</h2>
                                <p>BootStrap,HTML,CSS,JS/JQuery</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of col lg 7-->
            </div>
            <!--End of row-->
        </div>
    </div>

    <div id="skill" class="skill-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="skillbar">
                        <h1>My Skills</h1>
                        <p>I am learning and working on web design and development. In this sector i have learned PHP(OOP,MVC,Laravel), BootStrap,HTML,CSS,JS/JQuery and looking forward to learn new technologies. </p>
                        <a href="#" class="btn skill-btn">contact me</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="skill-progress">
                        <p>PHP</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                <p>90%</p>
                            </div>
                        </div>
                        <p>BootStrap</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                                <p>80%</p>
                            </div>
                        </div>
                        <p>JS/JQuery</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                <p>90%</p>
                            </div>
                        </div>
                        <p>Graphics Design</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                <p>70%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of col lg 6-->
            </div>
            <!--End of row-->
        </div>
        <!--End of container-->
    </div>


    @endsection
