@extends('Frontend.layouts.app')


@section('content')


    <section class="bg-section">
        <div class="container">
            <div class="row justify-content-center  mt-4">
                <div class="col-lg-5 col-md-6">
                   
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-5 col-md-6 mt-4 mt-md-0">
                    <div class="form-sec">
                        <form action="{{route('resetChangePassword')}}" method="POST" enctype="multipart/form-data" name="formName" id="form_sample_2" class="form-horizontal">
                            @csrf


                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password" required/>
                            </div>


                            <div class="form-group">
                                <input type="password" name="c_password" class="form-control" placeholder="Confirm it." required/>
                            </div>

                            <div class="form-group">

                            <p id="formMsg"></p>
                            </div>

                            <a onmouseover="" style="cursor: pointer;" class="sub-btn" onclick="resetPasswordForm()"> Update </a>


                            <div class="form-group">
                                <br>
                                <a onmouseover="" style="cursor: pointer; color: white" onClick="window.location.reload();">Resend Link.?</a>
                            </div>
                            <input type="hidden" name="user_id" value="{{$user_id}}">
                        </form>



                        <a href="{{route('userReset')}}" class="create-btn mt-4"> Back </a>
                    </div><!-- /.form-sec -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.bg-section -->

@endsection
