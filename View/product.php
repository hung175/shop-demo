    <?php
        $db = new SanPham();
        $results = $db->getProductAll();
        $count = $results->rowCount();//49
        $limit = 8;
        $db2 = new Page();
        $page = $db2->findPage($count,$limit);
        $pagereq = isset($_GET['page'])?$_GET['page']:1;
        $startpro = $db2->findStart($limit);
    ?>
    <?php
        if(isset($_GET['act']))
        {
            if($_GET['act']=="product")
            {
                $ac=1;
            }
            elseif($_GET['act']=="search")
            { 
                $ac=2;
            }
            elseif($_GET['act']==1)
            { 
                $ac=3;
            }
            elseif($_GET['act']==2)
            { 
                $ac=4;
            }
            elseif($_GET['act']==3)
            { 
                $ac=5;
            }
            elseif($_GET['act']==4)
            { 
                $ac=6;
            }
            elseif($_GET['act']==5)
            { 
                $ac=7;
            }
            elseif($_GET['act']==6)
            { 
                $ac=8;
            }
            elseif($_GET['act']==7)
            { 
                $ac=1;
            }
            else{
                $ac=0;
            }
        }
    ?>
    <?php
        $results1=$db->getimgMenu();
        $results2=$db->getnameMenu();
    ?>
<section class="mt-5" style="width:100%;">
    <div class="row">
        <div class="col-md-12">
            <table style="text-align:center;width:100%;">
                <thead>
                    <tr>
                        <?php
                            while($set_img=$results1->fetch()):
                        ?>
                        <th><a href="index.php?action=home&act=<?php echo $set_img[0]; ?>"><img src="../Content/img/<?php echo $set_img[1]; ?>" id="imgmenu" alt=""></a></th>
                        <?php
                            endwhile;
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                            while($set_text=$results2->fetch()):
                        ?>
                        <td><a href="index.php?action=home&act=<?php echo $set_text[0]; ?>" id="textmenu"><?php echo $set_text[1]; ?></a></td>
                        <?php
                            endwhile;
                        ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>  
</section>
<section id="" class="text-center">
    <div class="row">
        <div class="col-md-12" style="width:1200px;">
            <?php
                if($ac==1){
                    echo '<hr><h3 class=""><span class="bi bi-arrow-right"></span> TẤT CẢ <span class="bi bi-arrow-left"></span></h3><hr>';
                }
                elseif($ac==2){
                    echo '<hr><h3 class=""><span class="bi bi-arrow-right"></span> KẾT QUẢ <span class="bi bi-arrow-left"></span></h3><hr>';
                }
                elseif($ac==3){
                    echo '<hr><h3 class=""><span class="bi bi-arrow-right"></span> HAMBURGER <span class="bi bi-arrow-left"></span></h3><hr>';
                }
                elseif($ac==4){
                    echo '<hr><h3 class=""><span class="bi bi-arrow-right"></span> PIZZA <span class="bi bi-arrow-left"></span></h3><hr>';
                }
                elseif($ac==5){
                    echo '<hr><h3 class=""><span class="bi bi-arrow-right"></span> GÀ <span class="bi bi-arrow-left"></span></h3><hr>';
                }
                elseif($ac==6){
                    echo '<hr><h3 class=""><span class="bi bi-arrow-right"></span> CƠM <span class="bi bi-arrow-left"></span></h3><hr>';
                }
                elseif($ac==7){
                    echo '<hr><h3 class=""><span class="bi bi-arrow-right"></span> NƯỚC UỐNG <span class="bi bi-arrow-left"></span></h3><hr>';
                }
                elseif($ac==8){
                    echo '<hr><h3 class=""><span class="bi bi-arrow-right"></span> MÓN ĂN KÈM <span class="bi bi-arrow-left"></span></h3><hr>';
                }
                else {
                    echo '<hr><h3 class=""><span class="bi bi-arrow-right"></span> KHÔNG CÓ SẢN PHẨM <span class="bi bi-arrow-left"></span></h3><hr>';
                }
            ?>
            
        </div>
    </div>

    <div class="row">
    <?php
        if($ac==1){
            $prolist = $db->getProductPage($startpro,$limit);
        }
        elseif($ac==2){
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $txtsearch = $_POST['txtsearch'];
                $prolist = $db->searchProduct($txtsearch);
            }
        }
        elseif($ac==3 || $ac==4 || $ac==5 || $ac==6 || $ac==7 || $ac==8){
            if(isset($_GET['act'])){
                $mamenu=$_GET['act'];
                $prolist = $db->getProductMenu($mamenu);
            }
        }
        while($set=$prolist->fetch()):
    ?>
        <div class="col-md-3 mb-3" style="text-align: center;">
        <a href="index.php?action=home&act=productdetails&id=<?php echo $set['masp']; ?>" style="text-decoration: none;">
            <div class="card-body" style="width:270px;">
                <div class="card text-white bg-primary|secondary|success|danger|warning|info|light|dark|link">
                    <div class="form_img_pro">
                        <img class="card-img-top" src="../Content/img/<?php echo $set['hinhanh']; ?>" id="img_pro" alt="">
                    </div>
                    <div class="card-body" style="height:90px;">
                        <p class="card-title" style="color: rgb(57, 114, 201);font-size:larger;font-weight:600;">
                        <?php echo $set['tensp']; ?></p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text" style="color: black;"><i class="bi bi-cash-stack"></i> 
                            <?php
                                if($set['khuyenmai']<=0):
                                    echo '<span id="paysaled">'.$set["dongia"].'</span>';
                            ?>
                            <?php 
                                else:
                            ?>
                                 <strike id="paysale"><i><?php echo $set['dongia']; ?></i></strike> - <span id="paysaled"><?php echo $set['khuyenmai']; ?></span> 
                            <?php
                                endif;
                            ?>
                         <i class="bi bi-cash-stack"></i></p>
                    </div>
                </div>
            </div>
        </a>
        </div>
    
    <?php
        endwhile;
    ?>
    </div>

    
</section>
<?php
    if($ac==1):
?>
<section id="" class="text-center">
    <div class="row mb-3">
        <div class="col-md-6">
            
        </div>
        <div class="col-md-6" style="width:800px;">
            <ul class="pageproduct">
                <?php
                    if($pagereq >1 && $page>1){
                        echo '<li><a href="index.php?action=home&act=product&page='.($pagereq-1).'"><i class="bi bi-caret-left"></i></a></li>';
                    }
                    for($i=1;$i<=$page;$i++):
                ?>
                <li><a href="index.php?action=home&act=product&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                <?php
                    endfor;
                    if($pagereq<$page && $page>1){
                        echo '<li><a href="index.php?action=home&act=product&page='.($pagereq+1).'"><i class="bi bi-caret-right"></i></a></li>';
                    }
                ?>
            </ul>
        </div>
    </div>
</section>
<?php
    endif;
?>