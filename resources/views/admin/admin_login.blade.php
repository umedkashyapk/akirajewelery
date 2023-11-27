
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Evara Dashboard</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/asset/imgs/theme/favicon.svg')}}">
    <!-- Template CSS -->
    <link href="{{asset('/asset/css/main.css')}}" rel="stylesheet" type="text/css" />
</head>

<body>
    <main>
        <header class="main-header style-2 navbar">
            <div class="col-brand">
                <a href="index.html" class="brand-wrap">
                    <img src="{{asset('/asset/imgs/theme/logo.svg')}}" class="logo" alt="Evara Dashboard">
                </a>
            </div>
        </header>
        <section class="content-main mt-80 mb-80">
            <div class="card mx-auto card-login">
                <div class="card-body">
                    <h4 class="card-title mb-4">Admin Login</h4>
                    @if (\Session::get('error'))
                    <div class="alert alert-danger" role="alert">
                            {{ Session::get('error')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="close"></button>
                           <span aria-hidden="true">&times;</span>
                      </div>
                    @endif
                    <form action="{{route('check_user')}}" method="POST" >
                    @csrf 
                        <div class="mb-3">
                            <input class="form-control" name="email" id="email" value="{{old('email')}}" id="default-01" placeholder="Username or email" type="text">
                           
                        </div>
                        @error('email')
                        <div clacc='d-block text-danger' style="margin-top:-25px; margin-bottom:15px;color:red; ">
                           {{ $message }}
                        </div>
                        
                        @enderror
                         <!-- form-group// -->
                        <div class="mb-3">
                            <input class="form-control" name="password" id="password" placeholder="Password" type="password">
                            
                                
                        </div>
                        @error('password')
                        <div clacc='d-block text-danger' style="margin-top:-25px; margin-bottom:15px; color:red; ">
                           {{ $message }}
                        </div>
                        
                        @enderror
                        <!-- form-group// -->
                        <div class="mb-3">
                            <a href="#" class="float-end font-sm text-muted">Forgot password?</a>
                            <label class="form-check">
                                <input type="checkbox" class="form-check-input" checked="">
                                <span class="form-check-label">Remember</span>
                            </label>
                        </div> <!-- form-group form-check .// -->
                        <div class="mb-4">
                            <button type="submit" class="btn btn-primary w-100"> Login </button>
                        </div> <!-- form-group// -->
                    </form>   
                </div>
            </div>
        </section>
       
    </main>
    <script src="asset/js/vendors/jquery-3.6.0.min.js"></script>
    <script src="asset/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="asset/js/vendors/jquery.fullscreen.min.js"></script>
    <!-- Main Script -->
    <script src="asset/js/main.js " type="text/javascript"></script>
</body>

</html>