<div id="header">
    <div class="header-top">
        <div class="container">
            <div class="pull-left auto-width-left">
                <div class="pull-left">
                    <a href="{{route('index')}}" id="logo">
                        <img src="website-assets/assets/dest/images/logo-cake.png" width="50px" alt="">
                    </a>
                    <a href="{{route('index')}}">NoName Coffee </a>
                </div>
            </div>
            <div class="pull-right auto-width-right">
                <ul class="top-details menu-beta l-inline">
                    @if(Auth::check())
                    <li><a href="" style="color: red"><b>Xin chào {{Auth::user()->full_name}}</b></a></li>
                    <li><a href="{{route('logout')}}">Đăng xuất</a></li>
                    @else
                    <li><a href="{{route('regiser')}}">Đăng ký</a></li>
                    <li><a href="{{route('login')}}">Đăng nhập</a></li>
                    @endif
                </ul>
            </div>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .header-top -->
    <div class="header-body">
 <!-- .container -->
    </div> <!-- .header-body -->
    <div class="header-bottom" style="background-color: #881a1a;">
        <div class="container">
           <div class="pull-right beta-components space-left ov">
            <div class="space10">&nbsp;</div>
            <div class="beta-comp">
                <form role="search" method="get" id="searchform" action="{{route('search')}}">
                    <input type="text" value="" name="key" id="s" placeholder="Nhập tên sản phẩm..."/>
                    <button class="fa fa-search" type="submit" id="searchsubmit"></button>
                </form>
            </div>

            <div class="beta-comp">

                <div class="cart">
                    <div class="beta-select"><i class="fa fa-shopping-cart">
                    </i> Giỏ hàng (@if(Session::has('cart')){{Session('cart')->totalQty}}@else Trống) @endif
                    <i class="fa fa-chevron-down"></i>
                </div>
                <div class="beta-dropdown cart-body">
                    @if(Session::has('cart'))
                    @foreach($product_cart as $product)
                    <div class="cart-item">
                        <a class="cart-item-delete"
                        href="{{route('xoagiohang',$product['item']['id'])}}">
                        <i class="fa fa-times"></i>
                    </a>
                    <div class="media">
                        <a class="pull-left" href="{{route('chitietsanpham', $product['item']['id'])}}">
                            <img src="upload/product/{{$product['item']['image']}}"
                            alt="">
                        </a>
                        <div class="media-body">
                            <span class="cart-item-title">{{$product['item']['name']}}</span>
                            <span class="cart-item-amount">{{$product['qty']}}
                                *<span>@if($product['item']['promotion_price']==0){{number_format($product['item']['unit_price'])}} @else {{number_format($product['item']['promotion_price'])}}@endif
                                </span>
                            </span>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="cart-caption">
                    <div class="cart-total text-right">Tổng tiền:
                        <span class="cart-total-value">
                            @if(Session::has('cart')){{number_format($totalPrice)}} @else 0 @endif đồng
                        </span>
                    </div>
                    <div class="clearfix"></div>
                    <div class="center">
                        <div class="space10">&nbsp;</div>
                        <a href="{{route('dathang')}}" class="beta-btn primary text-center">Đặt hàng
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
                @endif
            </div>
        </div> <!-- .cart -->
    </div>
</div>
<a class="visible-xs beta-menu-toggle pull-right" href="#">
    <span class='beta-menu-toggle-text'>Menu</span>
    <i class="fa fa-bars"></i></a>
    <div class="visible-xs clearfix"></div>
    <nav class="main-menu">
        <ul class="l-inline ov">
            <li><a href="{{route('index')}}">Trang chủ</a></li>
            <li><a href="#">Loại sản phẩm</a>
                <ul class="sub-menu">
                    @foreach($loai_sp as $loai)
                    <li><a href="{{route('loaisanpham',$loai->id)}}">{{$loai->name}}</a></li>
                    @endforeach
                </ul>
            </li>
            <li><a href="{{route('gioithieu')}}">Giới thiệu</a></li>
            <li><a href="{{route('lienhe')}}">Liên hệ</a></li>
        </ul>
        <div class="clearfix"></div>
    </nav>
</div> <!-- .container -->
</div> <!-- .header-bottom -->
</div> <!-- #header -->