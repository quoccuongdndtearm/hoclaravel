	<div style="background-color:#0b6bbf;padding:2px;color:white;margin-top:0px;">
              <h4 style="display: inline-block;color:white; padding: 0 0 0 20px;">Liên hệ:1900 2629.Số 1 Ngụy Như-Kon Tum-Thanh Xuân-Hà Nội
              </h4>
      <li class="dropdown user-profile" style="display:inline-block;float:right; font-size: 18px;color:blue;">
                     <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#ffffff;" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
      </li>
  </div>
<aside class="sidebar-left">

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">LỌC NƯỚC 365</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="sidebar-menu">
            <li class="treeview">
              <a href="http://localhost/toan/public/index.php/tongquan">
                <i class="fa fa-dashboard"></i> <span>Tổng Quan</span> 
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i>Phòng kinh doanh</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Phòng kĩ thuật</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="http://localhost/toan/public/index.php/donhang">
                <i class="fa fa-files-o"></i>
                <span>Báo cáo tổng hợp</span>
              </a>
              <ul class="treeview-menu" style="display: none;">
                <li><a href="#"><i class="fa fa-circle-o"></i> Đơn thay lõi</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Đơn vệ sinh </a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Đơn sửa chữa </a></li>
                <li class=""><a href="#"><i class="fa fa-circle-o"></i> Đơn bảo hành</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="http://localhost/toan/public/index.php/ton">
                <i class="fa fa-th"></i> <span>Khách hàng</span>
              </a>
            </li>
            <li class="treeview">
              <a href="http://localhost/toan/public/index.php/pom">
                <i class="fa fa-pie-chart"></i>
                <span>Kho hàng</span>
                
              </a>
            </li>
            <li class="treeview">
              <a href="http://localhost/toan/public/index.php/san-pham">
                <i class="fa fa-pie-chart"></i>
                <span>Sản phẩm</span>
                
              </a>
            </li>
            <li class="treeview">
              <a href="http://localhost/toan/public/index.php/thiet-lap">
                <i class="fa fa-pie-chart"></i>
                <span>Thiết lập</span>
                
              </a>
            </li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </aside>
  