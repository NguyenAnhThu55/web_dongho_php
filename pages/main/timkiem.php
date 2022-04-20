<?php
if(isset($_POST['timkiem'])){
    $tukhoa = $_POST['tukhoa'];
}
    $sql_product = "SELECT * FROM tbl_sanpham,tbl_danhmuc Where tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.tensanpham LIKE '%".$tukhoa."%'";
    $query_product = mysqli_query($mysqli,$sql_product);
?>
<div class="row">
                <h3>Từ KHóa Tìm Kiếm: <?php echo $_POST['tukhoa'] ?></h3>
                <?php
                        while ($row = mysqli_fetch_array($query_product)) {
                ?>
               <div class="col card-title ">
                    <!-- 1 -->
                    <a href="index.php?quanly=sanpham&id=<?php echo $row['id_danhmuc']?>" class="text-decoration-none">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="admin/modules/quanlysp/upload/<?php echo $row['hinhanh']?>" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text text-dark"><?php echo $row['tomtac']?></p>
                                <h5 class="card-title"><?php echo $row['ten_sanpham']?></h5>
                                
                                <div class="price">
                                    <p class="new"><?php echo number_format($row['giasp'],0,',','.').'đ' ?></p>
                                    <p class="old text-dark">3.500.000đ</p>
                                </div>
                                <a href="#" class="btn btn-primary">Đặt Hàng Ngay</a>
                            </div>
                        
                        </div>
                    </a>
               </div>
               <?php
                        }
               ?>