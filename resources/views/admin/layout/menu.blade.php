<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button  style="color: #881a1a;" class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div> <!-- /input-group -->
            </li>
            <li>
                <a style="color: #881a1a;" href="admin/dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a style="color: #881a1a;" href={{route('admin-dsdonhang')}}><i class="fa fa-cube fa-fw"></i> Đơn hàng<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a style="color: #881a1a;" href={{route('admin-dsdonhang')}}>Danh sách</a>
                    </li>
                    <!-- <li>
                        <a style="color: #881a1a;" href={{route('admin-themdonhang')}}>Thêm</a>
                    </li> -->
                </ul> <!-- /.nav-second-level -->
            </li>
            <li>
                <a style="color: #881a1a;" href={{route('admin-dsloaisp')}}><i class="fa fa-bar-chart-o fa-fw"></i> Loại sản phẩm<span
                            class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a style="color: #881a1a;" href={{route('admin-dsloaisp')}}>Danh sách</a>
                    </li>
                    <li>
                        <a style="color: #881a1a;" href={{route('admin-themloaisp')}}>Thêm</a>
                    </li>
                </ul> <!-- /.nav-second-level -->
            </li>
            <li>
                <a style="color: #881a1a;" href={{route('admin-dssp')}}><i class="fa fa-cube fa-fw"></i> Sản phẩm<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a style="color: #881a1a;" href={{route('admin-dssp')}}>Danh sách</a>
                    </li>
                    <li>
                        <a style="color: #881a1a;" href={{route('admin-themsp')}}>Thêm</a>
                    </li>
                </ul> <!-- /.nav-second-level -->
            </li>
            <li>
                <a style="color: #881a1a;" href="{{route('admin-dsuser')}}"><i class="fa fa-users fa-fw"></i> Người dùng<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a style="color: #881a1a;" href={{route('admin-dsuser')}}>Danh sách</a>
                    </li>
                    <li>
                        <a style="color: #881a1a;" href={{route('admin-themuser')}}>Thêm</a>
                    </li>
                </ul> <!-- /.nav-second-level -->
            </li>
        </ul>
    </div> <!-- /.sidebar-collapse -->
</div>