@extends('admin.layout.index')
@section('content')

    <title>Sửa sản phẩm {{$sanpham->name}}</title>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 style="color: #881a1a;" class="page-header">Sản phẩm
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
                    <form action="{{route('admin-suasp', $sanpham->id)}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <div class="form-group">
                            <label>Loại sản phẩm</label>
                            <select class="form-control" name="id_type">
                                <option value="{{$sanpham->id_type}}">Hiện tại: {{$sanpham->id_type}}</option>
                                @foreach($loai as $l)
                                    <option value="{{$l->id}}">{{$l->id}} - {{$l->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Tên sản phẩm</label>
                            <input class="form-control" name="name" value="{{$sanpham->name}}" placeholder="Nhập tên sản phẩm"/>
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <input class="form-control" name="description" value="{{$sanpham->description}}" placeholder="Nhập mô tả"/>
                        </div>
                        <div class="form-group">
                            <label>Giá gốc</label>
                            <input type="number" class="form-control" name="unit_price" value="{{$sanpham->unit_price}}" placeholder="Nhập giá gốc"/>
                        </div>
                        <div class="form-group">
                            <label>Giá KM</label>
                            <input type="number" class="form-control" name="promotion_price" value="{{$sanpham->promotion_price}}" placeholder="Nhập giá KM"/>
                        </div>
                        <div class="form-group">
                            <label>Hình ảnh</label>
                            <input class="form-control" name="image" value="{{$sanpham->image}}" placeholder="Nhập hình ảnh"/>
                        </div>
                        <div class="form-group">
                            <label>Đơn vị</label>
                            <select class="form-control" name="unit">
                                <option value="{{$sanpham->unit}}">Hiện tại: {{$sanpham->unit}}</option>
                                <option value="hộp">Hộp</option>
                                <option value="cái">Cái</option>
                                <option value="ly">Ly</option>
                                <option value="phần">Phần</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>SP mới</label>
                            <select class="form-control" name="new">
                                <option value="{{$sanpham->new}}">Hiện tại: {{$sanpham->new}}</option>
                                <option value="mới">Mới</option>
                                <option value="cũ">Cũ</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-default" id="btn_style_admin">Sửa</button>
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