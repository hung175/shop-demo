<section class="col-12 mt-5 mb-5">
        <h3 class="text-center"><b><i class="bi bi-box-arrow-in-right"></i> Đăng nhập tài khoản <i class="bi bi-box-arrow-in-left"></i></b></h3>
        <form  action="index.php?action=login&act=loginuser" class="login-form" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Tài khoản</label>
            <input type="text" class="form-control" name="txtusername" placeholder="">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Mật khẩu</label>
            <input type="password" class="form-control" name="txtpassword" placeholder="">
            <a href="" data-toggle="modal" data-target="#modelId2">Quên mật khẩu?</a>
          </div>
          <div class="form-check" style="text-align:center;">
            <button class="btn btn-primary mt-5" type="submit"> Đăng Nhập</button> 
          </div>
        </form>
</section>

<!-- Modal -->
<div class="modal fade" id="modelId2" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="index.php?action=getnewpass&act=getnewpass_action" method="post">
      <div class="modal-content">
          <div class="modal-header" style="background-color: rgb(240, 189, 50);">
          <h4 class="modal-title" id="modelTitleId">Lấy lại mật khẩu</h4>
          </div>
          <div class="modal-body">
          <input type="text" class="form-control" name="email" placeholder="Nhập địa chỉ email của bạn!">
          </div>
          <div class="modal-footer">
          <input type="submit" class="btn btn-outline-primary" name="submit_email" style="width:100px;" value="OK">
          <input type="submit" class="btn btn-outline-secondary" data-dismiss="modal" style="width:100px;" value="Đóng">
          </div>
      </div>
    </form>
  </div>
</div>