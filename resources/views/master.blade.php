<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="{{asset('')}}">
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=K2D" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link rel="stylesheet" href="website-assets/assets/dest/css/bootstrap.min.css">
    <link rel="stylesheet" href="website-assets/assets/dest/css/font-awesome.min.css">
    <link rel="stylesheet" href="website-assets/assets/dest/vendors/colorbox/example3/colorbox.css">
    <link rel="stylesheet" href="website-assets/assets/dest/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="website-assets/assets/dest/rs-plugin/css/responsive.css">
    <link rel="stylesheet" href="website-assets/assets/dest/css/style.css" title="style">
    <link rel="stylesheet" href="website-assets/assets/dest/css/animate.css">
    <link rel="stylesheet" href="website-assets/assets/dest/css/huong-style.css" title="style">
    {{-- <link rel="stylesheet" type="text/css" href="website-assets/style_header.css"> --}}
    <link rel="stylesheet" type="text/css" href="website-assets/style_trangch.css">
    <link rel="stylesheet" type="text/css" href="website-assets/style_gioithieu.css">
    <link rel="stylesheet" type="text/css" href="website-assets/style_loaisp.css">
    <link rel="stylesheet" type="text/css" href="website-assets/style_header.css">
    <link rel="stylesheet" type="text/css" href="website-assets/new_style.css">

    <!-- CSS of button Go to top -->
    <style>
        #myBtn {
          display: none;
          position: fixed;
          bottom: 15px;
          right: 15px;
          width: 40px;
          height: 40px;
          z-index: 99;
          font-size: 18px;
          border: none;
          outline: none;
          background-color: #999C9F;
          color: white;
          cursor: pointer;
          border-radius: 4px;
        }
        #myBtn:hover {
          background-color: #555;
        }
    </style>

</head>
<body>
    
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button>

<div class="space10">&nbsp;</div>
@include('header')
<div class="rev-slider">
    @yield('content')
</div> <!-- .container -->
@include('footer')

<!-- include js files -->
<script src="website-assets/assets/dest/js/jquery.js"></script>
<script src="website-assets/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
<script src="website-assets/assets/dest/js/bootstrap.min.js"></script>
<script src="website-assets/assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
<script src="website-assets/assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
<script src="website-assets/assets/dest/vendors/animo/Animo.js"></script>
<script src="website-assets/assets/dest/vendors/dug/dug.js"></script>
<script src="website-assets/assets/dest/js/scripts.min.js"></script>
<script src="website-assets/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="website-assets/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="website-assets/assets/dest/js/waypoints.min.js"></script>
<script src="website-assets/assets/dest/js/wow.min.js"></script>
<!--customjs-->
<script src="website-assets/assets/dest/js/custom2.js"></script>
<script>
    $(document).ready(function ($) {
        $(window).scroll(function () {
                if ($(this).scrollTop() > 150) {
                    $(".header-bottom").addClass('fixNav')
                } else {
                    $(".header-bottom").removeClass('fixNav')
                }
            }
        )

    })
</script>

<!-- script of button Go to top -->
<script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
      } else {
        document.getElementById("myBtn").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
</script>

</body>
</html>
