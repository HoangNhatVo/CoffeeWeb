@extends('master')
@section('content')
<title>Giới thiệu</title>
<div class="inner-header">
 <div class="container">
  <div class="pull-left">
   <h6 class="inner-title">Giới thiệu</h6>
  </div>
  <div class="pull-right">
   <div class="beta-breadcrumb font-large">
    <a href={{route('index')}}>Home</a> /
    <span>Giới thiệu</span>
   </div>
  </div>
  <div class="clearfix"></div>
 </div>
</div>
<div class="container">
 <div id="content">
  <div class="our-history">
   <h2 class="text-center wow fadeInDown">Our History</h2>
   <div class="space35">&nbsp;</div>

   <div class="history-slider">
    <div class="history-navigation">
     
      <a data-slide-index="0" href="blog_with_2sidebars_type_e.html" class="circle"><span
       class="auto-center">Hoàng Nhật</span></a>
         <a data-slide-index="1" href="blog_with_2sidebars_type_e.html" class="circle"><span
          class="auto-center">Văn Nhật</span></a>
           </div>

           <div class="history-slides">
            <div>
             <div class="row">
              <div class="col-sm-5">
               <img src="website-assets/assets/dest/images/a.jpg" alt="">
              </div>
              <div class="col-sm-7">
               <h5 class="other-title">Birth.</h5>
               <div class="space5">&nbsp;</div>
              <p>
                2/2/1998,<br/>
                <div class="space5">&nbsp;</div>
                227 Nguyễn Văn Cừ, P4, Q5<br/>
                <div class="space5">&nbsp;</div>
                Tp.Hồ Chí Minh
               </p>
               <div class="space20">&nbsp;</div>
               <p style="font-size: 17px;letter-spacing: 0px; font-family: inherit; text-align: justify;">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque
                porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore
                magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
                exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi
                consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit
               esse quam nihil molestiae consequatur, vel illum qui dolorem.</p>
              </div>
             </div>
            </div>
            <div>
             <div class="row">
              <div class="col-sm-5">
               <img style="width: 407px;height: 305px;" src="website-assets/assets/dest/images/vn.jpg" alt="">
              </div>
              <div class="col-sm-7">
               <h5 class="other-title">Birth.</h5>
               <div class="space5">&nbsp;</div>
               <p>
                08/01/1998,<br/>
                <div class="space5">&nbsp;</div>
                227 Nguyễn Văn Cừ, P4, Q5<br/>
                <div class="space5">&nbsp;</div>
                Tp.Hồ Chí Minh
               </p>
               <div class="space20">&nbsp;</div>
               <p style="font-size: 17px;letter-spacing: 0px; font-family: inherit; text-align: justify;">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque
                porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore
                magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
                exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi
                consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit
               esse quam nihil molestiae consequatur, vel illum qui dolorem.</p>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
         <div class="space50">&nbsp;</div>
         </div> <!-- .beta-counter block end -->
         
          </div> <!-- #content -->
         </div> <!-- .container -->
         @endsection