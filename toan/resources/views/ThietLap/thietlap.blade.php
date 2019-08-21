<div class='content container col-sm-10' style="background-color:#f8f9fc;float: right;padding-top: 70px;">
     
          <input style="width: 30%; display: inline-block;"" placeholder="Nhập tên hoặc mã người dùng" type="search" name="" id="input" class="form-control" value="" required="required" title="">
          <button style=" display: inline-block;"type="button" class="btn btn-primary">Tìm kiếm</button>
      
      <div style="float: right; display: inline-block;">
            <a class="btn btn-primary" data-toggle="modal" href='#modal-themnv'><i class="fa fa-plus"></i> Tạo người dùng</a>
            <div class="modal fade" id="modal-themnv">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Tạo mới người dùng</h4>
                  </div>
                  <div class="modal-body">
                    <div class="form-group" style="margin-bottom: 25px;">
                                <label for="">Mã người dùng:</label>
                                <input style="width: 60%; float: right;" type="text" class="form-control" id="" placeholder="Nhập mã nhân viên">
                    </div>
                    <div class="form-group" style="margin-bottom: 25px;">
                                <label for="">Họ tên:</label>
                                <input style="width: 60%; float: right;" type="text" class="form-control" id="" placeholder="Nhập họ tên">
                    </div>
                    
                    <div class="form-group" style="margin-bottom: 25px;">
                                <label for="">Số điện thoại:</label>
                                <input style="width: 60%; float: right;" type="text" class="form-control" id="" 
                                placeholder="Nhập SDT">
                    </div>
                    <div class="form-group" style="margin-bottom: 25px;">
                                <label for="">Email:</label>
                                <input style="width: 60%; float: right;" type="text" class="form-control" id="" placeholder="Nhập email">
                    </div>
                    <div class="form-group" style="margin-bottom: 25px;">
                                <label for="">Nhóm:</label>
                                 <select style="width: 60%; float: right;" name="" id="input" class="form-control" required="required">
                                  <option value="">Nhân viên</option>
                                  <option value="">Giám đốc</option>
                                  <option value="">Quản lý kho</option>
                                  <option value="">Kế toán kho</option>
                                </select>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary">Tạo mới</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div style="float: right; display: inline-block; margin-right: 7px;">
            <a class="btn btn-primary taonhomnv_hover" data-toggle="modal" href='#modal-taonhomnv' style="border-color: #c34803; background-color: #c34803;"><i class="fa fa-plus"></i> Tạo nhóm</a>
            <div class="modal fade" id="modal-taonhomnv">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Tạo mới nhóm người dùng</h4>
                  </div>
                  <div class="modal-body">
                    <div class="form-group" style="margin-bottom: 25px;">
                                <label for="">Nhóm người dùng:</label>
                                <input style="width: 60%; float: right;" type="text" class="form-control" id="" placeholder="Nhập tên nhóm">
                    </div>
                    <div class="form-group" style="margin-bottom: 25px;">
                                <label for="">Phân quyền:</label>
                                <select style="width: 60%; float: right;" name="" id="input" class="form-control" required="required">
                                  <option value="">1</option>
                                  <option value="">2</option>
                                  <option value="">3</option>
                                  <option value="">4</option>
                                </select>
                    </div>
                    
                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary">Tạo mới</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
      <div class="list-group" style="margin: 7px 0 0 0">
        <a href="#" class="list-group-item active">
          <h4 style="" class="list-group-item-heading">Người sử dụng</h4>
          
        </a>
        <table class="table table_boder table-hover" style="margin-bottom: 0px;">
          <thead>
            <tr>
              <th>#</th>
              <th>Mã người dùng</th>
              <th>Tên người dùng</th>              
              <th>Số điện thoại</th>
              <th>Email</th>
              <th>Nhóm</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>NV1212</td>
              <td>Nguyễn Văn A</td>
              <td>0123456789</td>
              <td>ngopll@gmail.com</td>
              <td><a href="">Nhân viên</a></td>
              <td><a href="">Sửa</a></td>
              <td><a href="">Xóa</a></td>
            </tr>
            <tr>
              <td>2</td>
              <td>NV1212</td>
              <td>Nguyễn Văn A</td>
              <td>0123456789</td>
              <td>ngopll@gmail.com</td>
              <td><a href="">Giám đốc</a></td>
              <td><a href="">Sửa</a></td>
              <td><a href="">Xóa</a></td>
            </tr>
            <tr>
              <td>3</td>
              <td>NV1212</td>
              <td>Nguyễn Văn A</td>
              <td>0123456789</td>
              <td>ngopll@gmail.com</td>
              <td><a href="">Quản lí kho</a></td>
              <td><a href="">Sửa</a></td>
              <td><a href="">Xóa</a></td>
            </tr>
            <tr>
              <td>4</td>
              <td>NV1212</td>
              <td>Nguyễn Văn A</td>
              <td>0123456789</td>
              <td>ngopll@gmail.com</td>
              <td><a href="">Nhân viên</a></td>
              <td><a href="">Sửa</a></td>
              <td><a href="">Xóa</a></td>
            </tr>
            <tr>
              <td>5</td>
              <td>NV1212</td>
              <td>Nguyễn Văn A</td>
              <td>0123456789</td>
              <td>ngopll@gmail.com</td>
              <td><a href="">Nhân viên</a></td>
              <td><a href="">Sửa</a></td>
              <td><a href="">Xóa</a></td>
            </tr>
            <tr>
              <td>6</td>
              <td>NV1212</td>
              <td>Nguyễn Văn A</td>
              <td>0123456789</td>
              <td>ngopll@gmail.com</td>
              <td><a href="">Nhân viên</a></td>
              <td><a href="">Sửa</a></td>
              <td><a href="">Xóa</a></td>
            </tr>
          </tbody>
        </table>
        <div style="text-align: center;">
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