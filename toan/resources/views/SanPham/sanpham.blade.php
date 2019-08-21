<div class='content container col-sm-10' style="background-color:#fafafa;float: right;">
          <div style="text-align: center;"><h2>Danh mục sản phẩm</h2></div>
          <div class="bao_kh" style="margin: 30px 0 15px 0">
              
              <input style="display: inline-block;width: 23%" type="search" name="" id="input" class="form-control" value="" required="required" placeholder="Nhập tên hoặc mã SP để tìm kiếm" title="">
              <select style="width: 15%; display: inline-block;" name="" id="input" class="form-control" required="required">
                <option value="">- Danh mục -</option>
                <option value="">Lõi lọc</option>
                <option value="">Máy lọc nước</option>
                <option value="">Phụ kiện</option>
              </select>
              <select style="width: 15%; display: inline-block;" name="" id="input" class="form-control" required="required">
                <option value="">- Nhà sản xuất -</option>
                <option value="">Kangaroo</option>
                <option value="">Karofi</option>
                <option value="">Korihome</option>
              </select>
              <select style="width: 15%; display: inline-block;" name="" id="input" class="form-control" required="required">
                <option value="">- Quốc gia SX -</option>
                <option value="">Việt Nam</option>
                <option value="">Mỹ</option>
                <option value="">Đài Loan</option>
              </select>
              <button type="button" class="btn btn-primary">Tìm kiếm</button>

              <!-- Thêm KH -->
              <a style="float: right;" class="btn btn-primary" data-toggle="modal" href='#modal-them_sp'><i class="fa fa-plus"></i> Thêm sản phẩm</a>
              <div class="modal fade" id="modal-them_sp">
                <div class="modal-dialog"   >
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Tạo mới khách hàng</h4>
                    </div>
                    <div class="modal-body" style="overflow: auto;">
                      <div class="form-group" style="margin-bottom: 25px;">
                                <label for="">Mã sản phẩm:</label>
                                <input style="width: 60%; float: right;" type="text" class="form-control" id="" placeholder="Nhập mã SP">
                      </div>
                      <div class="form-group" style="margin-bottom: 25px;">
                                <label for="">Tên sản phẩm:</label>
                                <input style="width: 60%; float: right;" type="text" class="form-control" id="" placeholder="Nhập tên SP">
                      </div>
                      <div class="form-group" style="margin-bottom: 25px;">
                                <label for="">Giá:</label>
                                <input style="width: 60%; float: right;" type="text" class="form-control" id="" placeholder="0đ">
                      </div>
                      <div class="form-group" style="margin-bottom: 25px;">
                                <label for="">Chiết khấu:</label>
                                <input style="width: 60%; float: right;" type="text" class="form-control" id="" placeholder="0đ">
                      </div>
                      <div class="form-group" style="margin-bottom: 25px;">
                                <label for="">Danh mục:</label>
                                <select style="width: 60%; float: right;" name="" id="input" class="form-control" required="required">
                                  <option value="">Lõi lọc</option>
                                  <option value="">Máy lọc nước</option>
                                  <option value="">Phụ kiện</option>
                                </select>
                      </div>
                      <div class="form-group" style="margin-bottom: 25px;">
                                <label for="">Nhà sản xuất:</label>
                                <select style="width: 60%; float: right;" name="" id="input" class="form-control" required="required">
                                  <option value="">Kangaroo</option>
                                  <option value="">Karofi</option>
                                  <option value="">Sunhouse</option>
                                </select>
                      </div>
                      <div class="form-group" style="margin-bottom: 25px;">
                                <label for="">Quốc gia SX:</label>
                                <select style="width: 60%; float: right;" name="" id="input" class="form-control" required="required">
                                  <option value="">Việt Nam</option>
                                  <option value="">Mỹ</option>
                                  <option value="">Đài Loan</option>
                                </select>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                      <button type="button" class="btn btn-primary">Lưu</button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end Thêm KH -->

          </div>
          <table class="table table_boder table-hover">
            <thead>
              <tr style="text-align: center;">
                <th>STT</th>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Giá(VNĐ)</th>
                <th>Danh mục</th>
                <th>Nhà sản xuất</th>
                <th>Quốc gia SX</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>2</td>
                <td>KG2332</td>
                <td>Máy lọc nước Kangaroo</td>
                <td>1.000.000</td>
                <td>Máy lọc nước</td>
                <td>Kangaroo</td>
                <td>Đài Loan</td>
                <td><a href="">Sửa</a></td>
                <td><a href="">Xóa</a></td>
              </tr>
              <tr>
                <td>3</td>
                <td>KG2332</td>
                <td>Bình áp</td>
                <td>1.000.000</td>
                <td>Phụ kiện</td>
                <td>Kangaroo</td>
                <td>Đài Loan</td>
                <td><a href="">Sửa</a></td>
                <td><a href="">Xóa</a></td>
              </tr>
              <tr>
                <td>1</td>
                <td>KG2332</td>
                <td>Lõi lọc nước Kangaroo</td>
                <td>1.000.000</td>
                <td>Lõi lọc</td>
                <td>Kangaroo</td>
                <td>Đài Loan</td>
                <td><a href="">Sửa</a></td>
                <td><a href="">Xóa</a></td>
              </tr>
              <tr>
                <td>1</td>
                <td>KG2332</td>
                <td>Lõi lọc nước Kangaroo</td>
                <td>1.000.000</td>
                <td>Lõi lọc</td>
                <td>Kangaroo</td>
                <td>Đài Loan</td>
                <td><a href="">Sửa</a></td>
                <td><a href="">Xóa</a></td>
              </tr>
              <tr>
                <td>1</td>
                <td>KG2332</td>
                <td>Lõi lọc nước Kangaroo</td>
                <td>1.000.000</td>
                <td>Lõi lọc</td>
                <td>Kangaroo</td>
                <td>Đài Loan</td>
                <td><a href="">Sửa</a></td>
                <td><a href="">Xóa</a></td>
              </tr>
              <tr>
                <td>1</td>
                <td>KG2332</td>
                <td>Lõi lọc nước Kangaroo</td>
                <td>1.000.000</td>
                <td>Lõi lọc</td>
                <td>Kangaroo</td>
                <td>Đài Loan</td>
                <td><a href="">Sửa</a></td>
                <td><a href="">Xóa</a></td>
              </tr>
              <tr>
                <td>1</td>
                <td>KG2332</td>
                <td>Lõi lọc nước Kangaroo</td>
                <td>1.000.000</td>
                <td>Lõi lọc</td>
                <td>Kangaroo</td>
                <td>Đài Loan</td>
                <td><a href="">Sửa</a></td>
                <td><a href="">Xóa</a></td>
              </tr>
              <tr>
                <td>1</td>
                <td>KG2332</td>
                <td>Lõi lọc nước Kangaroo</td>
                <td>1.000.000</td>
                <td>Lõi lọc</td>
                <td>Kangaroo</td>
                <td>Đài Loan</td>
                <td><a href="">Sửa</a></td>
                <td><a href="">Xóa</a></td>
              </tr>
              
            </tbody>
          </table>
          <div style="text-align: center;">
              <ul class="pagination pagination-sm" style="margin: 0">
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
        </div>