<?php
include("../../config/config.php");
    $tenloaisp = $_POST['tendanhmuc'];

    if(isset($_POST['themdanhmuc'])){
        $sql_them = "INSERT INTO tbl_danhmuc(ten_danhmuc) VALUES('$tenloaisp')";
        mysqli_query($mysqli,$sql_them);
        header('Location:../../index.php');
    }elseif (isset($_POST['suadanhmuc'])) {
        $sql_sua = "UPDATE tbl_danhmuc
        SET ten_danhmuc ='$tenloaisp'
        WHERE id_danhmuc='$_GET[iddanhmuc]'";
        mysqli_query($mysqli,$sql_sua);
        header('Location:../../index.php');
    }else{
        $id=$_GET['iddanhmuc'];
        $sql_xoa ="DELETE FROM tbl_danhmuc Where id_danhmuc='".$id."'";
        mysqli_query($mysqli,$sql_xoa);
        header('Location:../../index.php');
    }
?>