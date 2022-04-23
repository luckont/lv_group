

<main class="pt-5 text-white" style="background-color:black">
<div class="pt-5">
  <h2 class="text-center m-5">Đăng ký thành viên</h2>
    <form action="http://localhost/WatchWebPro/mvc/models/registerModel.php" class="w-50 h-50 m-auto" method="POST" enctype="multipart/form-data" id="signupForm">
        <div class="form-group">
          <label for="email">Tên đăng nhập</label>
          <input type="text" class="form-control" placeholder="Ex. Nguyen Van A" name="username" id="username">
        </div>
        <div class="form-group">
            <label for="text">Số điện thoại</label>
            <input type="text" class="form-control" placeholder="" name="phonenumber" id="phonenumber">
        </div>
        <div class="form-group">
            <label for="pwd">Nhập mật khẩu</label>
            <input type="password" class="form-control" placeholder="" name="pwd" id="pwd">
        </div>
        <div class="form-group">
            <label for="pwd">Nhập lại mật khẩu</label>
            <input type="password" class="form-control" placeholder="" name="rpwd" id="rpwd">
        </div>
		<div class="form-group form-check">
			<div class="col-sm-5 offset-sm-4">
				<input class="form-check-input" type="checkbox" id="agree" name="agree" value="agree" />
				<label class="form-check-label" for="agree">Đồng ý các quy định của chúng tôi</label>
			</div>
		</div>
        <button type="submit" class="btn btn-primary w-100 mb-2" name="dangky" id="dangky">Đăng ký</button>
          <p class="pb-5 mb-0 text-center">Bạn đã có tài khoản thành viên ? Hãy <a href="">Đăng nhập</a> !</p>
      </form>

</div>
    
</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="http://localhost/WatchWebPro/public/js/jquery.validate.js"></script>

	<script type="text/javascript">

		$(document).ready(function() {
			$("#signupForm").validate({
				rules: {
					username: { required: true, minlength: 5 },
					pwd: { required: true, minlength: 5 },
					rpwd: { required: true, minlength: 5, equalTo: "#pwd"},
					phonenumber: { required: true, minlength: 10, maxlength: 10 },
					agree: "required"
				},
				messages: {
					username: {
						required:"Bạn chưa nhập vào tên đăng nhập",
						minlength:"Tên đăng nhập phải có ít nhất 5 ký tự"
					},
					pwd: {
						required:"Bạn chưa nhập mật khẩu",
						minlength:"Mật khẩu phải có ít nhất 5 ký tự"
					},
					rpwd: {
						required: "Bạn chưa nhập mật khẩu",
						minlength: "Mật khẩu phải có ít nhất 5 ký tự",
						equalTo: "Mật khẩu không trùng khớp với mật khẩu đã nhập"
					},
					phonenumber: {
						required:"Bạn chưa nhập số điện thoại",
						minlength:"Số điện thoại phải có 10 ký tự",
						maxlength:"Số điện thoại phải có 10 ký tự"
					},
					agree: "Bạn phải đồng ý với các quy định của chúng tôi"
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