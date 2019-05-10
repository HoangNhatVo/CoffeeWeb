@extends('master')
@section('content')
    <title>404 Error</title>
    <section class="bg-gray">
        <div class="inner-header">
            <div class="container">
                <div class="pull-left">
                    <h6 class="inner-title">Không tìm thấy trang</h6>
                </div>
                <div class="pull-right">
                    <div class="beta-breadcrumb font-large">
                        <a href="{{route('index')}}">Trang chủ</a> / <span>404 Error</span>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="container">
            <div id="content" class="space-top-none space-bottom-none">
                <div class="abs-fullwidth bg-gray">

                    <div class="container text-center">
                        <h2></h2>
                        <div class="space40">&nbsp;</div>
                        <img src="website-assets/image/404.png" alt="" height="450px">
                        <div class="space30">&nbsp;</div>
                        <p>Có vẻ như không có gì được tìm thấy ở vị trí này. Có thể thử sử dụng tìm kiếm?</p>
                        <form role="search" method="get" id="searchform" action="{{route('search')}}">
                            <input type="text" value="" name="key" id="s" placeholder="Nhập từ khoá..."/>
                            <button class="fa fa-search" type="submit" id="searchsubmit"></button>
                        </form>
                    </div>
                    <div class="space100">&nbsp;</div>
                    <div class="space30">&nbsp;</div>
                </div>
            </div> <!-- #content -->
        </div> <!-- .container -->
    </section>
@endsection