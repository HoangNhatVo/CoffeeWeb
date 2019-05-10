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
                    <form action="#" method="post" class="contact-form">
                        <div class="form-block">
                            <input name="your-name" type="text" placeholder="Tên của bạn (bắt buộc)">
                        </div>
                        <div class="form-block">
                            <input name="your-email" type="email" placeholder="Địa chỉ email (bắt buộc)">
                        </div>
                        <div class="form-block">
                            <input name="your-subject" type="text" placeholder="Tiêu đề">
                        </div>
                        <div class="form-block">
                            <textarea name="your-message" placeholder="Nội dung"></textarea>
                        </div>
                        <div class="form-block">
                            <button type="submit" class="beta-btn primary">Gửi hỗ trợ<i
                                        class="fa fa-chevron-right"></i></button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-4">
                    <h2>Thông tin liên hệ</h2>
                    <div class="space20">&nbsp;</div>

                    <h6 class="contact-title">Địa chỉ</h6>
                    <p>
                        Số 227, đường Nguyễn Văn Cừ<br>
                        Phường 4, Quận 5<br>
                        Thành phố Hồ Chí Minh
                    </p>
                    <div class="space20">&nbsp;</div>
                    <h6 class="contact-title">Mọi thắc mắc xin gửi về</h6>
                    <p>
                        Số 227, đường Nguyễn Văn Cừ<br>
                        Phường 4, Quận 5, Thành phố Hồ Chí Minh<br>
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