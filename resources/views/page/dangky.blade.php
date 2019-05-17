@extends('master')
@section('content')
    <title>Đăng ký</title>
    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">Đăng ký</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb">
                    <a href={{route('index')}}>Trang chủ</a> /
                    <span>Đăng ký</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="container">
        <div id="content">

            <form action="{{route('regiser')}}" method="post" class="beta-form-checkout">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        @if(count($errors)>0)
                            <div class="alert alert-danger" style="font-weight: bold;">
                                <!-- <i class="fa fa-times"></i> -->
                                @foreach($errors->all() as $err)
                                <i class="fa fa-times"></i>
                                    {{$err}}
                                    <br>
                                @endforeach
                            </div>
                        @endif
                        @if(session('thongbao'))
                            <div class="alert alert-success" style="font-weight: bold;">
                                <i class="fa fa-check"></i>
                                {{Session::get('thongbao')}}
                            </div>
                        @endif
                        <h4>Thông tin đăng ký</h4>
                        <div class="space20">&nbsp;</div>

                        <div class="form-block">
                            <label for="email">Địa chỉ email*</label>
                            <input  type="email" name="email" required autofocus style="height:37px;border-radius: 4px;">
                        </div>

                        <div class="form-block">
                            <label for="your_last_name">Họ và tên*</label>
                            <input style="height:37px; border-radius: 4px;" type="text" name="full_name" required>
                        </div>

                        <div class="form-block">
                            <label for="adress">Địa chỉ*</label>
                            <input style="height:37px; border-radius: 4px;" type="text" name="address" required>
                        </div>

                        <div class="form-block">
                            <label for="phone">Số điện thoại*</label>
                            <input style="border:1px solid #e1e1e1;height: 37px; border-radius: 4px;" type="number" name="phone" required>
                        </div>
                        <div class="form-block">
                            <label for="phone">Mật khẩu*</label>
                            <input style="border:1px solid #e1e1e1;height: 37px; border-radius: 4px;"  type="password" name="password" required>
                        </div>
                        <div class="form-block">
                            <label for="phone">Nhập lại mật khẩu*</label>
                            <input style="border:1px solid #e1e1e1;height: 37px; border-radius: 4px;"  type="password" name="re_password" required>
                        </div>
                        <div class="form-block">
                            <!-- <button style="background-color: #881a1a;border:none; " type="submit" class="btn btn-primary">Đăng ký</button> -->
                            <button id="btn_stylenew" type="submit" class="btn btn-primary">Đăng ký
                            </button>
                        </div>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </form>
        </div> <!-- #content -->
    </div> <!-- .container -->
@endsection