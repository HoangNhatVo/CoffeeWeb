@extends('admin.layout.index')
@section('content')

    <title>Thêm Admin</title>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 style="color: #881a1a;" class="page-header">Admin
                        <small>Thêm</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    @if(count($errors)>0)
                        <div class="alert alert-danger" style="font-weight: bold;">
                            @foreach($errors->all() as $err)
                            <i class="fa fa-times"></i>
                                {{$err}}<br>
                            @endforeach
                        </div>
                    @endif
                    @if(session('thongbao'))
                        <div class="alert alert-success" style="font-weight: bold;">
                            <i class="fa fa-check"></i>
                            {{Session::get('thongbao')}}
                        </div>
                    @endif
                    <form action="{{route('admin-themuser')}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="form-group">
                            <label>Họ và tên</label>
                            <input class="form-control" name="full_name" placeholder="Nhập họ và tên" autofocus/>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Nhập email"/>
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu"/>
                        </div>
                        <div class="form-group">
                            <label>Xác nhận mật khẩu</label>
                            <input type="password" class="form-control" name="re_password" placeholder="Nhập lại mật khẩu"/>
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="number" class="form-control" name="phone" placeholder="Nhập số điện thoại"/>
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input class="form-control" name="address" placeholder="Nhập địa chỉ"/>
                        </div>
                        <div class="form-group">
                            <label>Quyền quản trị</label>
                            <select class="form-control" name="isAdmin" disabled="disabled">
                                <option value="Không">Không</option>
                                <option value="Có" selected="selected">Có</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-default" id="btn_style_admin">Thêm Admin</button>
                        <!-- <button type="reset" class="btn btn-default" id="btn_style_admin">Reset</button> -->
                        <a class="btn btn-default" id="btn_style_admin" href="{{route('admin-dsuser')}}">Trở về</a>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@endsection