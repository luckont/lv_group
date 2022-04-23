<?php

$errors = array();
$phonenumber = "";

$con = mysqli_connect('localhost','root','','lv_group');
        if(isset($_POST["dangky"])){
			$username = $_POST["username"];
			$pwd = $_POST["pwd"];
			$rpwd = $_POST["rpwd"];
			$phonenumber = $_POST["phonenumber"];

			$user_check_query = "select * from thanhvien WHERE phonenumber='$phonenumber' limit 1";
			$result = mysqli_query($con, $user_check_query);
			$user = mysqli_fetch_assoc($result);
			
		 if ($user) { // if user exists
			if ($user['phonenumber'] === $phonenumber) {
					echo '<script>alert("Số điện thoại đã tồn tại")</script>';
					echo '<script>window.location.href="http://localhost/WatchWebPro/registerController"</script>';
			}
		}
		else { 
			$pass = md5($pwd);
				mysqli_query($con,"
					insert into thanhvien (username,passwd,phonenumber)
					value ('".$username."','".$pass."','".$phonenumber."')
				");
				echo'<script>alert("Bạn đã đăng ký thành công !")</script>';
				echo '<script>window.location.href="http://localhost/WatchWebPro/loginController"</script>';
			}
		}
    

?> 