@extends('admin.layout.index')
@section('content')

    <title>Thông tin {{$user->full_name}}</title>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 style="color: #881a1a;" class="page-header">{{$user->full_name}}
                        <small>Xem thông tin</small>
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
                                   disabled />
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="{{$user->email}}"
                                   readonly=""/>
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="number" class="form-control" name="phone" value="{{$user->phone}}"
                                   disabled />
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input class="form-control" name="address" value="{{$user->address}}"
                                   disabled/>
                        </div>
                        <div class="form-group">
                            <label>Thời gian tài khoản</label>
                            <input class="form-control" name="address" value="{{$user->created_at}}"
                                   disabled/>
                        </div>
                        <a class="btn btn-default" id="btn_style_admin" href="{{route('admin-dashboard')}}">Trở về</a>
                    </form>
                </div>

                <div class="col-lg-5" style="text-align: center; padding-top: 75px;">
                    <img src="website-assets/assets/dest/images/avatar.jpg" width="250px" style="border-radius: 50%;" title="{{$user->full_name}}">                    
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