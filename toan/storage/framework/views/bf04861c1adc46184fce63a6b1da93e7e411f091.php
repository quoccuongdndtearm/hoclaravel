<div class='content container col-sm-10' style="background-color:#fafafa;float: right;">
    
 



    <h2 style="font-size:50px;color:red;"><center>Hoạt động hôm nay</h2></center>




    <div class="container">
  <ul class="nav nav-tabs">
    <li><a href="#Khachhang">Khách hàng</a></li>
    <li><a href="#Nhacungcap">Nhà cung cấp</a></li>
  </ul>



<!-- BẮT ĐẦU PHẦN BẢNG KHÁCH HÀNG -->
  <div class="tab-content">
    <div id="Khachhang" class="tab-pane fade">
       <br/>
      <br/>
      <br/>
    <div>
       <input type="text" placeholder="Nhập tên,mã hoặc số điện thoại khách hàng"  style="width: 50%;display:inline-block;">
       <form action="/action_page.php" style="display: inline-block;">
        <select name="cars" style="padding: 0.2em;"><
          <option value="Tất cả">Tất cả</option>
          <option value="Khách hàng cũ">Khách hàng cũ</option>
          <option value="Khách hàng mới">Khách hàng mới</option>
          <option value="Khách hàng nợ">Khách hàng nợ</option>
        </select>
      </form>

      <form action="/action_page.php" style="display: inline-block;">
          <input type="submit" value="Tìm kiếm" style="padding: 0.095em;background-color:#2196F3;">
      
      </form>

    </div>

    <table class="pure-table-pure-table-horizontal" style="width: 90%;height: 350px;text-align: center;">
      <thead>
        <tr>
          <th>Hình ảnh</th>
          <th>Nhóm khách hàng</th>
        <th>Mã khách hàng</th>
        <th>Tên khách hàng</th>
        <th>Điện thoại</th>
        <th>Địa chỉ</th>
        <th>Lần cuối mua hàng</th>
        <th>Tổng tiền hàng</th>
        <th>Nợ</th>
        <th>#</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>#</td>
          <td>Khách lẻ</td>
          <td onclick="cms_detail_customer(29)" class="text-center tr-detail-item" style="cursor: pointer; color: #1b6aaa;">KH000001</td>
          <td onclick="cms_detail_customer(29)" class="text-center tr-detail-item" style="cursor: pointer; color: #1b6aaa;">Khách lẻ</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td class="text-center">
            <i class="fa fa-trash-o" style="cursor:pointer;" onclick="cms_delCustomer(29,1);">
            </i>
          </td>
        </tr>
        <tr>
          <td>#</td>
          <td>KHách lẻ</td>
          <td onclick="cms_detail_customer(29)" class="text-center tr-detail-item" style="cursor: pointer; color: #1b6aaa;">KH000001</td>
          <td onclick="cms_detail_customer(29)" class="text-center tr-detail-item" style="cursor: pointer; color: #1b6aaa;">Bùi Nhật Sang</td>
          <td>0963487729</td>
          <td>Huỳnh Giảng Nam - Phước Hòa - Tuy Phước - Bình Định</td>
          <td>2019-07-26 02:43:00</td>
          <td>160,000 </td>
          <td>-</td>
          <td class="text-center">
            <i class="fa fa-trash-o" style="cursor:pointer;" onclick="cms_delCustomer(29,1);">
            </i>
          </td>
        </tr>
        <tr>
          <td>#</td>
          <td>Khách sỉ</td>
          <td onclick="cms_detail_customer(29)" class="text-center tr-detail-item" style="cursor: pointer; color: #1b6aaa;">TP</td>
          <td onclick="cms_detail_customer(29)" class="text-center tr-detail-item" style="cursor: pointer; color: #1b6aaa;">Công ty nhựa tiền phong</td>
          <td>0912177779</td>
          <td>-</td>
          <td>2019-07-06 15:08:43</td>
          <td>1,833,300,000</td>
          <td>-</td>
          <td class="text-center">
            <i class="fa fa-trash-o" style="cursor:pointer;" onclick="cms_delCustomer(29,1);">
            </i>
          </td>
        </tr>
        <tr>
          <td>#</td>
          <td>Khách lẻ</td>
          <td onclick="cms_detail_customer(29)" class="text-center tr-detail-item" style="cursor: pointer; color: #1b6aaa;">KH000001</td>
          <td onclick="cms_detail_customer(29)" class="text-center tr-detail-item" style="cursor: pointer; color: #1b6aaa;">Công ty TNHH dược Huy Hoàng Hội An</td>
          <td>232356789</td>
          <td>268 Lý thường kiệt - Hội An</td>
          <td>2019-06-11 16:36:00</td>
          <td>5,827,800</td>
          <td>5,827,800</td>
          <td class="text-center">
            <i class="fa fa-trash-o" style="cursor:pointer;" onclick="cms_delCustomer(29,1);">
            </i>
          </td>
        </tr>
        <tr>
          <td>#</td>
          <td>KHách sỉ</td>
          <td onclick="cms_detail_customer(29)" class="text-center tr-detail-item" style="cursor: pointer; color: #1b6aaa;">thu</td>
          <td onclick="cms_detail_customer(29)" class="text-center tr-detail-item" style="cursor: pointer; color: #1b6aaa;">thu</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td class="text-center">
            <i class="fa fa-trash-o" style="cursor:pointer;" onclick="cms_delCustomer(29,1);">
            </i>
          </td>
        </tr>
      
    </tbody>

      
    </table>
         <p style="background-color:#d9edf7;width: 1027px;padding: 20px;display: inline-block;">số khách  hàng:<span style="color:red;">26</span>Tổng tiền:<span style="color:red;">1,931,706,800 đ
          </span>Tổng nợ:<span style="color:red;">7,469,921</span> <span style="color:red;"></span>
        </p>
      <div class="pull-right" style="display: inline-block;">
          <ul class="pagination">
                <li>
                  <a class="href" onclick="cms_paging_listcustomer(2)">‹</a>
                </li>
                <li>
                  <a class="href" onclick="cms_paging_listcustomer(1)">1</a>
                </li>
                <li>
                  <a class="href" onclick="cms_paging_listcustomer(2)">2</a>
                </li>
                <li class="active">
                  <a href="#">3</a>
                </li>
          </ul>
        
       </div>

    </div>
