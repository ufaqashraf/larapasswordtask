@extends('Frontend.layouts.app')


@section('content')


    <section class="bg-section">
        <div class="container">
            <div class="row justify-content-center  mt-4">
                <div class="col-lg-5 col-md-6">
                    <div class="innner-con">
                        <h1 class="main-title"> The power is in your hands. </h1><!-- /.main-title -->
                        <p class="sub-title mt-4"> A little more conversation, a little less aggravation! Amazing support. </p><!-- /.sub-title -->
                        <p class="sub-title mt-4"> Tired of being unfairly targeted, bullied, or penalized by big tech social networks? Join now to
                            freely express yourself. </p>
                        <div class="btn-con mt-5">
                            <a href="#" class="app-store-btn mr-2">  <i class="fab fa-apple" aria-hidden="true"></i> App Store </a>
                            <a href="#" class="goole-store-btn"> <i class="fab fa-google-play"></i> Google Play </a>
                        </div><!-- /.btn-con -->
                    </div><!-- /.innner-con -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-5 col-md-6 mt-4 mt-md-0">
                    <div class="form-sec">
                        @if (session()->has('message'))
                            <span class="error_color" style="color: #ff2714;">{{session()->get('message')}}</span>
                        @endif
                        <form action="{{route('login')}}" method="POST"  name="formName"id="form_sample_2" class="form-horizontal">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email " required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder=" Password " required>
                            </div>
                            <button type="submit" class="sub-btn"> Sign In </button>
                        </form>
                        <div class="act-sec mt-1">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="">Keep Loged in
                                </label>
                            </div>
                            <div class="forget">
{{--                                <a href="{{route('userReset')}}">Forget Password? </a>--}}
                            </div><!-- /.forget -->
                        </div><!-- /.act-sec -->
                        <a href="{{route('register')}}" class="create-btn mt-4"> Create New Account </a>
                    </div><!-- /.form-sec -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.bg-section -->

    {{Session::forget('user_status')}}
@endsection
