@extends('master')
@section('content')
<title>Đặt hàng</title>
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Đặt hàng</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb">
                <a href={{route('index')}}>Trang chủ</a> /
                <span>Đặt hàng</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container">
    <div id="content">

        <form action="{{route('dathang')}}" method="post" class="beta-form-checkout">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="row">
            </div>
            <div class="row">
                <div class="col-sm-6">
                    @if(session('thongbao'))
                    <div class="alert alert-success">
                        {{Session::get('thongbao')}}
                    </div>
                    @endif
                    <h4>Thông tin khách hàng</h4>
                    <div class="space20">&nbsp;</div>
                        @if(Auth::check())
                    <div class="form-block">
                        <label for="name">Họ tên*</label>
                        <input type="text" name="name" placeholder="Họ tên" value="{{Auth::user()->full_name}}" required autofocus="true">
                    </div>

                    <div class="form-block">
                        <label>Giới tính </label>
                        <input id="gender" type="radio" class="input-radio" name="gender" value="nam"
                        checked="checked" style="width: 10%"><span style="margin-right: 10%">Nam</span>
                        <input id="gender" type="radio" class="input-radio" name="gender" value="nữ"
                        style="width: 10%"><span>Nữ</span>
                    </div>

                    <div class="form-block">
                        <label for="email">Email*</label>
                        <input type="email" id="email" name="email" value="{{Auth::user()->email}}" required placeholder="expample@gmail.com">
                    </div>

                    <div class="form-block">
                        <label for="adress">Địa chỉ*</label>
                        <input type="text" id="address" name="address" value="{{Auth::user()->address}}" placeholder="Street Address" required>
                    </div>

                    <div class="form-block">
                        <label for="phone">Điện thoại*</label>
                        <input type="number" id="phone" name="phone" value="{{Auth::user()->phone}}" required>
                    </div>
                            @else
                            <div class="form-block">
                                <label for="name">Họ tên*</label>
                                <input type="text" name="name" placeholder="Họ tên" required autofocus="true">
                            </div>
                            <div class="form-block">
                                <label>Giới tính </label>
                                <input id="gender" type="radio" class="input-radio" name="gender" value="nam"
                                       checked="checked" style="width: 10%"><span style="margin-right: 10%">Nam</span>
                                <input id="gender" type="radio" class="input-radio" name="gender" value="nữ"
                                       style="width: 10%"><span>Nữ</span>
                            </div>

                            <div class="form-block">
                                <label for="email">Email*</label>
                                <input type="email" id="email" name="email"  required placeholder="expample@gmail.com">
                            </div>

                            <div class="form-block">
                                <label for="adress">Địa chỉ*</label>
                                <input type="text" id="address" name="address"  placeholder="Street Address" required>
                            </div>

                            <div class="form-block">
                                <label for="phone">Điện thoại*</label>
                                <input type="number" id="phone" name="phone" required>
                            </div>
                    @endif
                    <div class="form-block">
                        <label for="notes">Ghi chú</label>
                        <textarea id="notes" name="notes"></textarea>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="your-order">
                        <div class="your-order-head"><h5 style="text-align: center;">Đơn hàng của bạn</h5></div>
                        <div class="your-order-body" style="padding: 0px 10px">
                            <div class="your-order-item">
                                <div>
                                    @if(Session::has('cart'))
                                    @foreach($product_cart as $cart)
                                    <!--  one item   -->
                                    <div class="media">
                                        <img width="25%"
                                        src="upload/product/{{$cart['item']['image']}}" alt=""
                                        class="pull-left">
                                        <div class="media-body">
                                            <p class="font-large">{{$cart['item']['name']}}</p>
                                            <div class="space10">&nbsp;</div>
                                            <span class="color-gray your-order-info">Đơn giá: {{number_format($cart['price'])}}
                                            đồng</span>
                                            <div class="space10">&nbsp;</div>
                                            <span class="color-gray your-order-info">Số lượng: {{$cart['qty']}}</span>
                                        </div>
                                    </div>
                                    <!-- end one item -->
                                    @endforeach
                                    @endif
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="your-order-item">
                                <div class="pull-left"><p class="your-order-f18">Tổng tiền:</p></div>
                                <div class="pull-right"><h5
                                    class="color-black">@if(Session::has('cart')){{number_format($totalPrice)}}@else
                                0 @endif đồng</h5></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>


                        <div class="text-center">
                            <button type="submit" class="beta-btn primary" href="#" style="background-color: #881a1a;border-radius: 2px">Đặt hàng <i class="fa fa-chevron-right"></i>
                            </button>                              
                            </div>
                        </div> <!-- .your-order -->
                    </div>
                </div>
            </form>
        </div> <!-- #content -->
    </div> <!-- .container -->
    @endsection