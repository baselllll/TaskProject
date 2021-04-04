<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Login</title>

    <!-- Bootstrap -->
    <link href="{{ url('adminpanel') }}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ url('adminpanel') }}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ url('adminpanel') }}/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ url('adminpanel') }}/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ url('adminpanel') }}/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>
<div class="container">
    <div class="row">
        <div class="col-lg-4" style="margin-top: 120px;margin-left: 20px">
            <img style="border-radius: 170px" src="http://www.smartappsuae.ae/common/admin/img/1450785747-46b5e8314455360ce7bdfc155e88be9e64.jpg" width="400px" height="250px">
        </div>
        <div class="col-lg-6 text-center" style="margin-top: 120px;padding-top:30px;color: #0D3349">
                @if(Session::has('message'))
                            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                        @endif
                    <form action="{{ route('admin_post') }}" method="post">
                        {{csrf_field()}}
                        <h1>Admin Login</h1>
                        <div class="form-group">
                            <input type="text" class="form-control" style="border-radius: 10px" name="email" placeholder="Email" required="" autocomplete="false" />
                        </div>
                            <div class="form-group">
                                <input type="password" style="border-radius: 10px" class="form-control" name="password" placeholder="Password" required="" autocomplete="false" />
                            </div>
                            <div>
                                <button type="submit" class="btn btn-success btn-lg" href="">Log in</button>
                                <br>
                                <a class="reset_pass" href="#">Lost your password?</a>
                            </div>

                            <div class="clearfix"></div>

                            <div class="separator">

                                <div class="clearfix"></div>
                                <br />

                                <div>
                                
                                    <p>©{{\Illuminate\Support\Facades\Date::now()}} All Rights Reserved ENG: Basel osama</p>
                                </div>
                            </div>
                        </form>
</div>
    </div>
</div>
</div>
</body>
</html>
