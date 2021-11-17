<section>
    <div class="col-md-12">
        <div class="row">
        <div id="carouselId" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                <li data-target="#carouselId" data-slide-to="1"></li>
                <li data-target="#carouselId" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="../Content/img/banner17.JPG" style="width:100%;height:550px;" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img src="../Content/img/banner16.JPG" style="width:100%;height:550px;" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img src="../Content/img/banner9.JPG" style="width:100%;height:550px;" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        </div>
    
    </div>
</section>
<section>
    <div class="row">
        <div class="col-md-12 titlefood">
            <ul id="title">
                <li><a href="#" style="font-size:larger;">Hôm nay ăn gì?</a></li>
                <li><a href="#" style="color: red;">Khuyến mãi mỗi ngày</a></li>
                <li><a href="#">Best sellers</a></li>
            </ul>
            <hr>
        </div>
    </div>
        
        <div class="row">

        <?php
            $db = new SanPham();
            $result = $db->getProductSale();
            while($set=$result->fetch()):
        ?>
            <div class="col-lg-3 col-md-4 mb-3" style="text-align: center;">
            <a href="index.php?action=home&act=productdetails&id=<?php echo $set['masp']; ?>" style="text-decoration: none;">
                <div class="card-body">
                    <div class="card text-white bg-primary|secondary|success|danger|warning|info|light|dark|link">
                      <div class="form_img_pro">
                        <img class="card-img-top" src="../Content/img/<?php echo $set['hinhanh']; ?>" id="img_pro" alt="">
                      </div>
                      <div class="card-body" style="height:90px;">
                        <p class="card-title" style="color: rgb(57, 114, 201);font-size:larger;font-weight:600;"><?php echo $set['tensp']; ?></p>
                      </div>
                      <div class="card-footer">
                        <p class="card-text paysaled" style="color: black;"><i class="bi bi-cash-stack"></i> <strike id="paysale"><i><?php echo $set['dongia']; ?></i></strike> - <span id="paysaled"><?php echo $set['khuyenmai']; ?></span> <i class="bi bi-cash-stack"></i></p>
                      </div>
                    </div>
                </div>
            </a>
            </div>
        <?php
            endwhile;
        ?>

        </div>
        <center><a href="index.php?action=home&act=product" class="btn btn-primary" style="border-radius: 5px;background-color: rgb(57, 114, 201);width: 110px;height: 50px;color: white;font-size: large;margin-bottom: 20px;line-height:35px;">Xem thêm</a></center>
</section>