<!DOCTYPE html>
<html lang="en">
<head>
	<title>Simple Reistration Form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="../common/form_style.css">
	
</head>
<body>
	<form method="post" action="process_insert.php">
		<div class="container">
			<h1>Thêm khách hàng</h1>
			<label for="name">
				<b>Họ và tên</b>
			</label>
			<input type="text" name="name" placeholder="Enter your fullname" required>
			<label for="age">
				<b>Ngày sinh</b>
			</label>
			<br>
			<input type="date" name="age" placeholder="Enter your age">
			<br>
			<label for="gender">
				<b>Giới tính</b>
			</label>
			<br>
			<select name="gender" >
				<option value="Nam" selected>Nam</option>
				<option value="Nữ">Nữ</option>
			</select>
			<br>
			
			<label for="phone">
				<b>Phone Number</b>
			</label>
			<br>
			<input type="number" name="phone" placeholder="Enter your phone" required>
			<br>
			<label for="email">
				<b>Email</b>
			</label>
			<input type="email" placeholder="Enter Email" name="email" required>
			<br>
			<label for=address>
				<b>Địa chỉ</b>
			</label>
			<input type="text" name="address" placeholder="Enter your address">
			<br>
			<label for="comment">
				<b>Ý kiến của bạn</b>
			</label>
			<br>
			<textarea name="comment" cols="50" rows="5"></textarea>
			
			<button type="submit" class="btn">Đăng ký</button>
		</div>
		<!-- </div> -->
	</form>

</div>
</body>
</html>