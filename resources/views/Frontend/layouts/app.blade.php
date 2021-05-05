<!doctype html>
<html lang="en">
<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/front/assets/css/bootstrap.min.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('/front/assets/css/style.css')}}">

</head>
<body>



@yield('content')





<footer class="footer">
    <div class="container">
        <div class="footer-list">
            <ul>
                <li> <a href="#"> About </a> </li>
                <li> <a href="#"> Help </a> </li>
                <li> <a href="#"> Term of Use </a> </li>
                <li> <a href="#"> Privacy Policy </a> </li>
                <li> <a href="#"> Cookies </a> </li>
                <li> <a href="#"> Advertising </a> </li>
            </ul>
        </div><!-- /.footer-list -->
        <p class="copy-text">
            Copyrights © 2019. Fyrestream. All Rights Reserved.
        </p><!-- /.copy-text -->
    </div><!-- /.container -->
</footer><!-- /.footer -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script src="{{asset('admin_backend_assets/assets/js/users_management/singupUser.js')}}"></script>
<script src="{{asset('admin_backend_assets/assets/js/basic_single_validations/confirmPassword.js')}}"></script>

</body>
</html>
