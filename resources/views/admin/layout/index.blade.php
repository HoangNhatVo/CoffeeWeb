<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Laravel Framework 5.x">
    <meta name="author" content="">
    <base href="{{asset('')}}">

    <!-- Bootstrap Core CSS -->
    <link href="admin-assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="admin-assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="admin-assets/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="admin-assets/dist/css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="admin-assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="admin-assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css"
          rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="admin-assets/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

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

<div id="wrapper">

    <!-- Navigation -->
    @include('admin.layout.header')

    @yield('content')


</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="admin-assets/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="admin-assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="admin-assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="admin-assets/dist/js/sb-admin-2.js"></script>

<!-- DataTables JavaScript -->
<script src="admin-assets/bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
<script src="admin-assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function () {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
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
