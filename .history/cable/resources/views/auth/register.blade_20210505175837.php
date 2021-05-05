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
                        <form action="{{route('register')}}" method="POST" enctype="multipart/form-data" name="formName"id="form_sample_1" class="form-horizontal">
                            @csrf


                            <div class="form-group">
                                <center>
                                    <p style="color: #ff2918"> {{Session::get('user_status')}}</p>
                                </center>

                                <input type="text" class="form-control" name="user_first_name"  placeholder="First Name " required>
                                @error('user_first_name')
                                <span class="error_color" style="color: #ff2714;">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"name="user_last_name" placeholder="Last Name " required>
                                @error('user_last_name')
                                <span class="error_color" style="color: #ff2714;">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="user_username" placeholder="UserName " required>
                                @error('user_username')
                                <span class="error_color" style="color: #ff2714;">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email " required>
                                @error('user_email')
                                <span class="error_color" style="color: #ff2714;">{{$message}}</span>
                                @enderror
                            </div>
                            <div  class="form-group">
                                <input type="password" class="form-control" name="password" placeholder=" Password " required>
                                {{--                  @error('password')--}}
                                {{--                  <span class="error_color">{{$message}}</span>--}}
                                {{--                  @enderror--}}
                            </div>

                            <div  class="form-group">
                                <input type="password" class="form-control"  placeholder=" Confirm Password " required>
                            </div>


                            <div class="form-group" id="verifyEmailCode">
                                <p id="formMsg" > </p>
                                {{--                    <input type="text" name="emailCore" placeholder="Enter Code" class="form-control"/>--}}

                            </div>

                            <button type="submit" onmouseover="" style="cursor: pointer;" class="sub-btn"> Sign Up </button>
                        </form>
                        <p class="hv-ac"> Have an account? <a href="{{route('login')}}"> Login Now </a> </p>
                    </div><!-- /.form-sec -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.bg-section -->



    {{Session::forget('user_status')}}
@endsection
