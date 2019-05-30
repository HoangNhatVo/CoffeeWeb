@extends('admin.layout.index')
@section('content')
    <style>.center {
            text-align: center;
        }</style>

    <title>Danh sách đơn hàng</title>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 style="color: #881a1a;" class="page-header">Đơn hàng
                        <small>Đã làm</small>
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
                        <th class="center" width="20px">ID Khách</th>
                        <th class="center" width="70px">Tên khách hàng</th>                        
                        <th class="center" width="50px">Email</th>
                        <th class="center" width="30px">SĐT</th>
                        <th class="center" width="60px">Tên sản phẩm</th>
                        <th class="center" width="40px">Số lượng</th>
                        <th class="center" width="50px">Đơn giá 1 sản phẩm</th>
                        <th class="center" width="40px">Thời gian làm</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($billdetail as $bd)
                        @if($bd->status == 'Đã xuất đơn hàng')
                        <tr class="odd gradeX">
                            @foreach($bill as $b)
                                @if($bd->id_bill == $b->id)
                                    @foreach($customer as $c)
                                        @if($b->id_customer == $c->id)
                                        <td class="center">{{$c->id}}</td>
                                        <td>{{$c->name}}</td>
                                        <td>{{$c->email}}</td>
                                        <td class="center">{{$c->phone_number}}</td>
                                        @endif
                                    @endforeach

                                    @foreach($products as $p)
                                        @if($bd->id_product == $p->id)
                                        <td>{{$p->name}}</td>                                
                                        @endif
                                    @endforeach

                                    <td class="center">{{$bd->quantity}}</td>
                                    <td class="center">{{number_format($bd->unit_price)}} đồng</td>
                                    <td class="center">{{$bd->created_at}}</td>
                                    
                                @endif
                                
                            @endforeach
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