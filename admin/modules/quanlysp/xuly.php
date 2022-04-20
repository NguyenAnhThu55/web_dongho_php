<?php
    include("../../config/config.php");
?>
<?php
    $danhmuc = $_POST['danhmuc'];
    $tensp = $_POST['tensanpham'];
    $masp = $_POST['masp'];
    $giasp = $_POST['giasp'];
    $gia = $_POST['gia'];
    $soluong = $_POST['soluong'];
    $noidung = $_POST['noidung'];
    $tomtac = $_POST['tomtac'];
    // xu ly anh
    $hinhanh = $_FILES['hinhanh']['name'];
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
    $hinhanh = time().'_'.$hinhanh;

    if(isset($_POST['themsanpham'])){
        $sql_them = "INSERT INTO tbl_sanpham(id_danhmuc,ten_sanpham,masp,giasp,gia_niem_yet,soluong,noidung,tomtac,hinhanh) 
        VALUES('".$danhmuc."','".$tensp."','".$masp."','".$giasp."','".$gia."','".$soluong."','".$noidung."','".$tomtac."','".$hinhanh."')";
        mysqli_query($mysqli,$sql_them);
        move_uploaded_file($hinhanh_tmp,'upload/'.$hinhanh);
        header('Location:../../index.php');
    }elseif (isset($_POST['suasanpham'])){
        if($hinhanh!=''){
            move_uploaded_file($hinhanh_tmp,'upload/'.$hinhanh);
            $sql = "SELECT * From tbl_sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
            $query = mysqli_query($mysqli,$sql);
            while($row = mysqli_fetch_array($query)){
                unlink('upload/'.$row['hinanh']);
            }
            $sql_sua = "UPDATE tbl_sanpham
            SET id_danhmuc ='$danhmuc',
                ten_sanpham ='$tensp',
                masp ='$masp',
                giasp ='$giasp',
                gia_niem_yet ='$gia',
                soluong ='$soluong',
                noidung ='$noidung',
                tomtac ='$tomtac',
                hinhanh ='".$hinhanh."'  
             WHERE id_sanpham='$_GET[idsanpham]'";
        
        }else{
            $sql_sua = "UPDATE tbl_sanpham
            SET id_danhmuc ='$danhmuc',
                ten_sanpham ='$tensp',
                masp ='$masp',
                giasp ='$giasp',
                gia_niem_yet ='$gia',
                soluong ='$soluong',
                noidung ='$noidung',
                tomtac ='$tomtac',
                    
            WHERE id_sanpham='$_GET[idsanpham]'";
        }
        mysqli_query($mysqli,$sql_sua);
        header('Location:../../index.php');
    }else{
        $sql = "SELECT * From tbl_sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
        $query = mysqli_query($mysqli,$sql);
        while($row = mysqli_fetch_array($query)){
            unlink('upload/'.$row['hinanh']);
        }
        $id=$_GET['idsanpham'];
        $sql_xoa ="DELETE FROM tbl_sanpham Where id_sanpham='".$id."'";
        mysqli_query($mysqli,$sql_xoa);
        header('Location:../../index.php');
    }
?>