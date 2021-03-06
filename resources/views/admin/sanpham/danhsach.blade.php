@extends('admin.layout.index')
@section('content')
    <style>.center {
            text-align: center;
        }</style>

    <title>Danh sách sản phẩm</title>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 style="color: #881a1a;" class="page-header">Sản phẩm
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
                        <!-- <th class="center" width="50px">ID</th> -->
                        <th class="center" width="100px">Tên SP</th>
                        <th class="center" width="50px">Loại SP</th>
                        <th class="center" width="500px">Mô tả</th>
                        <th class="center" width="100px">Giá gốc</th>
                        <th class="center" width="100px">Giá KM</th>
                        <th class="center">Ảnh</th>
                        <th class="center" width="50px">Đơn vị</th>
                        <th class="center" width="50px">SP mới/cũ</th>
                        <!-- <th class="center" width="100px">Thời gian tạo</th> -->
                        <th class="center" width="100px">Thời gian cập nhập</th>
                        <th class="center" width="50px">Xóa</th>
                        <th class="center" width="50px">Sửa</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($sanpham as $sp)
                        <tr class="odd gradeX">
                            <!-- <td class="center">{{$sp->id}}</td> -->
                            <td class="center">{{$sp->name}}</td>
                            <td class="center">{{$sp->id_type}}</td>
                            <td style="text-align: justify;">{{$sp->description}}</td>
                            <td class="center">{{number_format($sp->unit_price)}} đồng</td>
                            @if($sp->promotion_price!=0)
                                <td class="center">{{number_format($sp->promotion_price)}} đồng</td>
                            @else
                                <td class="center"></td>
                            @endif
                            <td class="center"><img src="upload/product/{{$sp->image}}" width="50px" height="50px">{{$sp->image}}</td>
                            <td class="center">{{$sp->unit}}</td>
                            <td class="center">{{$sp->new}}</td>
                            <!-- <td class="center">{{$sp->created_at}}</td> -->
                            <td class="center">{{$sp->updated_at}}</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a style="text-decoration: none;"
                                        href={{route('admin-xoasp',$sp->id)}}>Xoá</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a style="text-decoration: none;"
                                        href={{route('admin-suasp',$sp->id)}}>Sửa</a></td>
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