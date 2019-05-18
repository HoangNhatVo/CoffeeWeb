@extends('admin.layout.index')
@section('content')
    <style>.center {
            text-align: center;
        }</style>

    <title>Danh sách loại sản phẩm</title>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 style="color: #881a1a;" class="page-header">Loại sản phẩm
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
                        <th class="center" width="100px">Name</th>
                        <th class="center">Description</th>
                        <th class="center" width="150px">Created</th>
                        <th class="center" width="150px">Updated</th>
                        <th class="center" width="50px">Del</th>
                        <th class="center" width="50px">Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($loai_sp as $lsp)
                        <tr class="odd gradeX">
                            <td class="center">{{$lsp->id}}</td>
                            <td class="center">{{$lsp->name}}</td>
                            <td style="text-align: justify;">{{$lsp->description}}</td>
                            <td class="center">{{$lsp->created_at}}</td>
                            <td class="center">{{$lsp->updated_at}}</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a style="text-decoration: none;" 
                                        href={{route('admin-xoaloaisp', $lsp->id)}}>Xoá</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a style="text-decoration: none;"
                                        href={{route('admin-sualoaisp', $lsp->id)}}>Sửa</a></td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div> <!-- /.row -->
        </div> <!-- /.container-fluid -->
    </div> <!-- /#page-wrapper -->
@endsection