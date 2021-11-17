<header class="header">
        <ul class="nav1">
            <?php
                $db = new SanPham();
                $result_name = $db->getNameMenuHeader();
                $result_link = $db->getLinkMenuHeader();
                //get name menu
                $set1=$result_name->fetch();
                $set2=$result_name->fetch();
                $set3=$result_name->fetch();
                $set4=$result_name->fetch();
                $set5=$result_name->fetch();
                $set6=$result_name->fetch();
                $set7=$result_name->fetch();
                //get link menu
                $set8=$result_link->fetch();
                $set9=$result_link->fetch();
                $set10=$result_link->fetch();
                $set11=$result_link->fetch();
                $set12=$result_link->fetch();
                $set13=$result_link->fetch();
                $set14=$result_link->fetch();
            ?>
            <li><a href="<?php echo $set8['link']; ?>"><img src="./Content/img/<?php echo $set1['name']; ?>" alt="" class="iconheader"></a></li>
            <li><a data-toggle="modal" data-target="#modelId"  href="<?php echo $set9['link']; ?>"><i class="bi bi-search"></i><?php echo $set2['name']; ?></a></li>
            <li><a href="<?php echo $set10['link']; ?>"><?php echo $set3['name']; ?></a></li>
            <li><a href="<?php echo $set11['link']; ?>"><?php echo $set4['name']; ?></a></li>
            <li><a href="<?php echo $set12['link']; ?>"><?php echo $set5['name']; ?></a></li>
            <?php
            if(isset($_SESSION['cart'])){
                if(count($_SESSION['cart'])!=0){
                    $countcart=count($_SESSION['cart']);
                }
                else{
                    $countcart=0;
                }
            }
            else{
                $countcart=0;
            }
            ?>
            <li><a href="<?php echo $set13['link']; ?>"><i class="bi-cart"></i><?php echo $set6['name']; ?> <i style="color:red;">(<?php echo $countcart; ?>)</i></a></li>
            <li>
                <ul class="nav nav-tabs|pills" id="navId">
                    <li class="nav-item dropdown">
                        <?php
                            if(isset($_SESSION['makh']) && isset($_SESSION['tenkh'])):
                                $user = $_SESSION['tenkh'];
                        ?>
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="<?php echo $set14['link']; ?>" role="button" aria-haspopup="true" 
                            style="height: 100px;line-height: 90px;color:red;" aria-expanded="false"><i class="bi bi-person-check"> </i><?php echo $user; ?></a>
                        <?php
                            else:
                                echo '<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="'.$set14['link'].'" role="button" aria-haspopup="true" 
                                style="height: 100px;line-height: 90px;" aria-expanded="false"><i class="bi bi-person-circle"></i>'.$set7['name'].'</a>';
                        ?>
                        <?php
                            endif;
                        ?>
                        <div class="dropdown-menu"  id="listheader">
                        <?php
                            if(isset($_SESSION['makh']) && isset($_SESSION['tenkh'])):
                        ?>
                            <a class="dropdown-item" href="index.php?action=inforuser">THÔNG TIN</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="index.php?action=login&act=logout">ĐĂNG XUẤT</a>
                        <?php
                            else:
                                echo '<a class="dropdown-item" href="index.php?action=login">ĐĂNG NHẬP</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item" href="index.php?action=registration">ĐĂNG KÍ</a>';
                        ?>
                        <?php
                            endif;
                        ?>
                        </div>
                    </li>
                </ul>

            </li>
        </ul>
</header>
    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <form action="index.php?action=home&act=search" method="post">
            <div class="modal-content">
                <div class="modal-header" style="background-color: rgb(240, 189, 50);">
                <h4 class="modal-title" id="modelTitleId"><i class="bi bi-search"></i>Tìm kiếm</h4>
                </div>
                <div class="modal-body">
                <input type="text" class="form-control" name="txtsearch" placeholder="Nhập tên món bạn muốn!">
                </div>
                <div class="modal-footer">
                <input type="submit" class="btn btn-outline-primary" name="submit" id="subsearch" style="width:100px;" value="OK">
                <input type="submit" class="btn btn-outline-secondary" data-dismiss="modal" style="width:100px;" value="Đóng">
                </div>
            </div>
          </form>
        </div>
    </div>

