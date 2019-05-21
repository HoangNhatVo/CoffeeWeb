@extends('admin.layout.index')
@section('content')

    <title>Thêm sản phẩm</title>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 style="color: #881a1a;" class="page-header">Sản phẩm
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
                    <form action="{{route('admin-themsp')}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="form-group">
                            <label>Loại sản phẩm*</label>
                            <select class="form-control" name="id_type">
                                @foreach($loai as $l)
                                    <option value="{{$l->id}}">{{$l->id}} - {{$l->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tên sản phẩm*</label>
                            <input class="form-control" name="name" placeholder="Nhập tên sản phẩm"/>
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea class="form-control" rows="3" name="description"
                                      placeholder="Nhập mô tả"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Giá gốc*</label>
                            <input type="number" class="form-control" name="unit_price" placeholder="Nhập giá gốc"/>
                        </div>
                        <div class="form-group">
                            <label>Giá khuyến mãi</label>
                            <input type="number" class="form-control" name="promotion_price" placeholder="Nhập giá KM"/>
                        </div>
                        <div class="form-group">
                            <label>Hình ảnh*</label>
                            <input type="file" class="form-control" name="image"/>
                        </div>
                        <div class="form-group">
                            <label>Đơn vị*</label>
                            <select class="form-control" name="unit">
                                <option value="hộp">Hộp</option>
                                <option value="cái">Cái</option>
                                <option value="ly">Ly</option>
                                <option value="phần">Lon</option>
                                <option value="phần">Phần</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Sản phẩm mới/cũ*</label>
                            <select class="form-control" name="new">
                                <option value="mới">Mới</option>
                                <option value="cũ">Cũ</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-default" id="btn_style_admin">Thêm sản phẩm</button>
                        <!-- <button type="reset" class="btn btn-default" id="btn_style_admin">Reset</button> -->
                        <a class="btn btn-default" id="btn_style_admin" href="{{route('admin-dssp')}}">Trở về</a>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@endsection