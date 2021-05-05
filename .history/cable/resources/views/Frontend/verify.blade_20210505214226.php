
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
                        <p class="privay-txt">
                            Fyrestream is an entertainment social network and we respect
                            your privacy. We do not re-distribute or sell your personal
                            information to third-party organizations. Fyrestream will not
                            disclose, without your consent, personal information collected
                            about you, except for certain explicit circumstances in which
                            disclosure is required by law. Read our
                            <a href="#">Privacy Policy</a> for more. By entering this site,
                            you agree to our <a href="#">Terms of Use</a>
                        </p>
                        <a href="{{route('userRegister')}}" class="create-btn mt-4"> Create New Account </a>
                    </div><!-- /.form-sec -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.bg-section -->


@endsection





