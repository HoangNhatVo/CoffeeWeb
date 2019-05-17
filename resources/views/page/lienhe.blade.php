@extends('master')
@section('content')
    <title>Liên hệ</title>
    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">Liên hệ</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb font-large">
                    <a href={{route('index')}}>Trang chủ</a> /
                    <span>Liên hệ</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="beta-map">

        <div class="abs-fullwidth beta-map wow flipInX">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3919.6274180946016!2d106.6827878!3d10.763171!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f1c06f4e1dd%3A0x43900f1d4539a3d!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBLaG9hIGjhu41jIFThu7Egbmhpw6puIFRwLiBIQ00!5e0!3m2!1svi!2s!4v1542373070887"
                    width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
    <div class="container">
        <div id="content" class="space-top-none">

            <div class="space50">&nbsp;</div>
            <div class="row">
                <div class="col-sm-8">
                    <h2>Hỗ trợ khách hàng</h2>
                    <div class="space20">&nbsp;</div>
                    <p>Vui lòng gửi yêu cầu hỗ trợ vào biểu mẫu bên dưới. Chúng tôi sẽ sớm liên hệ lại với bạn!</p>
                    <div class="space20">&nbsp;</div>
                    <form action="{{route('lienhe')}}" method="post" class="contact-form">
                         <input type="hidden" name="_token" value="{{csrf_token()}}">
                         <!-- @if(session('thongbao'))
                            <div class="alert alert-success" style="font-weight: bold;">
                                <i class="fa fa-check"></i>
                                {{Session::get('thongbao')}}
                            </div>
                        @endif -->
                        @if(count($errors)>0)
                            <div class="alert alert-danger" style="font-weight: bold;">
                                @foreach($errors->all() as $err)
                                <i class="fa fa-times"></i>
                                    {{$err}}
                                    <br>
                                @endforeach
                            </div>
                        @endif
                        @if(session('thongbao'))
                            <div class="alert alert-success" style="font-weight: bold;">
                                <i class="fa fa-check"></i>
                                {{Session::get('thongbao')}}
                            </div>
                        @endif
                        <div class="form-block">
                            <input name="your-name" type="text" placeholder="Họ và tên*" autofocus="true" style="border:1px solid #e1e1e1;height: 30px; border-radius: 4px;">
                        </div>
                        <div class="form-block">
                            <input name="your-email" type="email" placeholder="Địa chỉ Email*" style="border:1px solid #e1e1e1;height: 30px; border-radius: 4px;">
                        </div>
                        <div class="form-block">
                            <input name="your-subject" type="text" placeholder="Tiêu đề" style="border:1px solid #e1e1e1;height: 30px; border-radius: 4px;">
                        </div>
                        <div class="form-block">
                            <textarea name="your-message" placeholder="Nội dung*" style="border-radius: 4px;"></textarea>
                        </div>
                        <div class="form-block">
                            <button id="btn_stylenew" type="submit" class="beta-btn primary">Gửi hỗ trợ<i
                                        class="fa fa-chevron-right" ></i></button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-4">
                    <h2>Thông tin liên hệ</h2>
                    <div class="space20">&nbsp;</div>

                    <h6 class="contact-title">Địa chỉ</h6>
                    <div class="space5">&nbsp;</div>
                    <p>
                        Số 227, đường Nguyễn Văn Cừ<br>
                        <div class="space5">&nbsp;</div>
                        Phường 4, Quận 5<br>
                        <div class="space5">&nbsp;</div>
                        Thành phố Hồ Chí Minh
                    </p>
                    <div class="space20">&nbsp;</div>
                    <h6 class="contact-title">Mọi thắc mắc xin gửi về</h6>
                    <div class="space5">&nbsp;</div>
                    <p>
                        Số 227, đường Nguyễn Văn Cừ<br>
                        <div class="space5">&nbsp;</div>
                        Phường 4, Quận 5, Thành phố Hồ Chí Minh<br>
                        <div class="space5">&nbsp;</div>
                        <a href="mailto:Nonamelegendary@gmail.com">Nonamelegendary@gmail.com</a>
                    </p>
                    <div class="space20">&nbsp;</div>
                    <h6 class="contact-title"></h6>
                    <p>
                    </p>
                </div>
            </div>
        </div> <!-- #content -->
    </div> <!-- .container -->
@endsection