@extends('master')
@section('content')
<title>{{$loai_sp->name}}</title>
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">{{$loai_sp->name}}</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="{{route('index')}}">Trang chủ</a> /
                <span>{{$loai_sp->name}}</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div style=" font-weight: bold; font-size: 18px">{{$loai_sp->description}}</div>
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-3">
                    <ul class="main-menu">
                        @foreach($ds_loai as $dsl)
                        <li><a href="{{route('loaisanpham',$dsl->id)}}">{{$dsl->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-sm-9">
                    <div class="beta-products-list">
                        <h4>Sản phẩm mới</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">Tìm thấy {{count($sp_theoloai)}} sản phẩm</p>
                            <div class="clearfix"></div>
                        </div>

                        <div class="row">
                            @foreach($sp_theoloai as $sp)
                            <div class="col-sm-4">
                                <div class="single-item">
                                    @if($sp->promotion_price!=0)
                                    <div class="ribbon-wrapper">
                                        <div class="ribbon sale">Sale</div>
                                    </div>
                                    @endif
                                    <div class="single-item-header">
                                        <a href="{{route('chitietsanpham',$sp->id)}}"><img
                                            src="upload/product/{{$sp->image}}" alt=""
                                            height="250px"></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">{{$sp->name}}</p>
                                            <p class="single-item-price" style="font-size: 18px">
                                                @if($sp->promotion_price !=0)
                                                <span class="flash-del">{{number_format($sp->unit_price)}}
                                                đồng</span>
                                                <span class="flash-sale">{{number_format($sp->promotion_price)}}
                                                đồng</span>
                                                @else
                                                <span>{{number_format($sp->unit_price)}} đồng</span>
                                                @endif
                                            </p>
                                        </div>
                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left"
                                            href={{route('themgiohang',$sp->id)}}><i
                                            class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href={{route('chitietsanpham',$sp->id)}}>Chi
                                                tiết <i class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="space50">&nbsp;</div>
                                    </div>
                                    @endforeach
                                </div>
                            </div> <!-- .beta-products-list -->

                            <div class="beta-products-list">
                                <h4>Sản phẩm khác</h4>
                                <div class="beta-products-details">
                                    <p class="pull-left"></p>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="row">
                                    @foreach($sp_khac as $sp_k)
                                    <div class="col-sm-4">
                                        <div class="single-item">
                                            @if($sp_k->promotion_price!=0)
                                            <div class="ribbon-wrapper">
                                                <div class="ribbon sale">Sale</div>
                                            </div>
                                            @endif
                                            <div class="single-item-header">
                                                <a href={{route('chitietsanpham',$sp_k->id)}}><img
                                                    src="upload/product/{{$sp_k->image}}"
                                                    alt="" height="250px"></a>
                                                </div>
                                                <div class="single-item-body">
                                                    <p class="single-item-title">{{$sp_k->name}}</p>
                                                    <p class="single-item-price" style="font-size: 18px">
                                                        @if($sp_k->promotion_price !=0)
                                                        <span class="flash-del">{{number_format($sp_k->unit_price)}}
                                                        đồng</span>
                                                        <span class="flash-sale">{{number_format($sp_k->promotion_price)}}
                                                        đồng</span>
                                                        @else
                                                        <span>{{number_format($sp_k->unit_price)}} đồng</span>
                                                        @endif
                                                    </p>
                                                </div>
                                                <div class="single-item-caption">
                                                    <a class="add-to-cart pull-left"
                                                    href={{route('themgiohang',$sp_k->id)}}><i
                                                    class="fa fa-shopping-cart"></i></a>
                                                    <a class="beta-btn primary" href={{route('chitietsanpham',$sp_k->id)}}>Chi
                                                        tiết <i class="fa fa-chevron-right"></i></a>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        <!-- <div class="row">{{$sp_khac->links()}}</div> -->
                                    </div> <!-- .beta-products-list -->
                                </div>
                            </div> <!-- end section with sidebar and main content -->


                        </div> <!-- .main-content -->
                    </div> <!-- #content -->
                </div> <!-- .container -->
                @endsection