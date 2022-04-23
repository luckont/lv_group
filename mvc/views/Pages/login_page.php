
<main class="pt-5 text-white" style="background-color:black">
<div class="pt-5">
  <h2 class="text-center m-5">Đăng nhập</h2>
    <form action="http://localhost/WatchWebPro/mvc/models/LoginModel.php" class="w-50 h-50 m-auto" method="POST" enctype="multipart/form-data" id="loginForm">
        <div class="form-group">
            <label for="text">Số điện thoại</label>
            <input type="text" class="form-control" placeholder="" name="phonenumber" id="phonenumber">
        </div>
        <div class="form-group">
            <label for="pwd">Nhập mật khẩu</label>
            <input type="password" class="form-control" placeholder="" name="pwd" id="pwd">
        </div>
        <button type="submit" class="btn btn-primary w-100 mb-2 mt-2" name="dangnhap" id="dangnhap">Đăng nhập</button>
          <p class="pb-5 mb-0 text-center">Bạn chưa có tài khoản thành viên ? Hãy <a href="">Đăng ký</a> !</p>
      </form>

</div>
    
</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="http://localhost/WatchWebPro/public/js/jquery.validate.js"></script>

	<script type="text/javascript">

		$(document).ready(function() {
			$("#loginForm").validate({
				rules: {
					pwd: { required: true, minlength: 5 },
					phonenumber: { required: true, minlength: 10, maxlength: 10 }
				},
				messages: {
					pwd: {
						required:"Bạn chưa nhập mật khẩu",
						minlength:"Mật khẩu phải có ít nhất 5 ký tự"
					},
					phonenumber: {
						required:"Bạn chưa nhập số điện thoại",
						minlength:"Số điện thoại phải có 10 ký tự",
						maxlength:"Số điện thoại phải có 10 ký tự"
					},
				},
				errorElement: "div",
				errorPlacement: function(error, element) {
					error.addClass("invalid-feedback");
					if (element.prop("type") === "checkbox") {
						error.insertAfter(element.siblings("label"));
					} else {
						error.insertAfter(element);
					}
				},
				highlight: function (element, errorClass, validClass) {
					$(element).addClass("is-invalid").removeClass("is-valid");
				},
				unhighlight: function (element, errorClass, validClass) {
					$(element).addClass("is-valid").removeClass("is-invalid");
				}
			});
		}); 

	</script>