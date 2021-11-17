<section class="col-12" style="margin-top:100px;margin-bottom:100px;">
        <h3 class="text-center"><b><i class="bi bi-box-arrow-in-right"></i> Thay đổi mật khẩu <i class="bi bi-box-arrow-in-left"></i></b></h3>
        <?php
         if($_GET['key'] && $_GET['reset'])
         {
             $email=$_GET['key'];
             $pass=$_GET['reset'];
             $ur=new User();
             $result=$ur->getPassEmail($email,$pass);
             if($result!=false)
             {
                $emailold=$result['email'];

        ?>
        <form  action="index.php?action=getnewpass&act=submit_new" class="login-form" method="post">
            <input type="hidden" name="email" value="<?php echo $emailold;?>">
          <div class="form-group">
            <label for="exampleInputPassword1">Nhập mật khẩu mới</label>
            <input type="password" class="form-control" name="password" placeholder="">
          </div>
          <div class="form-check" style="text-align:center;">
            <button class="btn btn-primary mt-5" type="submit" name="submit_password">Xác nhận</button> 
          </div>
        </form>
        <?php
             }
        }
       ?>
</section>