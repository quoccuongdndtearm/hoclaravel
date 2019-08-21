	<div style="background-color:#0b6bbf;padding:2px;color:white;margin-top:0px;">
              <h4 style="display: inline-block;color:white;">Liên hệ:1900 2629.Số 1 Ngụy Như-Kon Tum-Thanh Xuân-Hà Nội
              </h4>
      <li class="dropdown user-profile" style="display:inline-block;float:right; font-size: 18px;color:blue;">
                     <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#ffffff;" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
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
            <li class="header" style="color:red;">Tô Quang Vũ</li>
            <li class="treeview">
              <a href="http://localhost/toan/public/index.php/tongquan">
                <i class="fa fa-dashboard"></i> <span>Tổng Quan</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i>Phòng kinh doanh</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Phòng kĩ thuật</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="http://localhost/toan/public/index.php/donhang">
                <i class="fa fa-files-o"></i>
                <span>Đơn hàng</span>
                <span class="label label-primary pull-right">4</span>
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
                <i class="fa fa-th"></i> <span>Khách hàng-NCC</span>
                <small class="label pull-right label-info">new</small>
              </a>
            </li>
            <li class="treeview">
              <a href="http://localhost/toan/public/index.php/pom">
                <i class="fa fa-pie-chart"></i>
                <span>Sản phẩm</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Lõi karofi</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Lõi Ganggaru </a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Lõi Nano</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Lõi Laohsing</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>Nhập kho</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Lõi 1</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Lõi 2</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Lõi 3</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Lõi 4</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Lõi 5</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Lõi 6</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Tồn kho</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Lõi </a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Đá </a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Dụng cụ của máy lọc nước</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Phiếu thu</span>
                <i class="label pull-right label-primary">10</i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Phiếu thu chăm sóc khách hàng</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Phiếu thu của tư vấn chốt đơn</a></li>
              </ul>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-calendar"></i> <span>Phiếu chi</span>
                <small class="label pull-right label-danger">3</small>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> xăng xe</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> ship lõi</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> lõi 1</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Lõi 2</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Lõi 3</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Lõi 4</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Lõi 5</a></li>                
              </ul>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-envelope"></i> <span>Hộp thư</span>
                <small class="label pull-right label-warning">12</small>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-folder"></i> <span> Đơn trong ngày</span>
                <i class="fa fa-angle-left pull-right"></i>
                <ul class="treeview-menu">
                  <li><a href="#"><i class="fa fa-circle-o"></i> Đơn thay lõi </a></li>
                  <li><a href="#"><i class="fa fa-circle-o"></i> Đơn vệ sinh</a></li>
                  <li><a href="#"><i class="fa fa-circle-o"></i> Đơn sửa chữa</a></li>
                  <li><a href="#"><i class="fa fa-circle-o"></i> Đơn bảo hành</a></li>
                </ul>
              </a>             
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Báo cáo tổng hợp</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>k
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-book"></i> <span>Thiết lập</span></a></li>
            <li class="header">Phòng ban</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Kĩ thuật</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>CSKH</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>TVCĐ</span></a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </aside>
  <?php /**PATH D:\Xampp\htdocs\Toan\resources\views/includes/sideleft.blade.php ENDPATH**/ ?>