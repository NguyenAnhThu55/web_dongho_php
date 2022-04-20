<?php
    if(isset($_GET['action'])=='dangxuat'){
        unset($_SESSION['dangnhap']);
        header('Location:login.php');
    }
?>
<div class="container">
  <div class="nav-item text-uppercase d-flex" style="float: right;">
    <a class="nav-link" href="?action=dangxuat" name="dangxuat">Đăng Xuất:<?php if(isset($_SESSION['dangnhap'])){
      echo $_SESSION['dangnhap'];
      }?></a>
  </div>
  <ul class="nav nav-tabs">
    <li class="nav-item text-uppercase">
      <a class="nav-link active" data-toggle="tab" href="#home">Quản lý danh mục sản phẩm</a>
    </li>
    <li class="nav-item text-uppercase">
      <a class="nav-link" data-toggle="tab" href="#menu1">Quản lý sản phẩm</a>
    </li>
    <li class="nav-item text-uppercase">
      <a class="nav-link" data-toggle="tab" href="#menu2">Quản lý liên hệ</a>
    </li>
  </ul>
  
</div>

