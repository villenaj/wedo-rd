<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WeDo</title>
    {{-- <link rel="icon" type="image/x-icon" href="https://th.bing.com/th/id/R.e7e4d800b99f44d0a4a829f5126ca862?rik=JQWcj5P8Ymgwpw&riu=http%3a%2f%2fwedo.russnino.com%2fwp-content%2fuploads%2f2018%2f03%2flogo-1.png&ehk=Beuc%2b0ybW0GoeV6KXIF7GdgrETR38wHIsB%2bRdgp%2fP%2bA%3d&risl=&pid=ImgRaw&r=0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://unpkg.com/axios@0.27.0/dist/axios.min.js"></script>
    <script src="{{ asset('js/login.js') }}" defer></script>
    
    <style>
        body {
                background-image: url("{{ asset('img/bg2.jpg')}}");
                background-repeat: no-repeat;
                background-size: cover;
                height: 100%;  
                width: 100%;
                /* position: relative; */
            }

        .card{
            height: auto; 
            width: auto;
        }
    </style>
</head>
<body id="/login">
    <!-- <div class="container card-body p-5 m-5 shadow p-3 mb-5 bg-body-tertiary rounded" style="max-height: 500px"> -->
    <div class="row justify-content-center align-items-center">
        <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="{{ asset('img/logo.png')}}" alt="wedo" height="300px" width="500px">
        </div>
        <div class="col-md-8 col-lg-4 col-xl-6 mt-5 pt-5">
            <div class="card p-1 shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                <div class="container p-5">
                    <form id="frmLogin">
                        <img src="{{ asset('img/login.jpg')}}" alt="login" height="100px" class="mx-auto d-block mt-4">
                            <h3 class="text-center">Administrator Login</h3>
                            <div class="form-floating">
                                <input  type="email" name="username" class="form-control form-control-user mb-1" id="floatingInput" placeholder="name@example.com" value="{{ old('username')}}">
                                <label for="floatingInput">Email address</label>
                                <span class="text-danger small error-text username_error"></span>
                            </div>
                            <br>
                            <div class="form-floating">
                                <input type="password" name="password" class="form-control form-control-user mb-3" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                                <span class="text-danger small error-text password_error"></span>
                            </div>
    
                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="button" id="btnLogin" class="btn btn-danger btn-lg "
                            style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
    
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>