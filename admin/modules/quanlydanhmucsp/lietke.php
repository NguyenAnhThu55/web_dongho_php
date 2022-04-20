<?php
    $sql_lietke_dmsp = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc";
    $query_lietke_dmsp = mysqli_query($mysqli,$sql_lietke_dmsp);
?>
  <h3>Danh Sách Danh Mục Sản Phẩm</h3>
<table class="table table-bordered">
  <thead class="bg-secondary">
    <tr class="text-center">
        <th scope="col">STT</th>
        <th scope="col">ID</th>
        <th scope="col">Tên Danh Mục</th>
        <th scope="col"></th>
    </tr>
  </thead>
<?php
    $i = 0;
    while($row = mysqli_fetch_array($query_lietke_dmsp)){$i++;
?>
  <tbody>
    <tr class="text-center">
      <th scope="row"><?php echo $i ?></th>
      <td><?php echo $row['id_danhmuc'] ?></td>
      <td><?php echo $row['ten_danhmuc'] ?></td>
      <td><a href="index.php?query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Sửa</a> | <a href="modules/quanlydanhmucsp/suly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Xóa</a></td>
    </tr>
  </tbody>
<?php
    }
?>
</table>