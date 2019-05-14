@extends('master')
@section('content')
<title>Trang chủ</title>
<div class="fullwidthbanner-container">
    <div class="fullwidthbanner">
        <div class="bannercontainer">
            <div class="banner">
                <ul>
                    @foreach($slide as $sl) <!-- THE FIRST SLIDE -->
                    <li data-transition="boxfade" data-slotamount="20" class="active-revslide"
                    style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                    <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined"
                    data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined"
                    data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined"
                    data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined"
                    data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined"
                    data-oheight="undefined">
                    <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
                    data-bgposition="center center" data-bgrepeat="no-repeat"
                    data-lazydone="undefined" src="website-assets/image/slide/{{$sl->image}}"
                    data-src="website-assets/image/slide/{{$sl->image}}"
                    style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('website-assets/image/slide/{{$sl->image}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                </div>
            </div>
        </li>
        @endforeach
    </ul>
</div>
</div>
</div>
</div>
<div class="sologan">
    <h1>Legendary Cafe</h1>
    <p>Không cần vô địch
    <br>
Chỉ cần cafe ngon</p>
</div>
<!--slider-->
</div>
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="beta-products-list">
                        <h4>Sản phẩm mới</h4>
                        <div class="beta-products-details">
                            <p class="pull-left"></p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            @foreach($sp_moi as $spm)
                            <div class="col-sm-3">
                                <div class="single-item">
                                    @if($spm->promotion_price!=0)
                                    <div class="ribbon-wrapper">
                                        <div class="ribbon sale">Sale</div>
                                    </div>
                                    @endif
                                    <div class="single-item-header">
                                        <a href="{{route('chitietsanpham',$spm->id)}}"><img
                                            src="upload/product/{{$spm->image}}" alt=""
                                            height="250px"></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">{{$spm->name}}</p>
                                            <p class="single-item-price" style="font-size: 18px">
                                                @if($spm->promotion_price==0)
                                                <span class="flash-sale">{{number_format($spm->unit_price)}}
                                                đồng</span>
                                                @else
                                                <span class="flash-del">{{number_format($spm->unit_price)}}
                                                đồng</span>
                                                <span class="flash-sale">{{number_format($spm->promotion_price)}}
                                                đồng</span>
                                                @endif
                                            </p>
                                        </div>
                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left"
                                            href="{{route('themgiohang',$spm->id)}}"><i
                                            class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href={{route('chitietsanpham',$spm->id)}}>Chi
                                                tiết <i
                                                class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="row">{{$sp_moi->links()}}</div>
                            </div> <!-- .beta-products-list -->

                            <div class="space50">&nbsp;</div>

                            <div class="beta-products-list">
                                <h4>Sản phẩm khuyến mãi</h4>
                                <div class="beta-products-details">
                                    <p class="pull-left"></p>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="row">
                                    @foreach($sp_km as $spkm)
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            @if($spm->promotion_price!=0)
                                            <div class="ribbon-wrapper">
                                            <div class="ribbon sale">Sale</div>
                                            </div>
                                            @endif
                                            <div class="single-item-header">
                                                <a href="{{route('chitietsanpham',$spkm->id)}}"><img
                                                    src="upload/product/{{$spkm->image}}" alt=""
                                                    height="250px"></a>
                                                </div>
                                                <div class="single-item-body">
                                                    <p class="single-item-title">{{$spkm->name}}</p>
                                                    <p class="single-item-price" style="font-size: 18px">
                                                        <span class="flash-del">{{number_format($spkm->unit_price)}}
                                                        đồng</span>
                                                        <span class="flash-sale">{{number_format($spkm->promotion_price)}}
                                                        đồng</span>
                                                    </p>
                                                </div>
                                                <div class="single-item-caption">
                                                    <a class="add-to-cart pull-left"
                                                    href={{route('themgiohang',$spkm->id)}}><i
                                                    class="fa fa-shopping-cart"></i></a>
                                                    <a class="beta-btn primary" href={{route('chitietsanpham',$spkm->id)}}>Chi
                                                        tiết <i
                                                        class="fa fa-chevron-right"></i></a>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                        <div class="row">{{$sp_moi->links()}}</div>
                                    </div> <!-- .beta-products-list -->
                                </div>
                            </div> <!-- end section with sidebar and main content -->
                        </div> <!-- .main-content -->
                    </div> <!-- #content -->
                </div> <!-- #container -->
                @endsection