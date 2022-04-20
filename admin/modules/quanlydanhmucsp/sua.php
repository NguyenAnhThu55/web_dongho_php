
<?php
    $sql_sua_dmsp = "SELECT * FROM tbl_danhmuc Where id_danhmuc='$_GET[iddanhmuc]'";
    $query_sua_dmsp = mysqli_query($mysqli,$sql_sua_dmsp);
?>
<div class="container">
<h3>Sửa danh mục sản phẩm</h3>
<form method="POST" action="modules/quanlydanhmucsp/suly.php?iddanhmuc=<?php $_GET['iddanhmuc']?>">
    <?php
        while($dong = mysqli_fetch_array($query_sua_dmsp)){

    ?>
    <div class="form-group">
     
        <tr class="row">
            <div>
                <th class="col-sm-2 text-right"><label for="">ID</label></th>
                <th class="col-sm-10"><input type="texrt" value="<?php echo $dong['id_danhmuc']?>" class="form-control w-25"  name="iddanhmuc"></th>
            </div>
            <div>
                <th class=" text-right"><label for="">Tên Danh Mục</label></th>
                <th class=""><input type="text" value="<?php echo $dong['ten_danhmuc']?>" class="form-control w-50" name="tendanhmuc"></th>
            </div>
        </tr>
        <th>
            <input type="submit" value="Sửa danh mục" class="btn btn-primary mt-3" name="suadanhmuc"></input>
        </th>
    </div>
    <?php
        }
    ?>

</form>

</div>