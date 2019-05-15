@extends('master')
@section('content')
    <title>{{$sanpham->name}}</title>
    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">Sản Phẩm: {{$sanpham->name}}</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb font-large">
                    <a href="{{route('index')}}">Trang chủ</a> /
                    <a href="{{route('loaisanpham', $loai_sp->id)}}">{{$loai_sp->name}}</a> /
                    <span>{{$sanpham->name}}</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="container">
        <div id="content">
            <div class="row">
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="upload/product/{{$sanpham->image}}" alt="">
                        </div>
                        <div class="col-sm-8">
                            <div class="single-item-body">
                                <p class="single-item-title">
                                <h2>{{$sanpham->name}}</h2></p>
                                <p class="single-item-price" style="margin-top: 10px">
                                    @if($sanpham->promotion_price==0)
                                        <span class="flash-sale">{{number_format($sanpham->unit_price)}} đồng</span>
                                    @else
                                        <span class="flash-del">{{number_format($sanpham->unit_price)}} đồng</span>
                                        <span class="flash-sale">{{number_format($sanpham->promotion_price)}}
                                            đồng</span>
                                    @endif
                                </p>
                            </div>

                            <div class="clearfix"></div>
                            <div class="space20">&nbsp;</div>

                            <div class="single-item-desc">
                                <p>{{$sanpham->description}}</p>
                            </div>
                            <div class="space20">&nbsp;</div>

                            <p>Số lượng:</p>
                            <div class="single-item-options">

                                <input style="width: 50px;height: 35px;font-size: 17px;font-weight: 500;" type="number" class="quality" step="1" min="1" max="" name="quantity" value="1" title="Qty" size="4" pattern="[0-9]*" inputmode="numeric">
                                <a class="add-to-cart" href="{{route('themgiohang',$sanpham->id)}}"><i
                                            class="fa fa-shopping-cart"></i></a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>

                    <div class="space40">&nbsp;</div>
                    <div class="woocommerce-tabs">
                        <ul class="tabs">
                            <li><a href="#tab-description"><p style="font-size: 16px;color: #881a1a;font-weight: 700;">Mô tả</p></a></li>
                        </ul>

                        <div class="panel" id="tab-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                    <div class="space50">&nbsp;</div>
                    <div class="beta-products-list">
                        <h4 style="margin-bottom: 15px;">Sản phẩm tương tự</h4>

                        <div class="row">
                            @foreach($sp_tuongtu as $sptt)
                                <div class="col-sm-4">
                                    <div class="single-item">
                                        @if($sptt->promotion_price!=0)
                                            <div class="ribbon-wrapper">
                                                <div class="ribbon sale">Sale</div>
                                            </div>
                                        @endif
                                        <div class="single-item-header">
                                            <a href={{route('chitietsanpham',$sptt->id)}}><img
                                                        src="upload/product/{{$sptt->image}}"
                                                        alt="" height="250px"></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">{{$sptt->name}}</p>
                                            <p class="single-item-price" style="font-size: 18px">
                                                @if($sptt->promotion_price==0)
                                                    <span class="flash-sale">{{number_format($sptt->unit_price)}}
                                                        đồng</span>
                                                @else
                                                    <span class="flash-del">{{number_format($sptt->unit_price)}}
                                                        đồng</span>
                                                    <span class="flash-sale">{{number_format($sptt->promotion_price)}}
                                                        đồng</span>
                                                @endif
                                            </p>
                                        </div>
                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left" href={{route('themgiohang',$sptt->id)}}><i
                                                        class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="{{route('chitietsanpham',$sptt->id)}}">Chi
                                                tiết <i class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div> <!-- .beta-products-list -->
                </div>
                <div class="col-sm-3 aside">
                    <div class="widget">
                        <h3 class="widget-title">Sản phẩm khuyến mãi</h3>
                        <div class="widget-body">
                            <div class="beta-sales beta-lists">
                                @foreach($sp_km as $spkm)
                                    <div class="media beta-sales-item">
                                        <a class="pull-left" href={{route('chitietsanpham',$spkm->id)}}>
                                            <img src="upload/product/{{$spkm->image}}" alt="">
                                        </a>
                                        <div class="media-body"  style="font-size: 15px">{{$spkm->name}}</div>
                                        @if($spkm->promotion_price==0)
                                            <span class="flash-sale">{{number_format($spkm->unit_price)}}
                                                đồng</span>
                                        @else
                                            <span class="flash-del">{{number_format($spkm->unit_price)}}
                                                đồng</span><br>
                                            <span class="flash-sale">{{number_format($spkm->promotion_price)}}
                                                đồng</span>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div> <!-- best sellers widget -->
                    <div class="widget">
                        <h3 class="widget-title">Sản phẩm mới</h3>
                        <div class="widget-body">
                            <div class="beta-sales beta-lists">
                                @foreach($sp_moi as $spm)
                                    <div class="media beta-sales-item">
                                        <a class="pull-left" href={{route('chitietsanpham',$spm->id)}}>
                                            <img src="upload/product/{{$spm->image}}" alt="">
                                        </a>
                                        <div class="media-body" style="font-size: 15px">{{$spm->name}}</div>
                                        @if($spm->promotion_price==0)
                                            <span class="flash-sale">{{number_format($spm->unit_price)}}
                                                đồng</span>
                                        @else
                                            <span class="flash-del">{{number_format($spm->unit_price)}}
                                                đồng</span><br>
                                            <span class="flash-sale">{{number_format($spm->promotion_price)}}
                                                đồng</span>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div> <!-- best sellers widget -->
                </div>
            </div>
        </div> <!-- #content -->
    </div> <!-- .container -->
@endsection