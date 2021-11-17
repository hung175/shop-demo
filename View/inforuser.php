<section class="mt-3 mb-3" style="width:100%;">
    <div class="row text-center">
        <div class="col-md-12">
            <hr><h3 class=""><span class="bi bi-person"></span> THÔNG TIN CÁ NHÂN <span class="bi bi-person"></span></h3>
            <hr>
        </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-6 mx-auto py-3 py-md-4">
        <div class="group-tabs">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs nav-fill mb-3" role="tablist">
            <li class="nav-item" role="presentation"><a class="nav-link active" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Thông tin cá nhân</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" href="#newpass" aria-controls="newpass" role="tab" data-toggle="tab">Thay đổi mật khẩu</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" href="#history" aria-controls="history" role="tab" data-toggle="tab">Lịch sử đơn hàng</a></li>
          </ul>
        </div>
      </div>
    </div>
        <?php
            if(isset($_SESSION['makh'])){
                $makh=$_SESSION['makh'];
                $tenkh=$_SESSION['tenkh'];
                $user=$_SESSION['user'];
                $pass=$_SESSION['pass'];
                $email=$_SESSION['email'];
                $diachi=$_SESSION['diachi'];
                $phone=$_SESSION['phone'];
            }
        ?>
          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade show active col-12 col-md-6 mx-auto py-3 py-md-4" id="profile">
                <h5 class="text-center mb-3">Thông tin cá nhân</h5>
                <form action="index.php?action=inforuser&act=updateprofile" method="post">
                    <div class="form-group mb-3 nomal">
                        <label id="titleinfor" for="">Họ và tên của bạn</label>
                        <input type="text" name="txtupname" class="form-control org-custom-control form-control" value="<?php echo $tenkh; ?>">
                    </div>
                    <div class="form-group mb-3 nomal">
                        <label id="titleinfor" for="">Tên tài khoản</label>
                        <input type="text" name="txtupuser" class="form-control org-custom-control form-control" value="<?php echo $user; ?>">
                    </div>
                    <div class="form-group mb-3 nomal">
                        <label id="titleinfor" for="">Số điện thoại</label>
                        <input type="text" name="txtupphone" class="form-control org-custom-control form-control" value="<?php echo $phone; ?>">
                    </div>
                    <div class="form-group mb-3 nomal">
                        <label id="titleinfor" for="">Email</label>
                        <input type="text" name="txtupemail" class="form-control org-custom-control form-control" value="<?php echo $email; ?>">
                    </div>
                    <div class="form-group mb-5 nomal">
                        <label id="titleinfor" for="">Địa chỉ</label>
                        <input type="text" name="txtupaddress" class="form-control org-custom-control form-control" value="<?php echo $diachi; ?>">
                    </div>
                    <div class="px-3">
                        <button class="btn btn-coke w-100" id="updateinforuser" type="submit">Cập nhật</button>
                    </div>
                </form>
            </div>

            <div role="tabpanel" class="tab-pane fade col-12 col-md-6 mx-auto py-3 py-md-4" id="newpass">
                <h5 class="text-center mb-3">Thay đổi mật khẩu</h5>
                <form action="index.php?action=inforuser&act=updatepass" method="post">
                    <div class="form-group mb-3 nomal">
                        <label id="titleinfor" for="">Mật khẩu cũ</label>
                        <input type="password" name="txtpass" class="form-control org-custom-control form-control" value="">
                    </div>
                    <div class="form-group mb-3 nomal">
                        <label id="titleinfor" for="">Mật khẩu mới</label>
                        <input type="password" name="txtnewpass" class="form-control org-custom-control form-control" value="">
                    </div>
                    <div class="form-group mb-5 nomal">
                        <label id="titleinfor" for="">Nhập lại mật khẩu</label>
                        <input type="password" name="txtretypenewpass" class="form-control org-custom-control form-control" value="">
                    </div>
                    <div class="px-3">
                        <button class="btn btn-coke w-100" id="updateinforuser" type="submit">Cập nhật</button>
                    </div>
                </form>
            </div>

            <div role="tabpanel" class="tab-pane fade col-12 mb-5" id="history">
                <h5 class="text-center mb-4">Danh sách các đơn hàng đã đặt</h5>
                <form action="#" method="post">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Mã số hóa đơn</th>
                                <th>Ngày đặt</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if(isset($_SESSION['makh'])){
                                    $makh=$_SESSION['makh'];
                                }
                                $db = new Bill();
                                $result = $db->checkBill($makh);
                                while($set=$result->fetch()):
                            ?>
                            <tr>
                                <td><?php echo $set['mahd']; ?></td>
                                <td><?php echo $set['ngaylap']; ?></td>
                            </tr>
                            <?php
                                endwhile;
                            ?>
                        </tbody>
                    </table>
                </form>
            </div>

    </div>
</section>