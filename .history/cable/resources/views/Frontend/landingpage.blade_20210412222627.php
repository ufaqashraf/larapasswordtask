@extends('Frontend.layouts.app')


@section('content')


    <section class="bg-section">
        <div class="container">
            <div class="site-logo">
                <img src="{{asset('/front/assets/img/Full_Color_White_logo.png')}}" class="logo-1" alt="logo"> <br>
                <img src="{{asset('/front/assets/img/fs-signin-logo.png')}}" class="logo-2" alt="logo">
            </div><!-- /.site-logo -->
            <div class="row justify-content-center  mt-4">
                <div class="col-lg-5 col-md-6">
                    <div class="innner-con">
                        <h1 class="main-title"> The power is in your hands. </h1><!-- /.main-title -->
                        <p class="sub-title mt-4"> A little more conversation, a little less aggravation! Amazing support. </p><!-- /.sub-title -->
                        <p class="sub-title mt-4"> Tired of being unfairly targeted, bullied, or penalized by big tech social networks? Join now to
                            freely express yourself. </p>
{{--                        <div class="btn-con mt-5">--}}
{{--                            <a href="#" class="app-store-btn mr-2">  <i class="fab fa-apple" aria-hidden="true"></i> App Store </a>--}}
{{--                            <a href="#" class="goole-store-btn"> <i class="fab fa-google-play"></i> Google Play </a>--}}
{{--                        </div><!-- /.btn-con -->--}}
                    </div><!-- /.innner-con -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-5 col-md-6 mt-4 mt-md-0">
                    <h1 class="main-title"> COMMING SOON </h1><!-- /.main-title -->
                    <h2 class="sub-title " style="color: #cc0a00"> The website is going to Live Soon. </h2><!-- /.sub-title -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.bg-section -->


@endsection
