
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
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-5 col-md-6 mt-4 mt-md-0">
                    <div class="form-sec">
                        <div class="card">
                            <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                            <div class="card-body">
                                @if (session('resent'))
                                    <div class="alert alert-success" role="alert">
                                        {{ __('A fresh verification link has been sent to your email address.') }}
                                    </div>
                                @endif

                                {{ __('Before proceeding, please check your email for a verification link.') }}
                                {{ __('If you did not receive the email') }},
                                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                                </form>
                            </div>
                        </div>
                        <div class="act-sec mt-1">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="">Keep Loged in
                                </label>
                            </div>
                            <div class="forget">
                                <a href="#">Forget Password? </a>
                            </div><!-- /.forget -->
                        </div><!-- /.act-sec -->
                        
                        <a href="{{route('userRegister')}}" class="create-btn mt-4"> Create New Account </a>
                    </div><!-- /.form-sec -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.bg-section -->


@endsection





