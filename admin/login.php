<?php
    session_start();
    include("config/config.php");
    if(isset($_POST['dangnhap'])){
        $taikhoan = $_POST['username'];
        $matkhau = md5($_POST['password']);
        $sql = "SELECT * From tbl_admin WHERE username='".$taikhoan."' AND password1='".$matkhau."' LIMIT 1";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count>0){
            $_SESSION['dangnhap'] = $taikhoan;
            header('Location:index.php');
        }else{
            echo '<script>alert("Tài Khoản hoặc mật khẩu không đúng vui lòng nhập lại!")</script>';
            header('Location:login.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="font/fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <div class="container">
       <div style="width:400px" class="container mt-5">
            <h2>Đăng nhập Admin</h2>
                <form action="" method="POST" autocomplete="off">
                    <div class="form-group mb-2">
                        <label for="">Tài Khoản</label>
                        <input type="text" class="form-control" name="username" placeholder="Nhập tên">
                    </div>
                    <div class="form-group">
                        <label for="">Mật Khẩu</label>
                        <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu">
                    </div>
                    <input type="submit" class="btn btn-primary mt-2" name="dangnhap" value="Đăng nhập"></input>
                </form>
       </div>
   </div>
</body>
</html>