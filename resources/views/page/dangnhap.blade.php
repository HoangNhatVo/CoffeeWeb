@extends('master')
@section('content')
    <title>Đăng nhập</title>
    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">Đăng nhập</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb">
                    <a href={{route('index')}}>Trang chủ</a> /
                    <span>Đăng nhập</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="container">
        <div id="content">
            <form action="{{route('login')}}" method="post" class="beta-form-checkout">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        @if(session('thongbao'))
                            <div class="alert alert-danger">
                                {{Session::get('thongbao')}}
                            </div>
                        @endif
                        <h4>Đăng nhập</h4>
                        <div class="space20">&nbsp;</div>
                        <div class="form-block">
                            <label for="email">Địa chỉ email*</label>
                            <input style="height:37px" type="email" name="email" required autofocus>
                        </div>
                        <div class="form-block">
                            <label for="phone">Mật khẩu*</label>
                            <input style="height: 34px; border:1px solid #e1e1e1" type="password" name="password" required>
                        </div>
                        <div class="form-block">
                            <button type="submit" class="btn btn-primary" style="background-color: #881a1a;border:none">Đăng nhập</button>
                        </div>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </form>
        </div> <!-- #content -->
    </div> <!-- .container -->
@endsection