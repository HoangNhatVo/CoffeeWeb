@extends('admin.layout.index')
@section('content')

    <title>Sửa loại sản phẩm {{$loai_sp->name}}</title>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Loại sản phẩm
                        <small>{{$loai_sp->name}}</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{$err}}<br>
                            @endforeach
                        </div>
                    @endif
                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{Session::get('thongbao')}}
                        </div>
                    @endif
                    <form action="{{route('admin-sualoaisp', $loai_sp->id)}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="form-group">
                            <label>Tên thể loại</label>
                            <input class="form-control" name="name" placeholder="Nhập tên loại sản phẩm"
                                   value="{{$loai_sp->name}}"/>
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <input class="form-control" name="description"
                                   placeholder="Nhập mô tả" value="{{$loai_sp->description}}"/>
                        </div>
                        <button type="submit" class="btn btn-default">Sửa</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@endsection