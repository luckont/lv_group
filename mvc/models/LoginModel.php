<?php

$phonenumber = "";

$con = mysqli_connect('localhost','root','','lv_group');


if(isset($_POST["dangnhap"])){
    
    $phonenumber = $_POST["phonenumber"];
    $password = $_POST["pwd"];
    
    $password=md5($password);

    $query = "select * from thanhvien where phonenumber='$phonenumber' and passwd='$password' LIMIT 1";
    $result = mysqli_query($con, $query);
    $count = mysqli_num_rows($result);
      if ($count == 1) {
        echo '<script>alert("Đăng nhập thành công")</script>';
        echo '<script>window.location.href="http://localhost/WatchWebPro/"</script>';
      }

      else {
        echo '<script>alert("Sai số điện thoại hoặc mật khẩu")</script>';
        echo '<script>window.location.href="http://localhost/WatchWebPro/loginController"</script>';
      }

}


?>