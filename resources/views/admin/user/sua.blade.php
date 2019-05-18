@extends('admin.layout.index')
@section('content')

    <title>Sửa người dùng {{$user->full_name}}</title>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 style="color: #881a1a;" class="page-header">Người dùng
                        <small>Sửa</small>
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
                    <form action="{{route('admin-suauser', $user->id)}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="form-group">
                            <label>Họ và tên</label>
                            <input class="form-control" name="full_name" value="{{$user->full_name}}"
                                   placeholder="Nhập họ và tên"/>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="{{$user->email}}"
                                   placeholder="Nhập email" readonly=""/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" id="changePassword" name="changePassword">
                            <label>Đổi mật khẩu</label>
                            <input type="password" class="form-control password" id="password" name="password"
                                   placeholder="Nhập mật khẩu" disabled=""/>
                        </div>
                        <div class="form-group">
                            <label>Nhập lại mật khẩu</label>
                            <input type="password" class="form-control password" id="re_password" name="re_password"
                                   placeholder="Nhập lại mật khẩu" disabled=""/>
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="number" class="form-control" name="phone" value="{{$user->phone}}"
                                   placeholder="Nhập số điện thoại"/>
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input class="form-control" name="address" value="{{$user->address}}"
                                   placeholder="Nhập địa chỉ"/>
                        </div>
                        <div class="form-group">
                            <label>Quyền quản trị</label>
                            <select class="form-control" name="isAdmin">
                                <option value="{{$user->isAdmin}}">Hiện tại: {{$user->isAdmin}}</option>
                                <option value="Không">Không</option>
                                <option value="Có">Có</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-default" id="btn_style_admin">Sửa người dùng</button>
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

    <!-- Hide/Show JavaScript -->
    <script src="admin-assets/js/jquery-1.12.0.min.js"></script>

    <script>
        $(document).ready(function () {
            $("#changePassword").change(function () {
                if ($(this).is(":checked")) {
                    $(".password").removeAttr('disabled');
                }
                else {
                    $(".password").attr('disabled', '');
                }
            });
        });
    </script>

@endsection

@section('script')

@endsection