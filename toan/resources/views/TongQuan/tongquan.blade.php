<div class='content container col-sm-10' style="background-color:#f8f9fc;float: right;">

  <!-- Start -->

  <div class="row" style="display: flex;">
    <div class="box-green boxbox col-xs-3 col-sm-3 col-md-3 col-lg-3">
      <p>Doanh số</p>
      <p style="font-size: 25px;">999.999đ</p>  
    </div>
    <div class="box-red boxbox col-xs-3 col-sm-3 col-md-3 col-lg-3">
      <p>Tổng đơn hàng</p>

      <p style="font-size: 25px;">999.999d</p> 

    </div>
    <div class="box-blue boxbox col-xs-3 col-sm-3 col-md-3 col-lg-3">
      <p>Chiết khấu</p>

      <p style="font-size: 25px;">999.999d</p> 

    </div>
    <div class="box-orange boxbox col-xs-3 col-sm-3 col-md-3 col-lg-3">
      <p>Số đơn vệ sinh</p>
      <p style="font-size: 25px;">999.999đ</p> 

    </div>
  </div>

  <!-- End -->

  <div class="wraper">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="wraper_1">
          <!-- Nav tabs -->
          <div>
            <ul class="nav nav-tabs" role="tablist" style="display: flex;">
              <li role="presentation" class="active col-sm-8 padd_0" style="text-align: center;">
                <a class="green_" href="#home" aria-controls="home" role="tab" data-toggle="tab" style="font-weight: bold">Đơn đang xử lí</a>
              </li>
              <li role="presentation" class="col-sm-8 padd_0" style="text-align: center;">
                <a class="red_" href="#profile" aria-controls="profile" role="tab" data-toggle="tab" style="font-weight: bold">Đơn giao lắp</a>
              </li>
              <li role="presentation" class="col-sm-8 padd_0" style="text-align: center;">
                <a class="blue_" href="#messages" aria-controls="messages" role="tab" data-toggle="tab" style="font-weight: bold">Đơn vệ sinh</a>
              </li>
              <li role="presentation" class="col-sm-8 padd_0" style="text-align: center;">
                <a class="orange_" href="#settings" aria-controls="settings" role="tab" data-toggle="tab" style="font-weight: bold">Đơn hủy</a>
              </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="home">

                <!-- Thẻ đơn hàng -->
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="padding: 0px">
                  <div class="wraper_1" style="padding: 15px 0 0 0">
                    <div class="list-group">

                      <!-- Thêm đơn hàng -->
                      <a class="btn btn-primary" data-toggle="modal" href='#modal-id'><i class="fa fa-plus"></i> Thêm đơn hàng</a>
                      <div class="modal fade" id="modal-id">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title">Tạo mới đơn hàng</h4>
                            </div>
                            <div class="modal-body" style="overflow: auto;">
                              <div class="form-group" style="margin-bottom: 25px;">
                                <label for="">Tên khách hàng</label>
                                <input style="width: 60%; float: right;" type="text" class="form-control" id="" placeholder="Nhập tên KH (bắt buộc)">
                              </div>
                              <div class="form-group" style="margin-bottom: 25px;">
                                <label for="">Địa chỉ:</label>
                                <input style="width: 60%; float: right;" type="text" class="form-control" id="" placeholder="Nhập địa chỉ (bắt buộc)">
                              </div>
                              <div class="form-group" style="margin-bottom: 25px;">
                                <label for="">Loại máy:</label>
                                <select style="width: 60%; float: right;" name="" id="input" class="form-control" required="required">
                                  <option value="">Kangaroo</option>
                                  <option value="">Karofi</option>
                                  <option value="">Nano Geyser</option>
                                  <option value="">Sunhouse</option>
                                  <option value="">Korihome</option>
                                </select>
                              </div>
                              <div class="form-group" style="margin-bottom: 25px;">
                                <label for="">Tình trạng máy:</label>
                                <input style="width: 60%; float: right;" type="text" class="form-control" id="" placeholder="Nhập tình trạng máy (bắt buộc)">
                              </div>
                              <div class="form-group" style="margin-bottom: 25px;">
                                <label for="">Thời hạn sử dụng:</label>
                                <input style="width: 60%; float: right;" type="text" class="form-control" id="" placeholder="Nhập thời hạn sử dụng (bắt buộc)">
                              </div>
                              
                              <div class="form-group" style="margin-bottom: 25px;">
                                <label for="">Người hẹn đơn:</label>

                                <input style="width: 60%; float: right;" type="text" class="form-control" id="" placeholder="Nhập tên người hẹn đơn">
                              </div>
                              <div class="form-group" style="margin-bottom: 25px;">
                                <label for="">Kỹ thuật thực hiện:</label>
                                <input style="width: 60%; float: right;" type="text" class="form-control" id="" placeholder="Nhập tên kỹ thuật">
                              </div>
                              <div class="form-group" style="margin-bottom: 25px;">
                                <label for="">Ngày tạo đơn:</label>

                                <input style="width: 60%; float: right;" type="date" name="" id="input" class="form-control" value="" required="required" title="">
                              </div>
                              <div class="form-group" style="margin-bottom: 25px;">
                                <label for="">Mô tả:</label>

                                <textarea style="width: 60%; float: right;"></textarea>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                              <button type="submit" class="btn btn-primary">Lưu</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Kết thúc thêm đơn hàng -->

                      <div class="form-group">
                      </div>
                      <p class="list-group-item active" style="text-align: center;font-weight: bold">Đơn hàng</p>
                      <a href="#" class="list-group-item">Đơn đang xử lí 1</a>
                      <a href="#" class="list-group-item">Đơn đang xử lí 1</a>
                      <a href="#" class="list-group-item">Đơn đang xử lí 1</a>
                      <a href="#" class="list-group-item">Đơn đang xử lí 1</a>
                      <a href="#" class="list-group-item">Đơn đang xử lí 1</a>
                      <a href="#" class="list-group-item">Đơn đang xử lí 1</a>
                      <a href="#" class="list-group-item">Đơn đang xử lí 1</a>
                      <a href="#" class="list-group-item">Đơn đang xử lí 1</a>
                      <ul class="pagination">
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- End thẻ đơn hàng -->

                <!-- Chi tiết đơn -->
                <div class="row">
                  <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 bao">

                    <!-- Thông tin khách hàng -->
                    <div style="display: inline-block;"><h3>Mã đơn hàng: FFAA1212</h3></div>

                    <!-- Thực hiện đơn -->
                    <a class="btn btn-primary" style="float: right;margin: 15px 0 0 0;" data-toggle="modal" href='#modal-id-thuchiendon'>Thực hiện đơn hàng</a>
                    <div class="modal fade" id="modal-id-thuchiendon">
                      <div class="modal-dialog" style="width: 60%;">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Thực hiện đơn hàng</h4>
                          </div>
                          <div class="modal-body">
                            <div class="form-group" style="margin-bottom: 25px;">
                              <label for="">Loại đơn:</label>
                              <select style="width: 70%; float: right;overflow: scroll;" name="" id="input" class="form-control" required="required">
                                <option value="">Đơn vệ sinh</option>
                                <option value="">Đơn phát sinh</option>
                                <option value="">Đơn bảo hành</option>
                                <option value="">Đơn lắp máy</option>
                              </select>
                            </div>
                            <div class="form-group" style="margin-bottom: 25px;">
                              <label for="">Lõi thay:</label>
                              
                              <input style="width: 41%; float: right;margin-left:9% " type="search" name="" id="input" class="form-control" value="" required="required" title="" placeholder="Nhập tên để tìm">
                              
                              <select style="width: 20%; float: right;overflow: scroll;" name="" id="input" class="form-control" required="required">
                                <option value="">Lõi nano</option>
                                <option value="">Lõi Kang</option>
                                <option value="">Lõi Karofi</option>
                                <option value="">Lõi UF</option>
                              </select>
                              
                            </div> 
                            <div class="form-group" style="margin-bottom: 15px;">
                              <table class="table table_boder table-hover">
                                <thead>
                                  <tr>
                                    <th>STT</th>
                                    <th>Mã SP</th>
                                    <th>Tên SP</th>
                                    <th>Số lượng</th>
                                    <th>Đơn giá</th>
                                    <th>Thành tiền</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>2231</td>
                                    <td>Lõi Kangaroo 1</td>
                                    <td style="width: 15%"><input style="" type="search" name="" id="input" class="form-control" value="" required="required" title="" placeholder="Nhập SL"></td>
                                    <td>100.000đ</td>
                                    <td>200.000đ</td> 
                                    <td>Xóa</td>
                                    
                                  </tr>
                                  <tr>
                                    <td>1</td>
                                    <td>2231</td>
                                    <td>Lõi Kangaroo 1</td>
                                    <td style="width: 15%"><input style="" type="search" name="" id="input" class="form-control" value="" required="required" title="" placeholder="Nhập SL"></td>
                                    <td>100.000đ</td>
                                    <td>200.000đ</td> 
                                    <td>Xóa</td>
                                    
                                  </tr>
                                  <tr>
                                    <td>1</td>
                                    <td>2231</td>
                                    <td>Lõi Kangaroo 1</td>
                                    <td style="width: 15%"><input style="" type="search" name="" id="input" class="form-control" value="" required="required" title="" placeholder="Nhập SL"></td>
                                    <td>100.000đ</td>
                                    <td>200.000đ</td> 
                                    <td>Xóa</td>
                                    
                                  </tr>
                                  <tr>
                                    <td>1</td>
                                    <td>2231</td>
                                    <td>Lõi Kangaroo 1</td>
                                    <td style="width: 15%"><input style="" type="search" name="" id="input" class="form-control" value="" required="required" title="" placeholder="Nhập SL"></td>
                                    <td>100.000đ</td>
                                    <td>200.000đ</td> 
                                    <td>Xóa</td>
                                    
                                  </tr>
                                </tbody>
                              </table>
                            </div>                           
                            <div class="form-group" style="margin-bottom: 25px;">
                                <label for="">Hình thức thanh toán</label>
                                <div class="radio" style="width: 70%; float: right;margin: 0 0 0 0">
                                  <label style="padding-right: 10px;">
                                    <input type="radio" name="input_thanhtoan" id="input" value="" checked="checked">
                                    Tiền mặt
                                  </label>
                                  <label>
                                    <input type="radio" name="input_thanhtoan" id="input" value="" >
                                    Chuyển khoản
                                  </label>

                                </div>
                            </div>
                            <div class="form-group" style="margin-bottom: 15px;">
                              <label for="">Tiền hàng:</label>
                              <div style="width: 70%; float: right;">0 VNĐ</div>
                            </div>                            
                            <div class="form-group" style="margin-bottom: 25px;">
                              <label for="">Khách trả:</label>
                              <input style="width: 70%; float: right;" type="text" class="form-control" id="" placeholder="0">
                            </div>
                            <div class="form-group" style="margin-bottom: 25px;">
                              <label for="">Còn nợ:</label>
                              <div style="width: 70%; float: right;">0 VNĐ</div>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                          <button type="button" class="btn btn-primary">Lưu</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Kết thúc Thực hiện đơn -->

                  <div class="panel panel-info">
                    <div class="panel-heading">
                      <h3 class="panel-title">Thông tin khách hàng</h3>
                    </div>
                    <div class="panel-body">
                      <ul class="list-group">
                        <li class="list-group-item"><strong>Tên khách hàng:</strong>   Nguyễn Văn A </li>
                        <li class="list-group-item"><strong>Địa chỉ:</strong>   Tòa HH1 khu đô thị ABCA</li>
                        <li class="list-group-item"><strong>Loại máy:</strong>   Kangaroo 9 lõi</li>
                        <li class="list-group-item"><strong>Tình trạng máy:</strong>   Không ra nước</li>
                        <li class="list-group-item"><strong>Thời gian sử dụng:</strong>   12 tháng</li>
                        <li class="list-group-item"><strong>Người hẹn đơn:</strong>   Nguyễn Thị B</li>
                        <li class="list-group-item"><strong>Kỹ thuật thực hiện:</strong>   Trần C</li>
                        <li class="list-group-item"><strong>Ngày khởi tạo:</strong>   18/08/2019</li>
                        <li class="list-group-item"><strong>Mô tả:</strong>   Khách dễ tính, thu nhập 30tr, rảnh 6h</li>
                      </ul>
                    </div>
                  </div>
                  <!-- End Thông tin khách hàng -->

                  <!-- Hình ảnh -->
                              <!-- <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <a href="#" class="thumbnail" style="display: inline-block;">
                                  <img src="locnuoc.jpg" alt="">
                                </a>
                                <a href="#" class="thumbnail" style="display: inline-block;">
                                  <img src="#" alt="">
                                </a>
                                <a href="#" class="thumbnail" style="display: inline-block;">
                                  <img src="#" alt="">
                                </a>
                                <a href="#" class="thumbnail" style="display: inline-block;">
                                  <img src="#" alt="">
                                </a>
                                <a href="#" class="thumbnail" style="display: inline-block;">
                                  <img src="#" alt="">
                                </a>
                                <a href="#" class="thumbnail" style="display: inline-block;">
                                  <img src="#" alt="">
                                </a>
                                <a href="#" class="thumbnail" style="display: inline-block;">
                                  <img src="#" alt="">
                                </a>
                              </div> -->
                              <div id="carousel-id" class="carousel slide" data-ride="carousel">
                                <p>Hình ảnh tại nhà khách</p>
                                <ol class="carousel-indicators">
                                  <li data-target="#carousel-id" data-slide-to="0" class=""></li>
                                  <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                                  <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
                                  <li data-target="#carousel-id" data-slide-to="3" class=""></li>
                                  <li data-target="#carousel-id" data-slide-to="4" class=""></li>
                                  <li data-target="#carousel-id" data-slide-to="5" class=""></li>
                                  <li data-target="#carousel-id" data-slide-to="6" class=""></li>
                                  
                                  
                                </ol>
                                <div class="carousel-inner" style="margin-bottom: 12px;">
                                  <div class="item">
                                    <img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzc3NyI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojN2E3YTdhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+Rmlyc3Qgc2xpZGU8L3RleHQ+PC9zdmc+">
                                  </div>
                                  <div class="item">
                                    <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzY2NiI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNmE2YTZhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+U2Vjb25kIHNsaWRlPC90ZXh0Pjwvc3ZnPg==">
                                    
                                  </div>
                                  <div class="item active">
                                    <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNWE1YTVhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+VGhpcmQgc2xpZGU8L3RleHQ+PC9zdmc+">
                                    
                                  </div>
                                  <div class="item">
                                    <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Sixth slide" alt="Fouth slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNWE1YTVhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+VGhpcmQgc2xpZGU8L3RleHQ+PC9zdmc+">
                                    
                                  </div>
                                  <div class="item">
                                    <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Sixth slide" alt="Fouth slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNWE1YTVhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+VGhpcmQgc2xpZGU8L3RleHQ+PC9zdmc+">
                                    
                                  </div>
                                  <div class="item">
                                    <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Sixth slide" alt="Fouth slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNWE1YTVhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+VGhpcmQgc2xpZGU8L3RleHQ+PC9zdmc+">
                                    
                                  </div>
                                  <div class="item">
                                    <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Sixth slide" alt="Fouth slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNWE1YTVhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+VGhpcmQgc2xpZGU8L3RleHQ+PC9zdmc+">
                                    
                                  </div>
                                </div>
                                <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                              </div>

                              <!-- End Hình ảnh -->

                              <!-- Comments -->
                              
                              <div class="panel panel-info">

                                <!-- Cột bình luận -->
                                <div class="panel-heading">
                                  <h3 class="panel-title">Bình luận</h3>
                                </div>
                                <div class="panel-body">
                                  <div class="bao_ngoai">
                                    <div class="form-group">
                                      <div class="col-sm-10" style="padding: 0px;">
                                        <textarea class="form-control" rows="5" id="comment"></textarea>
                                      </div>
                                      <label for="input" class="col-sm-2 control-label">
                                        <button type="button" class="btn btn-primary">Bình luận</button>
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <!-- End Cột bình luận -->

                                <ul class="list-group" styl>
                                  <li class="list-group-item">
                                    - Đơn này khó lắm, bỏ đi<br/>
                                    <i style="font-size: 13px; opacity: 0.6">Ngày 13/03/2019 23:12 - Newuser</i>
                                  </li>
                                  <li class="list-group-item">
                                    - Khách không có nhà<br/>
                                    <i style="font-size: 13px; opacity: 0.6">Ngày 13/03/2019 23:12 - Newuser</i>
                                  </li>
                                  <li class="list-group-item">
                                    - Đến thay lõi đi<br/>
                                    <i style="font-size: 13px; opacity: 0.6">Ngày 13/03/2019 23:12 - Newuser</i>
                                  </li>
                                  <li class="list-group-item">
                                    - Đơn này khó lắm, bỏ đi<br/>
                                    <i style="font-size: 13px; opacity: 0.6">Ngày 13/03/2019 23:12 - Newuser</i>
                                  </li>
                                  <li class="list-group-item">
                                    - Đơn này khó lắm, bỏ đi<br/>
                                    <i style="font-size: 13px; opacity: 0.6">Ngày 13/03/2019 23:12 - Newuser</i>
                                  </li>
                                  
                                  <div style="text-align:center;">
                                    <ul class="pagination pagination-sm" style="text-align: center;">
                                      <li><a href="#">1</a></li>
                                      <li><a href="#">2</a></li>
                                      <li><a href="#">3</a></li>
                                      <li><a href="#">4</a></li>
                                      <li><a href="#">5</a></li>
                                      <li><a href="#">&raquo;</a></li>
                                    </ul>
                                  </div>
                                </ul>

                              </div>


                              <!-- End comments -->
                              <div style="margin-bottom: 20px;">
                                      <button type="button" class="btn btn-primary">Xuất Excel</button>
                                      <button type="button" class="btn btn-primary">Lưu trữ đơn</button>
                              </div>



                            </div>
                          </div>
                          <!-- End -->

                        </div>
                        <div role="tabpanel" class="tab-pane" id="profile">
                          <!-- Thẻ đơn hàng -->
                          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="padding: 0px">
                            <div class="wraper_1" style="padding: 15px 0 0 0">
                              <div class="list-group">
                                <a class="btn btn-primary" href="#" role="button" style="display: inline-block;margin: 0 0 0 0"><i class="fa fa-plus"></i> Thêm</a>
                                <div class="form-group">
                                </div>
                                <p class="list-group-item active" style="text-align: center;font-weight: bold">Đơn hàng</p>
                                <a href="#" class="list-group-item">Đơn giao lắp 1</a>
                                <a href="#" class="list-group-item">Đơn giao lắp 1</a>
                                <a href="#" class="list-group-item">Đơn giao lắp 1</a>
                                <a href="#" class="list-group-item">Đơn giao lắp 1</a>
                                <a href="#" class="list-group-item">Đơn giao lắp 1</a>
                                <a href="#" class="list-group-item">Đơn giao lắp 1</a>
                                <a href="#" class="list-group-item">Đơn giao lắp 1</a>
                                <a href="#" class="list-group-item">Đơn giao lắp 1</a>
                                <ul class="pagination">
                                  <li><a href="#">1</a></li>
                                  <li><a href="#">2</a></li>
                                  <li><a href="#">3</a></li>
                                  <li><a href="#">4</a></li>
                                  <li><a href="#">5</a></li>
                                  <li><a href="#">&raquo;</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <!-- End thẻ đơn hàng -->

                          <!-- Chi tiết đơn -->
                          <div class="row">
                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 bao">

                              <!-- Thông tin khách hàng -->
                              <div class="panel panel-info">
                                <div class="panel-heading">
                                  <h3 class="panel-title">Thông tin khách hàng</h3>
                                </div>
                                <div class="panel-body">
                                  <ul class="list-group">
                                    <li class="list-group-item">Tên khách hàng: </li>
                                    <li class="list-group-item">Địa chỉ: </li>
                                    <li class="list-group-item">Loại máy: </li>
                                    <li class="list-group-item">Tình trạng máy: </li>
                                    <li class="list-group-item">Thời gian sử dụng: </li>
                                    <li class="list-group-item">Mô tả: </li>
                                  </ul>
                                </div>
                              </div>
                              <!-- End Thông tin khách hàng -->

                              <!-- Hình ảnh -->
                              <!-- <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <a href="#" class="thumbnail" style="display: inline-block;">
                                  <img src="locnuoc.jpg" alt="">
                                </a>
                                <a href="#" class="thumbnail" style="display: inline-block;">
                                  <img src="#" alt="">
                                </a>
                                <a href="#" class="thumbnail" style="display: inline-block;">
                                  <img src="#" alt="">
                                </a>
                                <a href="#" class="thumbnail" style="display: inline-block;">
                                  <img src="#" alt="">
                                </a>
                                <a href="#" class="thumbnail" style="display: inline-block;">
                                  <img src="#" alt="">
                                </a>
                                <a href="#" class="thumbnail" style="display: inline-block;">
                                  <img src="#" alt="">
                                </a>
                                <a href="#" class="thumbnail" style="display: inline-block;">
                                  <img src="#" alt="">
                                </a>
                              </div> -->
                              <div id="carousel-id" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                  <li data-target="#carousel-id" data-slide-to="0" class=""></li>
                                  <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                                  <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
                                  <li data-target="#carousel-id" data-slide-to="3" class=""></li>
                                  <li data-target="#carousel-id" data-slide-to="4" class=""></li>
                                  <li data-target="#carousel-id" data-slide-to="5" class=""></li>
                                  <li data-target="#carousel-id" data-slide-to="6" class=""></li>
                                  
                                  
                                </ol>
                                <div class="carousel-inner" style="margin-bottom: 12px;">
                                  <div class="item">
                                    <img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzc3NyI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojN2E3YTdhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+Rmlyc3Qgc2xpZGU8L3RleHQ+PC9zdmc+">
                                  </div>
                                  <div class="item">
                                    <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzY2NiI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNmE2YTZhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+U2Vjb25kIHNsaWRlPC90ZXh0Pjwvc3ZnPg==">
                                    
                                  </div>
                                  <div class="item active">
                                    <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNWE1YTVhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+VGhpcmQgc2xpZGU8L3RleHQ+PC9zdmc+">
                                    
                                  </div>
                                  <div class="item">
                                    <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Sixth slide" alt="Fouth slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNWE1YTVhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+VGhpcmQgc2xpZGU8L3RleHQ+PC9zdmc+">
                                    
                                  </div>
                                  <div class="item">
                                    <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Sixth slide" alt="Fouth slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNWE1YTVhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+VGhpcmQgc2xpZGU8L3RleHQ+PC9zdmc+">
                                    
                                  </div>
                                  <div class="item">
                                    <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Sixth slide" alt="Fouth slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNWE1YTVhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+VGhpcmQgc2xpZGU8L3RleHQ+PC9zdmc+">
                                    
                                  </div>
                                  <div class="item">
                                    <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Sixth slide" alt="Fouth slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNWE1YTVhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+VGhpcmQgc2xpZGU8L3RleHQ+PC9zdmc+">
                                    
                                  </div>
                                </div>
                                <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                              </div>

                              <!-- End Hình ảnh -->

                              <!-- Comments -->
                              
                              <div class="panel panel-info">

                                <!-- Cột bình luận -->
                                <div class="panel-heading">
                                  <h3 class="panel-title">Bình luận</h3>
                                </div>
                                <div class="panel-body">
                                  <div class="bao_ngoai">
                                    <div class="form-group">
                                      <div class="col-sm-10" style="padding: 0px;">
                                        <textarea class="form-control" rows="5" id="comment"></textarea>
                                      </div>
                                      <label for="input" class="col-sm-2 control-label">
                                        <button type="button" class="btn btn-primary">Bình luận</button>
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <!-- End Cột bình luận -->

                                <ul class="list-group" styl>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <div style="text-align:center;">
                                    <ul class="pagination pagination-sm" style="text-align: center;">
                                      <li><a href="#">1</a></li>
                                      <li><a href="#">2</a></li>
                                      <li><a href="#">3</a></li>
                                      <li><a href="#">4</a></li>
                                      <li><a href="#">5</a></li>
                                      <li><a href="#">&raquo;</a></li>
                                    </ul>
                                  </div>

                                </ul>

                              </div>


                              <!-- End comments -->




                            </div>
                          </div>
                          <!-- End -->
                        </div>
                        <div role="tabpanel" class="tab-pane" id="messages">
                          <!-- Thẻ đơn hàng -->
                          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="padding: 0px">
                            <div class="wraper_1" style="padding: 15px 0 0 0">
                              <div class="list-group">
                                <a class="btn btn-primary" href="#" role="button" style="display: inline-block;margin: 0 0 0 0"><i class="fa fa-plus"></i> Thêm</a>
                                <div class="form-group">
                                </div>
                                <p class="list-group-item active" style="text-align: center;font-weight: bold">Đơn hàng</p>
                                <a href="#" class="list-group-item">Đơn vệ sinh 1</a>
                                <a href="#" class="list-group-item">Đơn vệ sinh 1</a>
                                <a href="#" class="list-group-item">Đơn vệ sinh 1</a>
                                <a href="#" class="list-group-item">Đơn vệ sinh 1</a>
                                <a href="#" class="list-group-item">Đơn vệ sinh 1</a>
                                <a href="#" class="list-group-item">Đơn vệ sinh 1</a>
                                <a href="#" class="list-group-item">Đơn vệ sinh 1</a>
                                <a href="#" class="list-group-item">Đơn vệ sinh 1</a>
                                <ul class="pagination">
                                  <li><a href="#">1</a></li>
                                  <li><a href="#">2</a></li>
                                  <li><a href="#">3</a></li>
                                  <li><a href="#">4</a></li>
                                  <li><a href="#">5</a></li>
                                  <li><a href="#">&raquo;</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <!-- End thẻ đơn hàng -->

                          <!-- Chi tiết đơn -->
                          <div class="row">
                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 bao">

                              <!-- Thông tin khách hàng -->
                              <div class="panel panel-info">
                                <div class="panel-heading">
                                  <h3 class="panel-title">Thông tin khách hàng</h3>
                                </div>
                                <div class="panel-body">
                                  <ul class="list-group">
                                    <li class="list-group-item">Tên khách hàng: </li>
                                    <li class="list-group-item">Địa chỉ: </li>
                                    <li class="list-group-item">Loại máy: </li>
                                    <li class="list-group-item">Tình trạng máy: </li>
                                    <li class="list-group-item">Thời gian sử dụng: </li>
                                    <li class="list-group-item">Mô tả: </li>
                                  </ul>
                                </div>
                              </div>
                              <!-- End Thông tin khách hàng -->

                              <!-- Hình ảnh -->
                              <!-- <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <a href="#" class="thumbnail" style="display: inline-block;">
                                  <img src="locnuoc.jpg" alt="">
                                </a>
                                <a href="#" class="thumbnail" style="display: inline-block;">
                                  <img src="#" alt="">
                                </a>
                                <a href="#" class="thumbnail" style="display: inline-block;">
                                  <img src="#" alt="">
                                </a>
                                <a href="#" class="thumbnail" style="display: inline-block;">
                                  <img src="#" alt="">
                                </a>
                                <a href="#" class="thumbnail" style="display: inline-block;">
                                  <img src="#" alt="">
                                </a>
                                <a href="#" class="thumbnail" style="display: inline-block;">
                                  <img src="#" alt="">
                                </a>
                                <a href="#" class="thumbnail" style="display: inline-block;">
                                  <img src="#" alt="">
                                </a>
                              </div> -->
                              <div id="carousel-id" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                  <li data-target="#carousel-id" data-slide-to="0" class=""></li>
                                  <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                                  <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
                                  <li data-target="#carousel-id" data-slide-to="3" class=""></li>
                                  <li data-target="#carousel-id" data-slide-to="4" class=""></li>
                                  <li data-target="#carousel-id" data-slide-to="5" class=""></li>
                                  <li data-target="#carousel-id" data-slide-to="6" class=""></li>
                                  
                                  
                                </ol>
                                <div class="carousel-inner" style="margin-bottom: 12px;">
                                  <div class="item">
                                    <img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzc3NyI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojN2E3YTdhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+Rmlyc3Qgc2xpZGU8L3RleHQ+PC9zdmc+">
                                  </div>
                                  <div class="item">
                                    <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzY2NiI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNmE2YTZhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+U2Vjb25kIHNsaWRlPC90ZXh0Pjwvc3ZnPg==">
                                    
                                  </div>
                                  <div class="item active">
                                    <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNWE1YTVhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+VGhpcmQgc2xpZGU8L3RleHQ+PC9zdmc+">
                                    
                                  </div>
                                  <div class="item">
                                    <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Sixth slide" alt="Fouth slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNWE1YTVhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+VGhpcmQgc2xpZGU8L3RleHQ+PC9zdmc+">
                                    
                                  </div>
                                  <div class="item">
                                    <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Sixth slide" alt="Fouth slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNWE1YTVhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+VGhpcmQgc2xpZGU8L3RleHQ+PC9zdmc+">
                                    
                                  </div>
                                  <div class="item">
                                    <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Sixth slide" alt="Fouth slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNWE1YTVhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+VGhpcmQgc2xpZGU8L3RleHQ+PC9zdmc+">
                                    
                                  </div>
                                  <div class="item">
                                    <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Sixth slide" alt="Fouth slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNWE1YTVhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+VGhpcmQgc2xpZGU8L3RleHQ+PC9zdmc+">
                                    
                                  </div>
                                </div>
                                <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                              </div>

                              <!-- End Hình ảnh -->

                              <!-- Comments -->
                              
                              <div class="panel panel-info">

                                <!-- Cột bình luận -->
                                <div class="panel-heading">
                                  <h3 class="panel-title">Bình luận</h3>
                                </div>
                                <div class="panel-body">
                                  <div class="bao_ngoai">
                                    <div class="form-group">
                                      <div class="col-sm-10" style="padding: 0px;">
                                        <textarea class="form-control" rows="5" id="comment"></textarea>
                                      </div>
                                      <label for="input" class="col-sm-2 control-label">
                                        <button type="button" class="btn btn-primary">Bình luận</button>
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <!-- End Cột bình luận -->

                                <ul class="list-group" styl>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <div style="text-align:center;">
                                    <ul class="pagination pagination-sm" style="text-align: center;">
                                      <li><a href="#">1</a></li>
                                      <li><a href="#">2</a></li>
                                      <li><a href="#">3</a></li>
                                      <li><a href="#">4</a></li>
                                      <li><a href="#">5</a></li>
                                      <li><a href="#">&raquo;</a></li>
                                    </ul>
                                  </div>
                                </ul>

                              </div>


                              <!-- End comments -->




                            </div>
                          </div>
                          <!-- End -->
                        </div>
                        <div role="tabpanel" class="tab-pane" id="settings">
                          <!-- Thẻ đơn hàng -->
                          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" style="padding: 0px">
                            <div class="wraper_1" style="padding: 15px 0 0 0">
                              <div class="list-group">
                                <a class="btn btn-primary" href="#" role="button" style="display: inline-block;margin: 0 0 0 0"><i class="fa fa-plus"></i> Thêm</a>
                                <div class="form-group">
                                </div>
                                <p class="list-group-item active" style="text-align: center;font-weight: bold">Đơn hàng</p>
                                <a href="#" class="list-group-item">Đơn hủy 1</a>
                                <a href="#" class="list-group-item">Đơn hủy 1</a>
                                <a href="#" class="list-group-item">Đơn hủy 1</a>
                                <a href="#" class="list-group-item">Đơn hủy 1</a>
                                <a href="#" class="list-group-item">Đơn hủy 1</a>
                                <a href="#" class="list-group-item">Đơn hủy 1</a>
                                <a href="#" class="list-group-item">Đơn hủy 1</a>
                                <a href="#" class="list-group-item">Đơn hủy 1</a>
                                <ul class="pagination">
                                  <li><a href="#">1</a></li>
                                  <li><a href="#">2</a></li>
                                  <li><a href="#">3</a></li>
                                  <li><a href="#">4</a></li>
                                  <li><a href="#">5</a></li>
                                  <li><a href="#">&raquo;</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <!-- End thẻ đơn hàng -->

                          <!-- Chi tiết đơn -->
                          <div class="row">
                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 bao">

                              <!-- Thông tin khách hàng -->
                              <div class="panel panel-info">
                                <div class="panel-heading">
                                  <h3 class="panel-title">Thông tin khách hàng</h3>
                                </div>
                                <div class="panel-body">
                                  <ul class="list-group">
                                    <li class="list-group-item">Tên khách hàng: </li>
                                    <li class="list-group-item">Địa chỉ: </li>
                                    <li class="list-group-item">Loại máy: </li>
                                    <li class="list-group-item">Tình trạng máy: </li>
                                    <li class="list-group-item">Thời gian sử dụng: </li>
                                    <li class="list-group-item">Mô tả: </li>
                                  </ul>
                                </div>
                              </div>
                              <!-- End Thông tin khách hàng -->

                              <!-- Hình ảnh -->
                              <!-- <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <a href="#" class="thumbnail" style="display: inline-block;">
                                  <img src="locnuoc.jpg" alt="">
                                </a>
                                <a href="#" class="thumbnail" style="display: inline-block;">
                                  <img src="#" alt="">
                                </a>
                                <a href="#" class="thumbnail" style="display: inline-block;">
                                  <img src="#" alt="">
                                </a>
                                <a href="#" class="thumbnail" style="display: inline-block;">
                                  <img src="#" alt="">
                                </a>
                                <a href="#" class="thumbnail" style="display: inline-block;">
                                  <img src="#" alt="">
                                </a>
                                <a href="#" class="thumbnail" style="display: inline-block;">
                                  <img src="#" alt="">
                                </a>
                                <a href="#" class="thumbnail" style="display: inline-block;">
                                  <img src="#" alt="">
                                </a>
                              </div> -->
                              <div id="carousel-id" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                  <li data-target="#carousel-id" data-slide-to="0" class=""></li>
                                  <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                                  <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
                                  <li data-target="#carousel-id" data-slide-to="3" class=""></li>
                                  <li data-target="#carousel-id" data-slide-to="4" class=""></li>
                                  <li data-target="#carousel-id" data-slide-to="5" class=""></li>
                                  <li data-target="#carousel-id" data-slide-to="6" class=""></li>
                                  
                                  
                                </ol>
                                <div class="carousel-inner" style="margin-bottom: 12px;">
                                  <div class="item">
                                    <img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzc3NyI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojN2E3YTdhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+Rmlyc3Qgc2xpZGU8L3RleHQ+PC9zdmc+">
                                  </div>
                                  <div class="item">
                                    <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzY2NiI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNmE2YTZhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+U2Vjb25kIHNsaWRlPC90ZXh0Pjwvc3ZnPg==">
                                    
                                  </div>
                                  <div class="item active">
                                    <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNWE1YTVhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+VGhpcmQgc2xpZGU8L3RleHQ+PC9zdmc+">
                                    
                                  </div>
                                  <div class="item">
                                    <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Sixth slide" alt="Fouth slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNWE1YTVhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+VGhpcmQgc2xpZGU8L3RleHQ+PC9zdmc+">
                                    
                                  </div>
                                  <div class="item">
                                    <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Sixth slide" alt="Fouth slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNWE1YTVhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+VGhpcmQgc2xpZGU8L3RleHQ+PC9zdmc+">
                                    
                                  </div>
                                  <div class="item">
                                    <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Sixth slide" alt="Fouth slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNWE1YTVhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+VGhpcmQgc2xpZGU8L3RleHQ+PC9zdmc+">
                                    
                                  </div>
                                  <div class="item">
                                    <img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Sixth slide" alt="Fouth slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNWE1YTVhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+VGhpcmQgc2xpZGU8L3RleHQ+PC9zdmc+">
                                    
                                  </div>
                                </div>
                                <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                              </div>

                              <!-- End Hình ảnh -->

                              <!-- Comments -->
                              
                              <div class="panel panel-info">

                                <!-- Cột bình luận -->
                                <div class="panel-heading">
                                  <h3 class="panel-title">Bình luận</h3>
                                </div>
                                <div class="panel-body">
                                  <div class="bao_ngoai">
                                    <div class="form-group">
                                      <div class="col-sm-10" style="padding: 0px;">
                                        <textarea class="form-control" rows="5" id="comment"></textarea>
                                      </div>
                                      <label for="input" class="col-sm-2 control-label">
                                        <button type="button" class="btn btn-primary">Bình luận</button>
                                      </label>
                                    </div>
                                  </div>
                                </div>
                                <!-- End Cột bình luận -->

                                <ul class="list-group" styl>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <li class="list-group-item">Đơn này khó lắm, bỏ đi</li>
                                  <div style="text-align:center;">
                                    <ul class="pagination pagination-sm" style="text-align: center;">
                                      <li><a href="#">1</a></li>
                                      <li><a href="#">2</a></li>
                                      <li><a href="#">3</a></li>
                                      <li><a href="#">4</a></li>
                                      <li><a href="#">5</a></li>
                                      <li><a href="#">&raquo;</a></li>
                                    </ul>
                                  </div>
                                </ul>

                              </div>


                              <!-- End comments -->




                            </div>
                          </div>
                          <!-- End -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

            </div>

          </div>