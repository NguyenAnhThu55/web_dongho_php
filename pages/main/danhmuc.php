<?php
    $sql_product = "SELECT * FROM tbl_danhmuc,tbl_sanpham Where tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_danhmuc='$_GET[id]' ORDER BY tbl_sanpham.id_sanpham DESC";
    $query_product = mysqli_query($mysqli,$sql_product);
    $query_pro = mysqli_query($mysqli,$sql_product);
    $row_title = mysqli_fetch_array($query_pro);
?>

    <div class="row">
                    <h3>Danh Mục Sản Phẩm: <?php echo $row_title['ten_danhmuc']?></h3>
                        <?php
                            while ($row_product = mysqli_fetch_array($query_product)) {
                        ?>
                <div class="col card-title mt-2">
                        <!-- 1 -->
                        <div class="card" style="width: 18rem;">
                            <a href="index.php?quanly=sanpham&id=<?php echo $row_product['id_danhmuc']?>" class="text-decoration-none">
                                <img style="width: 200px;height: 190px;margin-left: 40px;" class="card-img-top" src="admin/modules/quanlysp/upload/<?php echo $row_product['hinhanh']?>" alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text text-dark"><?php echo $row_product['masp']?></p>
                                    <h5 class="card-title"><?php echo $row_product['ten_sanpham']?></h5>
                                    
                                    <div class="price">
                                        <p class="new"><?php echo number_format($row_product['giasp'],0,',','.').'đ' ?></p>
                                        <p class="old text-dark"><?php echo number_format($row_product['gia_niem_yet'],0,',','.').'đ'?></p>
                                    </div>
                                    <a href="#" class="btn btn-primary" style="margin-left: 56px;">Đặt Hàng Ngay</a>
                                </div>
                            </a>
                        
                        </div>
                </div>
                <?php
                            }
                ?>
