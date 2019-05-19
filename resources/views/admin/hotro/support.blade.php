@extends('admin.layout.index')
@section('content')
    <style>.center {
            text-align: center;
        }</style>

    <title>Hỗ trợ khách hàng</title>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 style="color: #881a1a;" class="page-header">Hỗ trợ
                        <small>Danh sách</small>
                    </h1>
                    @if(session('thongbao'))
                        <div class="alert alert-success"style="font-weight: bold;">
                            <i class="fa fa-check"></i>
                            {{Session::get('thongbao')}}
                        </div>
                    @endif
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="center">
                        <th class="center" width="50px">Tên khách hàng</th>                        
                        <th class="center" width="30px">Email</th>
                        <th class="center" width="50px">Tiêu đề</th>
                        <th class="center" width="80px">Nội dung</th>
                        <th class="center" width="50px">Thời gian khách thắc mắc</th>
                        <th class="center" width="50px">Gửi phản hồi</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($support as $s)
                        @if($s->status == 'Chưa phản hồi')
                            <tr class="odd gradeX">
                                <td>{{$s->full_name}}</td>
                                <td>{{$s->email}}</td>
                                <td style="font-weight: bold;">{{$s->title}}</td>
                                <td>{{$s->content}}</td>
                                <td class="center">{{$s->created_at}}</td>
                                <td class="center"><i class="fa fa-share-square" style="color: #337AB7;"></i><a style="text-decoration: none;" href="{{route('admin-guihotro',$s->id)}}"> Đã gửi</a></td>
                            </tr>
                        @endif
                        @endforeach
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@endsection