    <section class="mt-3 mb-3" style="width:100%;">
    <?php
        if(!isset($_SESSION['makh'])):
            echo "<script>alert('Hãy đăng nhập trước khi thanh toán đơn hàng của bạn!');</script>";
            include "login.php";
        else:
    ?>
    
        <form action="" method="post">
            <?php
                if(isset($_SESSION['sohd'])){
                    $mahd=$_SESSION['sohd'];
                    $db = new Bill();
                    $result = $db->getBillUserInfor($mahd);
                    $sohd=$result[0];
                    $ngay=$result[1];
                    $tenkh=$result[2];
                    $diachi=$result[3];
                    $phone=$result[4];
                }
            ?>
            <div class="row text-center">
                <div class="col-md-12">
                    <hr><h3 class=""><span class="bi bi-truck"></span> ĐƠN HÀNG ĐẶT THÀNH CÔNG <span class="bi bi-truck"></span></h3>
                        <p><span class="bi bi-dash-lg"></span> Hóa đơn: <?php echo $sohd; ?> <span class="bi bi-dash-lg"></span> Ngày đặt: <?php echo $ngay; ?> <span class="bi bi-dash-lg"></span></p>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row titleorder">
                        <div class="col-md-3"><h5><span class="bi bi-hand-thumbs-up"></span> <?php echo $tenkh; ?></h5></div>
                        <div class="col-md-7"><h5><span class="bi bi-hand-thumbs-up"></span> <?php echo $diachi; ?></h5></div>
                        <div class="col-md-2"><h5><span class="bi bi-hand-thumbs-up"></span> <?php echo $phone; ?></h5></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><span class="bi bi-cart-plus"></span></th>
                                <th>Sản phẩm</th>
                                <th>Size</th>
                                <th>Đơn giá(VNĐ)</th>
                                <th>Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                            $stt=0;
                            $pay=0;
                            $data=$db->getBillItemInfor($mahd);
                            while($set=$data->fetch()):
                                $stt++;
                                $pay+=($set['khuyenmai']<=0) ? $set['dongia']*$set['soluong'] : $set['khuyenmai']*$set['soluong'];
                        ?>
                            <tr>
                                <td scope="row"><?php echo $stt; ?></td>
                                <td>
                                    <p><?php echo $set['tensp']; ?></p>
                                    <p>Số lượng: <?php echo $set['soluong']; ?></p>
                                </td>
                                <td>
                                    <p><?php echo $set['size']; ?></p>
                                </td>
                                <td>
                                    <?php
                                        if($set['khuyenmai']<=0){
                                            echo $set['dongia']; 
                                        }
                                        else {
                                            echo $set['khuyenmai'];
                                        }
                                    ?>
                                </td>
                                <td style="color: dodgerblue;">Thành công</td>
                            </tr>
                        <?php
                            endwhile;
                        ?>

                            <tr>
                                <td colspan="5" id="totalfinal"><h3><span class="bi bi-check-circle-fill"></span> Tổng tiền: <?php echo $pay; ?> VNĐ</h3></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </form>
    <?php
        endif;
    ?>
    </section>