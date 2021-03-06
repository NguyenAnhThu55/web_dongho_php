<?php
    $sql_chitiet = "SELECT * FROM tbl_danhmuc,tbl_sanpham Where tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_danhmuc='$_GET[id]' ORDER BY tbl_sanpham.id_sanpham DESC LIMIT 20";
    $query_chitiet = mysqli_query($mysqli,$sql_chitiet);
    while ($row_chitiet= mysqli_fetch_array($query_chitiet)) {
?>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="main">
                        <span class="control prev">
                            <i class="fas fa-angle-left"></i>
                        </span>
                        <span class="control next">
                            <i class="fas fa-angle-right"></i>
                        </span>
                        <div class="img-wrap">
                            <img class="img-details" src="admin/modules/quanlysp/upload/<?php echo $row_chitiet['hinhanh']?>" alt="" />
                        </div>
                        <div class="list-img">
                            <div>
                                <img class="img-details" src="admin/modules/quanlysp/upload/<?php echo $row_chitiet['hinhanh']?>" alt="" />
                            </div>
                            <div>
                                <img class="img-details" src="https://www.dangquangwatch.vn/upload/img_big/1411413981_dong-ho-thuy-sy3.jpg" alt="" />
                            </div>
                            <div>
                                <img class="img-details" src="https://www.dangquangwatch.vn/upload/img_big/83781081_dong-ho-thuy-sy5.jpg" alt="" />
                            </div>
                            <div>
                                <img class="img-details" src="https://www.dangquangwatch.vn/upload/img_big/892764208_dong-ho-thuy-sy8.jpg" alt="" />
                            </div>
                            <div>
                                <img class="img-details" src="https://www.dangquangwatch.vn/upload/product/784845121_donghothuysy13.jpg" alt="" />
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="col">
                    <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham']?>">
                        <div class="container-details__content">
                            <h2 class="container-details__content-name hide-on-mobile"><?php echo $row_chitiet['ten_sanpham']?></h2>
                            <!-- PH???N PRICE -->
                            <div class="price row">
                                <div class="price1 col">
                                    <p class="text mb-0">Gi?? ni??m y???t</p>
                                    <p class="numb old mb-0"><?php echo $row_chitiet['gia_niem_yet']?></p>
                                </div>
                                <div class="sale col">
                                    <span class="numb text-warning">-10%</span>
                                </div>
                                <div class="price1 dnTablet-l col">
                                    <p class="text mb-0">Gi?? khuy???n m???i</p>
                                    <p class="numb mb-0" style="color: #f70404;"><?php echo number_format($row_chitiet['giasp'],0,',','.').'??' ?></p>
                                </div>
                            </div>
                            <!-- Ph???n Th??ng s??? -->
                            <div class="row mb-2">
                                <div class="item col-sm-3">
                                    <p class="text mb-0 text-center">???????ng k??nh m???t</p>
                                    <p class="mb-0 text-center">43.5 mm</p>
                                </div>
                                <div class="item col-sm-3">
                                    <p class="text mb-0 text-center">????? ch???u n?????c</p>
                                    <p class="mb-0 text-center">5 ATM</p>
                                </div>
                                <div class="item col-sm-3">
                                    <p class="text mb-0 text-center">Ch???t li???u m???t</p>
                                    <p class="mb-0 text-center">Sapphire</p>
                                </div>
                                <div class="col-sm-3">
                                    <p class="text mb-0 text-center">N??ng l?????ng s??? d???ng</p>
                                    <p class="mb-0 text-center">M??y c?? l??n c??t b???ng tay</p>
                                </div>
                            </div>
                            <!-- PH???N N??T ?????T H??NG -->
                            <div class="container-details__oder">
                                <div class="deatails-addtocart">
                                    <input type="submit" class="btn btn-warning deatails-addtocart__btn" name="themgiohang" value="Th??m gi??? h??ng">
                                    </input>
                                </div>
                            </div>
                            <hr>
                            <!-- ph???n b???o qu???n v?? nguy??n li???u -->
                            <div class="">
                                <div class="menu-tap">
                                    <div class="">
                                        <div class="product-tap">
                                            <ul class="tab-list">
                                                <li class="tab-item active" data-target="#menu1">M?? t??? s???n ph???m</li>
                                                <li class="tab-item" data-target="#menu2">Ch??? ????? B???o H??nh</li>
                                            </ul>
                                            <div id="menu1" class="tab-content active">
                                                <p class="tab-text">
                                                    <?php echo $row_chitiet['noidung']?>
                                                </p>
                                            </div>
                                            <div id="menu2" class="tab-content">
                                                <p class="tab-text not-mg">
                                                <?php echo $row_chitiet['tomtac']?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
<?php
    }
?>
