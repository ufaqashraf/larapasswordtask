@extends('Frontend.layouts.app')


@section('content')


    <section class="bg-section">
        <div class="container">
            <div class="site-logo">
                <img src="{{asset('/front/assets/img/Full_Color_White_logo.png')}}" class="logo-1" alt="logo"> <br>
                <img src="{{asset('/front/assets/img/fs-signin-logo.png')}}" class="logo-2" alt="logo">
            </div><!-- /.site-logo -->
            <div class="row justify-content-center  mt-4">
                <div class="col-lg-5 col-md-6 mt-4 mt-md-0">

                    <div class="form-sec">
                        <h2 class="main-title" style="color: whitesmoke"> Find Your Account </h2><!-- /.main-title -->--}}
                        <form action="{{route('userResetPassSendMail')}}" method="POST"  name="formName"id="form_sample_2" class="form-horizontal">
                            @csrf
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Verify Email " required>
                                @error('user_email')
                                <span class="error_color" style="color: #ff2714;">{{$message}}</span>
                                @enderror
                            </div>
                            <button type="submit" class="sub-btn"> Get Link </button>
                        </form>

                        <a href="{{route('userLogin')}}" class="create-btn mt-4"> Back </a>
                    </div><!-- /.form-sec -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.bg-section -->

@endsection
