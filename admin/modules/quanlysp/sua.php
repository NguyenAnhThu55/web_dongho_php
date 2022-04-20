
<?php
    include("../../config/config.php");
    $sql_sua_sp = "SELECT * FROM tbl_sanpham Where id_sanpham='$_GET[idsanpham]'";
    $query_sua_sp = mysqli_query($mysqli,$sql_sua_sp);
?>
<h1>Sửa sản phẩm</h1>
<div class="container ml-5">
    <table>
<?php
    while($row = mysqli_fetch_array($query_sua_sp)){
?>
        <form method="POST" action="xuly.php?idsanpham=<?php echo $row['id_sanpham']?>" enctype="multipart/form-data">
            <div class="d-block mb-2">
            <tr>
                <td class="text-dark font-weight-bold">Tên Danh Mục</td>
                <td><select name="danhmuc">
                    <?php
                        $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                        $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
                        while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                            if($row_danhmuc['id_danhmuc']== $row['id_danhmuc']){
                    ?>
                        <option selected value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['ten_danhmuc']?></option>
                        <?php 
                            }else{
                        ?>
                            <option value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['ten_danhmuc']?></option>
                    <?php
                        }
                    }
                    ?>
                    
                </select></td>
                </tr>
                <tr class="m-2">
                    <td class="text-dark font-weight-bold">Tên Sản Phẩm</td>
                    <td><input value="<?php echo $row['ten_sanpham']?>" type="text"name="tensanpham" style="width:300px;" class=""></td>
                </tr>
                <tr class="">
                    <td class="text-dark font-weight-bold">Mã Sản Phẩm</td>
                    <td><input value="<?php echo $row['masp']?>" type="text"name="masp" style="width:300px;"></td>
                </tr>
                <tr>
                    <td class="text-dark font-weight-bold">Giá Sp</td>
                    <td><input value="<?php echo $row['giasp']?>" type="text"name="giasp" style="width:300px;"></td>
                </tr>
                <tr>
                    <td class="text-dark font-weight-bold">Số Lượng</td>
                    <td><input value="<?php echo $row['soluong']?>" type="text"name="soluong" style="width:50px;"></td>
                </tr>
                <tr>
                    <td class="text-dark font-weight-bold">Nội Dung</td>
                    <td><textarea value="<?php echo $row['noidung'] ?>" type="text" name="noidung" style="width:300px;"></textarea></td>
                </tr>
                <tr>
                    <td class="text-dark font-weight-bold">Tóm Tắc</td>
                    <td><textarea value="<?php echo $row['tomtac'] ?>" type="text"name="tomtac" style="width:300px;"></textarea></td>
                </tr>
                <tr>
                    <td class="text-dark font-weight-bold">Hình Ảnh</td>
                    <td>
                        <input type="file"name="hinhanh">
                        <?php echo $row['hinhanh']?>
                    </td>
                </tr>
                <th>
                    <input type="submit" value="thêm sản phẩm" class="btn btn-primary mt-3" name="suasanpham"></input>
                </th>
            </div>
        </form>
    <?php
        }
    ?>
    </table>
</div>
