<?php
  if(isset($_POST['dangky'])){
    $tenkhachhang = $_POST['hovaten'];
    $email = $_POST['email'];
    $dienthoai = $_POST['dienthoai'];
    $matkhau = md5($_POST['matkhau']);
    $diachi = $_POST['diachi'];
    $sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai)
    VALUE ('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
      if($sql_dangky){
       echo '<h3 style="color:green;">Bạn đã đăng ký thành công</h3>';
       $_SESSION['dangky'] = $tenkhachhang; 
      }
    }
   
?>
        <div class="container">
            <div class="row form-dk">
                <div class="col">
                  <!-- form đang kýp -->
                    <form action="" method="POST" class="form" id="form-1" style="display: block;">
                      <h3 class="heading">Đăng ký tài khoản</h3>
                      <p class="desc">Vui lòng đăng ký vào form bên dưới ❤️</p>
                  
                      <div class="spacer"></div>
                  
                      <div class="form-group">
                          <label for="fullname" class="form-label">Họ và Tên :</label>
                          <input id="fullname" name="hovaten" type="text" placeholder="VD: Nguyễn Anh Thư" class="form-control">
                          <span class="form-message"></span>
                      </div>
                  
                      <div class="form-group">
                          <label class="form-label">Email :</label>
                          <input name="email" type="text" placeholder="VD: email@gmail.com" class="form-control">
                          <span class="form-message"></span>
                      </div>

                      <div class="form-group">
                          <label class="form-label">Số điện thoại:</label>
                          <input name="dienthoai" type="text" placeholder="VD: 0395245117" class="form-control">
                          <span class="form-message"></span>
                      </div>

                      <div class="form-group">
                          <label for="password" class="form-label">Mật khẩu :</label>
                          <input id="password" name="matkhau" type="password" placeholder="Nhập mật khẩu" class="form-control">
                          <span class="form-message"></span>
                      </div>
                  
                      <div class="form-group">
                          <label for="password_confirmation" class="form-label">Nhập lại mật khẩu :</label>
                          <input id="password_confirmation" name="password_confirmation" placeholder="Nhập lại mật khẩu" type="password" class="form-control">
                          <span class="form-message"></span>
                      </div>
                      <div class="form-group">
                          <label for="address" class="form-label">Địa chỉ :</label>
                          <input id="address" name="diachi" type="text" placeholder="VD: 117,Long Phú, Tam Bình, Vĩnh Long" class="form-control">
                          <span class="form-message"></span>
                      </div>
                      <input type="submit" name="dangky" class="form-submit" value="đăng ký"></input>
                      <span class="form-transfer" onclick="transfer()">Đăng nhập</span>
                 

                    </form>

                    <?php
                      if(isset($_POST['dangnhap'])){
                          $email = $_POST['email'];
                          $matkhau = md5($_POST['password']);
                          $sql = "SELECT * From tbl_dangky WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
                          $row = mysqli_query($mysqli,$sql);
                          $count = mysqli_num_rows($row);
                          if($count>0){
                            $row_data = mysqli_fetch_array($row);
                              $_SESSION['dangky'] = $row_data['tenkhachhang'];
                              // header('Location:webdongho/pages/main/giohang.php');
                          }else{
                              echo '<p>Mật Khẩu hoặc email nhập sai, vui lòng nhập lại email và mật khẩu</>';
                          }
                      }
                  ?>
                    <!-- form đăng nhập -->
                    <form action="" method="POST" class="form" id="form-2" style="display: none;">
                            <h3 class="heading">Đăng nhập</h3>
                            <p class="desc">Vui lòng đăng nhập vào form bên dưới ❤️</p>
                    
                            <div class="spacer"></div>
                    
                            <div class="form-group">
                            <label for="email" class="form-label">Email :</label>
                            <input id="email" name="email" type="text" placeholder="VD: email@gmail.com" class="form-control">
                            <span class="form-message"></span>
                            </div>
                    
                            <div class="form-group">
                            <label for="password" class="form-label">Mật khẩu :</label>
                            <input id="password" name="password" type="password" placeholder="Nhập mật khẩu" class="form-control">
                            <span class="form-message"></span>
                            </div>
                            
                            <input type="submit" name="dangnhap" class="form-submit" value="Đăng nhập"></input>
                            <span class="form-transfer" onclick="transfer2()">Đăng ký</span>
                    </form>
                </div>

                <div class="col">
                    <div class="login-banner">
                        <img src="img/donhhohublot.png" alt="" class="login-img">
                        <div class="login-trademark">
                            <span>NAT đồng hành cùng bạn</span>
                        </div>
                        <span class="login-border1"></span>
                        <span class="login-border2"></span>
                    </div>
                </div>
            </div>
        </div>

        <?php
?>
<script>

    document.addEventListener('DOMContentLoaded', function () {
      // Mong muốn của chúng ta
      Validator({
        form: '#form-1',
        formGroupSelector: '.form-group',
        errorSelector: '.form-message',
        rules: [
          Validator.isRequired('#fullname', 'Vui lòng nhập tên đầy đủ của bạn'),
          Validator.isEmail('#email'),
          Validator.minLength('#password', 6),
          Validator.isRequired('#password_confirmation'),
          Validator.isConfirmed('#password_confirmation', function () {
            return document.querySelector('#form-1 #password').value;
          }, 'Mật khẩu nhập lại không chính xác')
        ],
        onSubmit: function (data) {
          // Call API
          console.log(data);
        }
      });


      Validator({
        form: '#form-2',
        formGroupSelector: '.form-group',
        errorSelector: '.form-message',
        rules: [
          Validator.isEmail('#email'),
          Validator.minLength('#password', 6),
        ],
        onSubmit: function (data) {
          // Call API
          console.log(data);
        }
      });
    });
    
    const form1 = document.getElementById('form-1')
    const form2 = document.getElementById('form-2')
    function transfer() {
        form1.style.display = 'none'
        form2.style.display = 'block'
    }
    function transfer2() {
        form1.style.display = 'block'
        form2.style.display = 'none'
    }
</script>
