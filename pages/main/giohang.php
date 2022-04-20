<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đồng Hồ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../../font/fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="../../style.css">
</head>
<?php
    session_start();
?>
<div class="container">
<h2>Giỏ hàng 
    <?php
        if(isset($_SESSION['dangky'])){
            echo $_SESSION['dangky'];
        }
    ?>
</h2>
    <table class="table table-striped text-center">
    <thead>
        <tr>
        <th scope="col">STT</th>
        <th scope="col">Mã Sp</th>
        <th scope="col">Tên SP</th>
        <th scope="col">Hình ảnh</th>
        <th scope="col">Số lượng</th>
        <th scope="col">Giá Sp</th>
        <th scope="col">Thành Tiền</th>
        <th scope="col">Tùy chỉnh</th>
        </tr>
    </thead>
    <?php
    if(isset($_SESSION['cart'])){
        $tongtien = 0;
        $i = 0;
        foreach($_SESSION['cart'] as $cart_item){
            $thanhtien = $cart_item['soluong']*$cart_item['giasp'];
            $tongtien+=$thanhtien;
            $i++;
    ?>
    <tbody>
        <tr class="text-center">
            <th scope="row"><?php echo $i?></th>
            <td><?php echo $cart_item['masp']?></td>
            <td><?php echo $cart_item['tensanpham']?></td>
            <td><img width="80px" height="60px" src="../../admin/modules/quanlysp/upload/<?php echo $cart_item['hinhanh']?>"></td>
            <td>
                <a style="font-size: 12px;" class="text-decoration-none text-secondary" href="themgiohang.php?tru=<?php echo $cart_item['id']?>"><i class="fas fa-minus"></i></a>
                <?php echo $cart_item['soluong']?>
                <a style="font-size: 12px;" class="text-decoration-none text-secondary" href="themgiohang.php?cong=<?php echo $cart_item['id']?>"><i class="fas fa-plus"></i></a>
            </td>
            <td><?php echo number_format($cart_item['giasp'],0,',','.').'đ' ?></td>
            <td><?php echo number_format($thanhtien,0,',','.').'đ'?></td>
            <td><a class="text-decoration-none" href="themgiohang.php?xoa=<?php echo $cart_item['id']?>">Xóa</a></td>
        </tr>
    <?php 
        }  
    ?>
    <td colspan="8">
        <p style="color: red; font-weight:600">Tổng Tiền: <?php echo number_format($tongtien,0,',','.').'đ'?></p>
        <p><a href="themgiohang.php?xoatatca=1"? class="text-decoration-none">Xóa tất cả</a></p>
        <div>
            <?php
                if(isset($_SESSION['dangky'])){
            ?>
                <p><a href=""></a>Đặt hàng</p>
            <?php   
                }else{
            ?>
             <p><a href="../../index.php?quanly=taikhoan">Đăng nhập/Đang nhập để đặt hàng</a></p>
            <?php
                }
            ?>
           
        </div>
    </td>
    <?php
    }else{
    ?>
    <td colspan="8"><p>Hiện tại giỏ hàng trống</p></td>
    <?php          
    }
    ?>
    <a href="../../index.php">Trở lại</a> 
    </tbody>
    </table>
</div>