<?php
    include("../../config/config.php");
?>
<?php
    $tenlh = $_POST['fullname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $subject = $_POST['subject'];
    if(isset($_POST['gui'])){
        $sql_them = "INSERT INTO tbl_lienhe(ten_lienhe,email_lienhe,sdt_lienhe,noidung) 
        VALUES('".$tenlh."','".$email."','".$number."','".$subject."')";
        mysqli_query($mysqli,$sql_them);
        header('Location:../../../index.php');
    }    
    else{
        $sql = "SELECT * From tbl_lienhe WHERE id_lienhe = '$_GET[idlienhe]' LIMIT 1";
        $query = mysqli_query($mysqli,$sql);
        $id=$_GET['idlienhe'];
        $sql_xoa ="DELETE FROM tbl_lienhe Where id_lienhe='".$id."'";
        mysqli_query($mysqli,$sql_xoa);
        header('Location:../../index.php');
    }
?>