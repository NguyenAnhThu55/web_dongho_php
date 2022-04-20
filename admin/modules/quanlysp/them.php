<h3>thêm sản phẩm</h3>
<div class="container ml-5">
    <table>
        <form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data">
            <div class="d-block mb-2">
                <tr>
                    <td class="text-dark font-weight-bold">Tên Danh Mục</td>
                    <td><select name="danhmuc">
                        <option>--Chọn--</option>
                        <?php
                            $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                            $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
                            while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                        ?>
                        <option value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['ten_danhmuc']?></option>
                        <?php 
                            }
                        ?>
                    </select></td>
                </tr>
                <tr class="m-2">
                    <td class="text-dark font-weight-bold">Tên Sản Phẩm</td>
                    <td><input type="text"name="tensanpham" style="width:300px;" class=""></td>
                </tr>
                <tr class="">
                    <td class="text-dark font-weight-bold">Mã Sản Phẩm</td>
                    <td><input type="text"name="masp" style="width:300px;"></td>
                </tr>
                <tr>
                    <td class="text-dark font-weight-bold">Giá niêm yết</td>
                    <td><input type="text"name="giasp" style="width:300px;"></td>
                </tr>
                <tr>
                    <td class="text-dark font-weight-bold">Giá Sp</td>
                    <td><input type="text"name="gia" style="width:300px;"></td>
                </tr>
                <tr>
                    <td class="text-dark font-weight-bold">Số Lượng</td>
                    <td><input type="text"name="soluong" style="width:50px;"></td>
                </tr>
                <tr>
                    <td class="text-dark font-weight-bold">Thông số kĩ thuật</td>
                    <td><textarea type="text"name="noidung" id="editor1" style="width:300px;"></textarea></td>
                </tr>
                <tr>
                    <td class="text-dark font-weight-bold">Chế độ bảo hành</td>
                    <td><textarea type="text"name="tomtac" id="editor2" style="width:300px;"></textarea></td>
                </tr>
                <tr>
                    <td class="text-dark font-weight-bold">Hình Ảnh</td>
                    <td><input type="file"name="hinhanh"></td>
                </tr>
                <th>
                    <input type="submit" value="thêm sản phẩm" class="btn btn-primary mt-3" name="themsanpham"></input>
                </th>
            </div>
        </form>
    </table>
</div>
