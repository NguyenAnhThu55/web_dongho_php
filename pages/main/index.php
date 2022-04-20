<?php
if(isset($_GET['trang'])){
    $page = $_GET['trang'];
}else{
    $page = '';
}
if($page =='' || $page ==1){
    $begin = 0;
}else{
    $begin = ($page*12)-12;
}
    $sql_product = "SELECT * FROM tbl_danhmuc,tbl_sanpham Where tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT $begin,12";
    $query_product = mysqli_query($mysqli,$sql_product);
?>
<div class="row">
                <h3>Sản phẩm mới nhất</h3>
                <?php
                        while ($row = mysqli_fetch_array($query_product)) {
                ?>
               <div class="col card-title ">
                    <!-- 1 -->
                    <a href="index.php?quanly=sanpham&id=<?php echo $row['id_danhmuc']?>" class="text-decoration-none">
                        <div class="card" style="width: 18rem;">
                            <img style="width: 200px;height: 190px;margin-left: 40px;" class="card-img-top" src="admin/modules/quanlysp/upload/<?php echo $row['hinhanh']?>" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text text-dark"><?php echo $row['masp']?></p>
                                <h5 class="card-title"><?php echo $row['ten_sanpham']?></h5>
                                
                                <div class="price">
                                    <p class="new"><?php echo number_format($row['giasp'],0,',','.').'đ' ?></p>
                                    <p class="old text-dark"><?php echo number_format($row['gia_niem_yet'],0,',','.').'đ'?></p>
                                </div>
                                <a href="#" class="btn btn-primary">Đặt Hàng Ngay</a>
                            </div>
                        
                        </div>
                    </a>
               </div>
               <?php
                        }
               ?>
               <nav aria-label="Page navigation example">
                   <?php
                    $sql_trang = mysqli_query($mysqli,"SELECT * From tbl_sanpham");
                    $row_count = mysqli_num_rows($sql_trang);
                    $trang = ceil($row_count/12);
                   ?>
                    <ul class="pagination text-center">
                        <?php 
                            for($i=1;$i<=$trang;$i++){

                            
                        ?>
                        <li class="page-item"><a 
                        <?php if($i==$page){ 
                            echo 'style="background-color: #cccccc;"';
                            }else{
                                echo '';
                            }?>
                        
                        class="page-link" href="index.php?trang=<?php echo $i?>"><?php echo $i?></a></li>
                        <?php 
                            }
                        ?>
                    </ul>
                </nav>