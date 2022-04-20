<?php
    $sql_lietke_sp = "SELECT * FROM tbl_sanpham ORDER BY id_sanpham DESC";
    $query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
?>

  <h3>Danh Sách Sản Phẩm</h3>
<table class="table table-bordered">
  <thead class="bg-secondary">
    <tr class="text-center">
        <th scope="col">STT</th>
        <th scope="col">ID</th>
        <th scope="col">Tên Sản Phẩm</th>
        <th style="width:160px" scope="col">Mã Sp</th>
        <th scope="col">Hình ảnh</th>
        <th scope="col">Giá Sp</th>
        <th scope="col">Số Lượng</th>
        <th style="width:200px" scope="col">Tóm Tắc</th>
        <th scope="col"></th>
    </tr>
  </thead>
<?php
    $i = 0;
    while($row = mysqli_fetch_array($query_lietke_sp)){$i++;
?>
  <tbody>
    <tr class="text-center">
      <th scope="row"><?php echo $i ?></th>
      <td><?php echo $row['id_sanpham'] ?></td>
      <td><?php echo $row['ten_sanpham'] ?></td>
      <td><?php echo $row['masp'] ?></td>
      <td><img width="40px" src="modules/quanlysp/upload/<?php echo $row['hinhanh'] ?>"></td>
      <td><?php echo $row['giasp'] ?></td>
      <td><?php echo $row['soluong'] ?></td>
      <td><p class="overflow-hidden"><?php echo $row['tomtac'] ?></p></td>
      <td><a href="modules/quanlysp/sua.php?idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a> | <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>">Xóa</a></td>
    </tr>
  </tbody>
<?php
    }
?>
</table>
