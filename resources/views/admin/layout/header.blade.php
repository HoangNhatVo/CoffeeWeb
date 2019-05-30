<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="{{route('admin-dashboard')}}" style="margin-left: 20px;"><img src="website-assets/assets/dest/images/logo-cake.png" width="50px;" title="NoName Coffee"></a>
        <a id="admin-panel" href="{{route('admin-dashboard')}}">Admin Panel</a>
    </div> <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right"> <!-- /.dropdown -->
        <li class="dropdown">
            <a id="dropdown-toggle" class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: #881a1a;">
                @if(Auth::check())
                <img src="website-assets/assets/dest/images/avatar_thumb.jpg" style="border-radius: 50%;" width="18px" height="18px">
                <span style="font-size: 12px; font-weight: bold;padding-left: 5px;">{{Auth::user()->full_name}}</span>
                @endif
                  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li>
                    <a style="color: #881a1a;" href={{route('admin-thongtinchitiet',Auth::user()->id)}}>
                        <i class="fa fa-user fa-fw"></i>
                        Thông tin cá nhân
                    </a>
                </li>
                <li><a style="color: #881a1a;" href="{{route('admin-suauser',Auth::user()->id)}}">
                        <i class="fa fa-gear fa-fw"></i>
                        Cập nhật thông tin
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a style="color: #881a1a;" href={{route('admin-logout')}}>
                        <i class="fa fa-sign-out fa-fw"></i>
                        Đăng xuất
                    </a>
                </li>
            </ul> <!-- /.dropdown-user -->
        </li> <!-- /.dropdown -->
    </ul> <!-- /.navbar-top-links -->

@include('admin.layout.menu')
<!-- /.navbar-static-side -->
</nav>