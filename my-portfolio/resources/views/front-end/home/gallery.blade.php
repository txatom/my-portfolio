
@extends('front-end.master'))
@section('title')
    gallery
@endsection
@section('body')
    <div class="container-fluid m-auto">

        <div class="tz-gallery">

            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="{{ asset('/') }}/front-end/gallery/images/1.jpg">
                        <img src="{{ asset('/') }}/front-end/gallery/images/1.jpg" height="250" width="250" alt="Park">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="{{ asset('/') }}/front-end/gallery/images/2.jpg">
                        <img src="{{ asset('/') }}/front-end/gallery/images/2.jpg" height="250" width="250" alt="Bridge">
                    </a>
                </div>
                <div class="col-sm-12 col-md-4">
                    <a class="lightbox" href="{{ asset('/') }}/front-end/gallery/images/3.jpg">
                        <img src="{{ asset('/') }}/front-end/gallery/images/3.jpg" height="250" width="250" alt="Tunnel">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="{{ asset('/') }}/front-end/gallery/images/4.jpg">
                        <img src="{{ asset('/') }}/front-end/gallery/images/4.jpg" height="250" width="250" alt="Coast">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="{{ asset('/') }}/front-end/gallery/images/5.jpg">
                        <img src="{{ asset('/') }}/front-end/gallery/images/5.jpg"height="250" width="250" alt="Rails">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="{{ asset('/') }}/front-end/gallery/images/6.jpg">
                        <img src="{{ asset('/') }}/front-end/gallery/images/6.jpg" height="250" width="250" alt="Traffic">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="{{ asset('/') }}/front-end/gallery/images/7.jpg">
                        <img src="{{ asset('/') }}/front-end/gallery/images/7.jpg" height="250" width="250" alt="Rocks">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="{{ asset('/') }}/front-end/gallery/images/8.jpg">
                        <img src="{{ asset('/') }}/front-end/gallery/images/8.jpg" height="250" width="250" alt="Benches">
                    </a>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a class="lightbox" href="{{ asset('/') }}/front-end/gallery/images/9.jpg">
                        <img src="{{ asset('/') }}/front-end/gallery/images/9.jpg" height="250" width="250" alt="Sky">
                    </a>
                </div>
            </div>

        </div>

    </div>

    <script src="{{ asset('/') }}/front-end/gallery/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.tz-gallery');
    </script>

    <script src="{{ asset('/') }}/front-end/gallery/baguetteBox.min.js"></script>



@endsection







<body>

</body>
</html>