@extends('front-end.master')
@section('title')
    Contact
@endsection
@section('body')

    <div class="address m-5" >
        <div class="container">
            <h3 class="text-info py-5">Contact Me</h3>
            <div class="row">
                <div class="col-md-6 float-left" data-wow-delay=".5s">
                    <div class="address-grid">
                        <h4>Get In Touch</h4>
                        <form action="#" method="post">
                            <input type="text" placeholder="Name" name="name" required="">
                            <input type="email" placeholder="Email" name="email" required="">
                            <input type="text" placeholder="Subject" name="subject" required="">
                            <textarea placeholder="Message" required=""></textarea>
                            <input type="submit" value="SEND">
                        </form>
                    </div>

                </div>
                <div class="col-md-6 float-left ">
                    <div class="address-info wow fadeInRight animated" data-wow-delay=".5s">
                        <h4>Address</h4>
                        <p>Boro Moghbazar ,Dhaka, Bangladesh</p>
                    </div>
                    <div class="address-info address-mdl wow fadeInRight animated" data-wow-delay=".7s">
                        <h4>Phone </h4>
                        <p>+880 151 561 2145</p>
                        <p>+880 188 471 8188</p>
                    </div>
                    <div class="address-info agileits-info wow fadeInRight animated" data-wow-delay=".6s">
                        <h4>Mail</h4>
                        <p><a href="mailto:example@mail.com"> dedar.mithu@gmail.com</a></p>
                        <p><a href="mailto:example@mail.com"> dedar555@gmail.com</a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection