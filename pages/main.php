<!-- phần main -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="img/bannerdongho2-1.jpg" alt="First slide">
              </div>
            </div>
        </div>
        <!-- phần product -->
       <div class="container">   
            <?php
                if(isset($_GET['quanly'])){
                    $tam = ($_GET['quanly']);
                }else{
                    $tam = '';
                }
                if($tam=='danhmucsanpham'){
                    include("main/danhmuc.php");
                }elseif($tam=='lienhe'){
                    include("main/lienhe.php");
                }elseif($tam=='taikhoan'){
                    include("main/taikhoan.php");
                }elseif($tam=='sanpham'){
                    include("main/details.php");
                }elseif($tam=='timkiem'){
                    include("main/timkiem.php");
                }
                else {
                    include("main/index.php");
                }
            ?>
       </div>        
