<?php
    $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc";
    $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);

?>
<header class="">
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                <div class="container-fluid mx-5">
                  <a class="navbar-brand" href="index.php"><img src="img/logo_shop.png" alt="" class="logo_img"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="navbar-nav me-auto"> 
                      <?php
                          while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                      ?>
                      <li class="nav-item">
                        <a class="nav-link" href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['ten_danhmuc']?></a>
                      </li>
                      <?php
                          }
                      ?>
                      <li  class="nav-item">
                          <a class="nav-link" href="index.php?quanly=lienhe">Liên Hệ</a>
                      </li>
                      <li  class="nav-item">
                          <a class="nav-link" href="index.php?quanly=taikhoan">Tài Khoản</a>
                      </li>
                    </ul>