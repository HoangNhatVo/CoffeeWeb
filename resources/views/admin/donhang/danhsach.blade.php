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
                        <th class="center" width="70px">Tên khách hàng</th>                        
                        <th class="center" width="50px">Email</th>
                        <th class="center" width="30px">SĐT</th>
                        <th class="center" width="60px">Tên sản phẩm</th>
                        <th class="center" width="40px">Số lượng</th>
                        <th class="center" width="50px">Đơn giá 1 sản phẩm</th>
                        <th class="center" width="40px">Thời gian đặt</th>
                        <th class="center" width="60px">Xuất đơn hàng</th>

                        <!-- <th class="center" width="50px">ID</th>
                        <th class="center" width="150px">Name</th>
                        <th class="center" width="150px">Gender</th>
                        <th class="center" width="0px">Email</th>
                        <th class="center" width="500px">Address</th>
                        <th class="center" width="100px">Phone</th>
                        <th class="center" width="100px">Note</th>
                        <th class="center" width="150px">Created</th>
                        <th class="center" width="150px">Updated</th> -->
                        <!-- <th class="center" width="50px">Xoá</th> -->
                        <!-- <th class="center" width="50px">Sửa</th> -->
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($billdetail as $bd)
                        @if($bd->tinhtrang != 'Đã xuất đơn hàng')
                        <tr class="odd gradeX">
                            @foreach($bill as $b)
                                @if($bd->id_bill == $b->id && $bd->tinhtrang != 'Đã xuất đơn hàng')
                                    @foreach($customer as $c)
                                        @if($b->id_customer == $c->id && $b->note != 'Đã xuất đơn hàng')
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
                                    <td class="center"><i class="fa fa-trash-o fa-fw"></i><a style="text-decoration: none;" href="{{route('admin-xoadonhang',$bd->id)}}"> Xuất</a></td>

                                @endif
                                
                            @endforeach
                        </tr>
                        @endif
                        @endforeach


                    <!-- @foreach($customer as $us)
                        <tr class="odd gradeX">
                            <td class="center">{{$us->id}}</td>
                            <td>{{$us->name}}</td>
                            <td>{{$us->gender}}</td>
                            <td>{{$us->email}}</td>
                            <td>{{$us->address}}</td>
                            <td>{{$us->phone_number}}</td>
                            <td>{{$us->note}}</td>
                            <td class="center">{{$us->created_at}}</td>
                            <td class="center">{{$us->updated_at}}</td>
                            <!-- <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a -->
                                        <!-- href={{route('admin-xoauser',$us->id)}}>Xoá</a></td> -->
                            <!-- <td class="center"><i class="fa fa-pencil fa-fw"></i> <a -->
                                        <!-- href={{route('admin-suauser',$us->id)}}>Sửa</a></td> -->
                        <!-- </tr> -->
                    <!-- @endforeach -->
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@endsection