<section id="prodetail">
    <div class="row">
        <div class="col-lg-12 text-center"><hr>
            <h3 class=""><span class="bi bi-info-circle"></span> CHI TIẾT SẢN PHẨM <span class="bi bi-info-circle"></span></h3><hr>
        </div>
    </div>
    <div class="row">
    <div class="col-md-12">
    <form action="index.php?action=cart&act=addcart" method="post">
        <div class="row" style="margin:10px;">
            <?php
                    if(isset($_GET['id']))
                    {
                        $id = $_GET['id'];
                        $sp = new SanPham();
                        $results=$sp->getProductDetail($id);
                        //trả dữ liệu
                        $masp = $results[0];
                        $tensp = $results[1];
                        $dongia = $results[2];
                        $khuyenmai = $results[3];
                        $hinh = $results[4];
                        $mota = $results[8]; 
                        $nhom = $results[5];
                    }
            ?>

            <div class="col-md-5">
                <img src="<?php echo 'Content/img/'.$hinh;?>" alt="" style="width:100%;">
                <ul class="preview-thumbnail nav nav-tabs">
                    <?php
                        $results = $sp->getProductDetailGroup($nhom);
                        while($set=$results->fetch()):
                    ?>
                   <li class="active">
                    <a href="#" class="imgmore">
                    <img src="<?php echo 'Content/img/'.$set['hinhanh'];?>" alt="">
                    </a>
                   </li>
                    <?php
                        endwhile;
                    ?>
                </ul>
            </div>

            <div class="col-md-5">
                <input type="hidden" name="masp" value="<?php echo $masp; ?>" />
                <h2 class="product-title"><?php echo $tensp;?></h2>
                <p class="product-description">
                <?php echo $mota; ?>
                </p>
                
                <h5 class="colors">
                    <input type="hidden" name="nhom" id="nhom" value="<?php echo $nhom; ?>" />
                    <i class="bi bi-check-lg"></i>Kích Thước:
                    <select name="size" class="form-control" style="width:150px;">
                    <?php 
                        $results = $sp->getProductDetailGroup($nhom);
                        while($set=$results->fetch()):
                    ?>
                        <option value="<?php echo $set['size']; ?>">
                            <?php echo $set['size']; ?>
                        </option>
                    <?php
                        endwhile;
                    ?>
                    </select>
                    <br>
                <i class="bi bi-check-lg"></i>Số Lượng:

                    <br><input type="number" id="soluong" name="soluong" min="1" max="100" value="1" size="10" style="width:150px;height:40px;border-radius:5px;" />

                </h5><br>
                <h5><i class="bi bi-check-lg"></i>Giá bán: 
                            <?php
                                if($khuyenmai<=0):
                                    echo '<span id="paysaled">'.$dongia.'</span>';
                            ?>
                            <?php 
                                else:
                            ?>
                                <strike id="paysale"><i><?php echo $dongia; ?></i></strike> - <span id="paysaled"><?php echo $khuyenmai; ?></span>
                            <?php
                                endif;
                            ?>
                VNĐ</h5><br>
                <div class="action">
                    <button class="btn btn-primary" type="submit" data-toggle="modal" data-target="#myModal">Thêm vào giỏ</button>
                </div>
            </div>
        </div>
    </form>
    </div>
    
    </div>
</section>
<section id="comment">
    <div class="row">
        <div class="col-md-12 text-center">
            <hr><h3 class=""><span class="bi bi-chat-dots"></span> ĐÁNH GIÁ SẢN PHẨM <span class="bi bi-chat-dots"></span></h3><hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="row" style="margin:10px;">
            <?php
                if(isset($_GET['id'])){
                    $id=$_GET['id'];
                    $results=$sp->countComment($id);
                    $tong=$results[0];
                }
            ?>
                <div class="col-md-7 comment_user">
                    <form action="index.php?action=home&act=comment&id=<?php echo $_GET['id'] ?>" method="post">
                        <input type="hidden" name="txtmasp" value="<?php echo $_GET['id'] ?>" />
                        <img src="../Content/img/logo13.JPG" width="50px" height="50px"; />
                        <?php
                            if(isset($_SESSION['makh']) && isset($_SESSION['tenkh'])){
                                $name_cmt = $_SESSION['tenkh'];
                            }
                            else{
                                $name_cmt="Người dùng";
                            }
                                
                        ?>
                        <p id="name_cmt"><?php echo $name_cmt; ?></p>
                        <textarea class="input-field" type="text" name="usercmt" rows="3" cols="70" id="usercmt" placeholder="Bạn nghĩ sao về món này"></textarea><br>
                        <input type="submit" class="btn btn-primary" id="submitButton"  value="Bình Luận" />
                    </form>
                </div>
                <div class="col-md-5 comments" >
                    <h4 class="">Bình luận: <?php echo $tong; ?></h4><hr>
                        <?php
                            $results=$sp->showComment($id);
                            while($set=$results->fetch()):
                        ?>
                        <div class="row">
                        <img src="../Content/img/logo13.JPG" alt="" width="40px" height="40px">
                        <span style="font-size: larger;"><?php echo $set['tenkh']; ?>: </span><p><?php echo $set['noidung']; ?></p><br>
                        </div>
                        <?php
                            endwhile;
                        ?>
                </div>
            </div>
        </div>
    </div>
</section>