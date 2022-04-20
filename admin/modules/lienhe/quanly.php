<?php
    $sql_lienhe = "SELECT * FROM tbl_lienhe ORDER BY id_lienhe DESC";
    $query_lienhe = mysqli_query($mysqli,$sql_lienhe);
?>
<div class="container ml-5">
    <h3>Quản Lý Thông Tin Liên Hệ</h3>
    <table class="table table-bordered">
        <thead class="bg-secondary">
        <tr>
            <th>STT</th>
            <th>Họ và Tên</th>
            <th>SĐT</th>
            <th>Email</th>
            <th>Nội Dung</th>
            <th>Tùy Chỉnh</th>
        </tr>
        </thead>
        <tbody>
        <?php
            $i = 0;
            while($row = mysqli_fetch_array($query_lienhe)){$i++;
        ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['ten_lienhe'] ?></td>
            <td><?php echo $row['sdt_lienhe'] ?></td>
            <td><?php echo $row['email_lienhe'] ?></td>
            <td><?php echo $row['noidung'] ?></td>
            <td><a href="modules/lienhe/xuly.php?idlienhe=<?php echo $row['id_lienhe'] ?>">Xóa</a></td>
        </tr>
        <?php
            }
        ?>
        </tbody>
    </table>
</div>