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
                    <h1 class="page-header">Người dùng
                        <small>Danh sách</small>
                    </h1>
                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{Session::get('thongbao')}}
                        </div>
                    @endif
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="center">
                        <th class="center" width="50px">ID</th>
                        <th class="center" width="150px">Full name</th>
                        <th class="center" width="150px">Email</th>
                        <th class="center" width="0px">Phone</th>
                        <th class="center" width="500px">Address</th>
                        <th class="center" width="100px">Admin</th>
                        <th class="center" width="150px">Created</th>
                        <th class="center" width="150px">Updated</th>
                        <th class="center" width="50px">Xoá</th>
                        <th class="center" width="50px">Sửa</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($user as $us)
                        <tr class="odd gradeX">
                            <td class="center">{{$us->id}}</td>
                            <td>{{$us->full_name}}</td>
                            <td>{{$us->email}}</td>
                            <td>{{$us->phone}}</td>
                            <td>{{$us->address}}</td>
                            <td>{{$us->isAdmin}}</td>
                            <td class="center">{{$us->created_at}}</td>
                            <td class="center">{{$us->updated_at}}</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a
                                        href={{route('admin-xoauser',$us->id)}}>Xoá</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a
                                        href={{route('admin-suauser',$us->id)}}>Sửa</a></td>
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