<!-- KẾT THÚC KHÁCH HÀNG -->



<!-- NHÀ CUNG CẤP -->


      
        
          <div id="Nhacungcap" class="tab-pane fade">
      
            <div>
             <input type="text" placeholder="Nhập tên,mã hoặc số điện thoại khách hàng"  style="width: 50%;display:inline-block;">
            <form action="/action_page.php" style="display: inline-block;">
                <select name="cars" style="padding: 0.2em;"><
                  <option value="Tất cả">Tất cả</option>
                  <option value="Khách hàng cũ">Khách hàng cũ</option>
                  <option value="Khách hàng mới">Khách hàng mới</option>
                  <option value="Khách hàng nợ">Khách hàng nợ</option>
                </select>
              </form>

              <form action="/action_page.php" style="display: inline-block;">
                  <input type="submit" value="Tìm kiếm" style="padding: 0.095em;background-color:#2196F3;">
                
              </form>

            </div>
            <table class="pure-table-pure-table-horizontal" style="width: 90%;height: 350px; text-align: center;">
              <thead>
                <tr>
                  <th>Hình ảnh</th>
                  <th>Mã NCC</th>
                  <th>Tên NCC</th>
                  <th>Điện thoại</th>
                  <th>Địa chỉ</th>
                  <th>Lần cuối nhập hàng</th>
                  <th>Tổng tiền hàng</th>
                  <th>Nợ</th>
                  <th>#</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>#</td>
                  <td onclick="cms_detail_customer(29)" class="text-center tr-detail-item" style="cursor: pointer; color: #1b6aaa;">....</td>
                  <td onclick="cms_detail_customer(29)" class="text-center tr-detail-item" style="cursor: pointer; color: #1b6aaa;">........</td>
                  <td>010</td>
                  <td>"</td>
                  <td>-</td>
                  <td>0</td>
                  <td>0</td>
                  <td  class="text-center">
                    <i class="fa fa-trash-o" style="cursor:pointer;" onclick="cms_delCustomer(29,1);">
                    </i>
                  </td>
                </tr>
                <tr>
                  <td>#</td>
                  <td onclick="cms_detail_customer(29)" class="text-center tr-detail-item" style="cursor: pointer; color: #1b6aaa;">",</td>
                  <td onclick="cms_detail_customer(29)" class="text-center tr-detail-item" style="cursor: pointer; color: #1b6aaa;">'</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>0</td>
                  <td>0</td>
                  <td class="text-center">
                    <i class="fa fa-trash-o" style="cursor:pointer;" onclick="cms_delCustomer(29,1);">
                      
                    </i>
                  </td>
                </tr>
                <tr>
                  <td>#</td>
                  <td onclick="cms_detail_customer(29)" class="text-center tr-detail-item" style="cursor: pointer; color: #1b6aaa;">NCC00002</td>
                  <td onclick="cms_detail_customer(29)" class="text-center tr-detail-item" style="cursor: pointer; color: #1b6aaa;">d</td>
                  <td >09</td>
                  <td >c</td>
                  <td>-</td>
                  <td>0</td>
                  <td>0</td>
                  <td class="text-center">
                    <i class="fa fa-trash-o" style="cursor:pointer;" onclick="cms_delCustomer(29,1);">                    
                    </i>
                  </td>
                </tr>
                <tr>
                  <td>#</td>
                  <td onclick="cms_detail_customer(29)" class="text-center tr-detail-item" style="cursor: pointer; color: #1b6aaa;">xxx</td>
                  <td onclick="cms_detail_customer(29)" class="text-center tr-detail-item" style="cursor: pointer; color: #1b6aaa;">xxx</td>
                  <td>0987</td>
                  <td>q</td>
                  <td>-</td>
                  <td>0</td>
                  <td>0</td>
                  <td class="text-center">
                    <i class="fa fa-trash-o" style="cursor:pointer;" onclick="cms_delCustomer(29,1);">                    
                    </i>
                  </td>
                </tr>
                <tr>
                  <td>#</td>
                  <td onclick="cms_detail_customer(29)" class="text-center tr-detail-item" style="cursor: pointer; color: #1b6aaa;">NCC00001</td>
                  <td onclick="cms_detail_customer(29)" class="text-center tr-detail-item" style="cursor: pointer; color: #1b6aaa;">loc</td>
                  <td>352525787</td>
                  <td></td>
                  <td>2019-08-12 09:33:00 </td>
                  <td>102,093,300</td>
                  <td>80,000</td>
                  <td class="text-center">
                    <i class="fa fa-trash-o" style="cursor:pointer;" onclick="cms_delCustomer(29,1);">                    
                    </i>
                  </td>
                </tr>
              </tbody>
            </table>
            <p style="background:#d9edf7;width: 1027px;padding: 20px; ">Số NCC:<span style="color:red;">5</span>Tổng tiền:<span style="color: red;">102,093,300 đ</span>Tổng nợ<span style="color:red;">80,000 đ</span>
             </p> 
             <div class="pull-right" style="display: inline-block;">
              <ul class="pagination">
                <li>
                  <a class="href" onclick="cms_paging_listcustomer(2)">‹</a>
                </li>
                <li>
                  <a class="href" onclick="cms_paging_listcustomer(1)">1</a>
                </li>
                <li>
                  <a class="href" onclick="cms_paging_listcustomer(2)">2</a>
                </li>
                <li class="active">
                  <a href="#">3</a>
                </li>
              </ul>
        
            </div>
          </div>
    
        </div>
    </div>
    </div>


  <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="KhachhangNCC.js" type='text/javascript'></script>
    <script>
      $('.sidebar-menu').SidebarNav()
    </script>
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
// js khác

$(document).ready(function(){
  $(".nav-tabs a").click(function(){
    $(this).tab('show');
  });
  $('.nav-tabs a').on('shown.bs.tab', function(event){
    var x = $(event.target).text();         // active tab
    var y = $(event.relatedTarget).text();  // previous tab
    $(".act span").text(x);
    $(".prev span").text(y);
  });
});
</script><?php /**PATH D:\Xampp\htdocs\toan\resources\views/includes/customer.blade.php ENDPATH**/ ?>