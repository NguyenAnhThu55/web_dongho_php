<!-- Tab panes -->
  <div class="tab-content">
      <!-- phần quản lý danh mục sản phẩm -->
    <div class="tab-pane container active" id="home">
      <?php
          include("quanlydanhmucsp/them.php");
          include("quanlydanhmucsp/lietke.php");
          if(isset($_GET['query'])=='sua'){
            include("quanlydanhmucsp/sua.php");
          }
      ?>
    </div>
    <!-- phần quản lý sản phẩm -->
    <div class="tab-pane container fade" id="menu1">
      <?php
            include("quanlysp/them.php");
            include("quanlysp/lietke.php");
            if(isset($_GET['query'])=='sua'){
              include("quanlysp/sua.php");
            }
      ?>
    </div>

    <!-- phần quản lý bài viết -->
    <div class="tab-pane container fade" id="menu2">
      <?php 
        include("lienhe/quanly.php");
      ?>
    </div>
  </div>