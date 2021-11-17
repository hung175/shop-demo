    <section class="userorder mt-5 mb-5">
        <?php
            if(!isset($_SESSION['cart']) || count($_SESSION['cart'])==0):
                echo "<script>alert('Giỏ hàng của bạn đang trống, hãy chọn món hàng yêu thích!')</script>";
                include "home.php";
        ?>
        <?php
            else:
        ?>
        <form action="index.php?action=cart&act=update_item" method="post">
            <div class="row text-center">
                <div class="col-md-12">
                    <hr><h3 class=""><span class="bi bi-basket2"></span> GIỎ HÀNG CỦA BẠN <span class="bi bi-basket2"></span></h3><hr>
                </div>
            </div>

        <?php
            foreach($_SESSION['cart'] as $key => $item):
                $dongianew=number_format($item['dongia'],0);
                $tongtiennew=number_format($item['tongtien'],0);
        ?>
            <div class="row cartuser">
                <div class="col-md-3" width="100%">
                    <img src="../Content/img/<?php echo $item['hinhanh'] ;?>" alt="">
                </div>
                <div class="col-md-5" id="" width="100%">
                    <tr><td><b style="font-size: larger;"><?php echo $item['tensp'];?></b></td></tr>
                    <tr><td><p style="margin-bottom: 0px;"><i><?php echo $item['size'];?></i></p></td></tr>
                    <tr><td><p style="margin-bottom: 0px;"><i><?php echo $item['mota'];?></i></p></td></tr><br>
                    <tr><td><button type="submit" class="btn btn-primary">Sửa</button>  <a href="index.php?action=cart&act=delete_item&id=<?php echo $item['masp']; ?>"><button type="button" class="btn btn-primary">Xóa</button></a></td></tr>
                </div>
                <div class="col-md-4" width="100%">
                    <tr>
                        <td><b style="font-size:large;float: left;">Đơn giá: <?php echo $dongianew; ?></b></td>
                        <td><span style="float:right;font-weight: bold;" class="bi bi-star">Số lượng <input type="text"
                         name="upsl[<?php echo $item['masp'];?>]" style="width:30px;" value="<?php echo $item['sl'];?>" /></span></td>
                    </tr><br><br><br><br>
                    <tr>
                        <td><span style="font-weight: bold;color: rgb(18, 173, 179);">Tổng tiền: <?php echo $tongtiennew;?>VNĐ</span></td>
                    </tr>
                </div>
            </div>
            <hr>
        <?php
            endforeach;
        ?>

            <div class="row text-center">
                <div class="col-md-12">
                    <a href="index.php?action=bill" class="btn btn-outline-warning">Thanh toán ngay <?php echo total_cart(); ?>đ</a>
                </div>
            </div>
          </form>
          <?php
            endif;
          ?>
    </section>