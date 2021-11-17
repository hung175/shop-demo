<?php
  //ini_set('memory_limit','768M');
  //ini_set('max_execution_time', 300);
  include "Model/connect.php";
  include "Model/home.php";
  include "Model/user.php";
  include "Model/cart.php";
  include "Model/bill.php";
  include "Model/page.php";
  include "Model/class.phpmailer.php";
  include "Model/class.smtp.php";
  session_start();
  //cách 1
  //spl_autoload_register('myModelClassLoader');
  //function myModelClassLoader($className){
  //  $path = 'Model/';
  //  include $path.$className.'.php';
  //}
  //cách 2
  //set_include_path(get_include_path().PATH_SEPARATOR.'Model/');
  //spl_autoload_extensions('.php');
  //spl_autoload_register();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Content/css/style.css">
  </head>
  <body>
    <?php
        include "View/header.php";
    ?>
    <div class="container">
        <div class="row">
            <?php
                $ctrl="home";
                if(isset($_GET['action']))
                {
                    $ctrl=$_GET['action'];//home
                }
                include "Controller/".$ctrl.".php";
            ?>
        </div>
    </div>    
    <?php
        include "View/footer.php";
    ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>