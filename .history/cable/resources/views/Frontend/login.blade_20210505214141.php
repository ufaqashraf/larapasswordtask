@extends('Frontend.layouts.app')


@section('content')


    <section class="bg-section">
    <div class="container">
      <div class="row justify-content-center  mt-4">
        <div class="col-lg-5 col-md-6">
         
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-5 col-md-6 mt-4 mt-md-0">
          <div class="form-sec">
              <p style="color: green"> {{Session::get('user_status')}}</p>
            <form action="{{route('register')}}" method="POST"  name="formName"id="form_sample_2" class="form-horizontal">
                @csrf
              <div class="form-group">
                <input type="email" name="user_email" class="form-control" placeholder="Email " required>
                  @error('user_email')
                  <span class="error_color" style="color: #ff2714;">{{$message}}</span>
                  @enderror
              </div>
              <div class="form-group">
                <input type="password" name="user_password" class="form-control" placeholder=" Password " required>
                  @error('user_password')
                  <span class="error_color" style="color: #ff2714;">{{$message}}</span>
                  @enderror
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
                <a href="{{route('userReset')}}">Forget Password? </a>
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

{{Session::forget('user_status')}}
@endsection
