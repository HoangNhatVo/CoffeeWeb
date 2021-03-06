@extends('admin.layout.index')
@section('content')
    <style>.center {
            text-align: center;
        }</style>

    <title>Danh sách người dùng</title>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 style="color: #881a1a;" class="page-header">Người dùng
                        <small>Danh sách</small>
                    </h1>
                    @if(session('thongbao'))
                        <div class="alert alert-success" style="font-weight: bold;">
                            <i class="fa fa-check"></i>
                            {{Session::get('thongbao')}}
                        </div>
                    @endif
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="center">
                        <th class="center" width="50px">ID</th>
                        <th class="center" width="150px">Họ tên</th>
                        <th class="center" width="50px">Email</th>
                        <th class="center" width="0px">SĐT</th>
                        <th class="center" width="300px">Địa chỉ</th>
                        <th class="center" width="100px">Admin</th>
                        <th class="center" width="150px">Thời gian tạo</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($user as $us)
                        <tr class="odd gradeX">
                            <td class="center">{{$us->id}}</td>
                            <td>{{$us->full_name}}</td>
                            <td>{{$us->email}}</td>
                            <td class="center">{{$us->phone}}</td>
                            <td>{{$us->address}}</td>
                            <td class="center">{{$us->isAdmin}}</td>
                            <td class="center">{{$us->created_at}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@endsection