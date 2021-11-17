<section class="col-12 mt-5 mb-5">
        <h3 class="text-center"><b><i class="bi bi-person-plus"></i> Đăng kí tài khoản <i class="bi bi-person-plus"></i></b></h3>
        <form  action="index.php?action=registration&act=insertuser"  class="form" role="form" method="post">
          <div class="form-group">
            <label for="">Họ và tên</label>
            <input type="text" class="form-control" name="txttenkh" placeholder="Họ tên của bạn">
          </div>
          <div class="form-group">
            <label for="">Địa chỉ</label>
            <input type="text" class="form-control" name="txtdiachi" placeholder="Nơi ở của bạn">
          </div>
          <div class="form-group">
            <label for="">Số điện thoại</label>
            <input type="text" class="form-control" name="txtsodt" placeholder="Số điện thoại của bạn">
          </div>
          <div class="form-group">
            <label for="">Tài khoản</label>
            <input type="text" class="form-control" name="txtusername" placeholder="Tài khoản đăng nhập">
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" name="txtemail" placeholder="Email của bạn">
          </div>
          <label for="">Mật khẩu</label>
          <input class="form-control" name="txtpass" placeholder="Mật khẩu đăng nhập" type="password"><br>
          <input class="form-control" name="retypepassword" placeholder="Nhập lại mật khẩu" type="password"><br>
          <div class="form-check" style="text-align:center;">
            <button class="btn btn-primary" type="submit"> Đăng Kí</button> 
          </div>
        </form>
</section>