<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Laravel Framework 5.x">
    <meta name="author" content="">
    <base href="{{asset('')}}">

    <title>Admin Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="admin-assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="admin-assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="admin-assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="admin-assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="admin-assets/dist/css/style.css" rel="stylesheet">

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default" style="border-color: #881a1a;">
                <div class="panel-heading" style="background-color: #881a1a;">
                    <h3 class="panel-title" style="text-align: center; font-weight: bold; color: #fff;">Login</h3>
                </div>
                <div class="panel-body">
                    @if(count($errors)>0)
                        <div class="alert alert-danger" style="font-weight: bold;">
                            @foreach($errors->all() as $err)
                            <i class="fa fa-times"></i>
                                {{$err}}<br>
                            @endforeach
                        </div>
                    @endif
                    @if(session('thongbao'))
                        <div class="alert alert-danger" style="font-weight: bold;">
                            <i class="fa fa-times"></i>
                            {{Session::get('thongbao')}}
                        </div>
                    @endif
                    <form role="form" action="{{route('admin-login')}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Email" name="email" autofocus >
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" autofocus>
                            </div>
                            <button type="submit" name="Login" class="btn btn-lg btn-success btn-block" id="btnLogin">Đăng nhập</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="admin-assets/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="admin-assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="admin-assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="admin-assets/dist/js/sb-admin-2.js"></script>

</body>

</html>
