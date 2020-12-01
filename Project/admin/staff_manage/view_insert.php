<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin insert</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="../common/form_style.css">
	<body>
		<div class="container">
			<form method="post" action="process_insert.php">
				<h1>Thêm nhân viên</h1>
				<label for="name">
					<b>Họ và tên</b>
				</label>
				<input type="text" name="name" placeholder="Enter your fullname" required>
				<br>
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
					<b>Số điện thoại</b>
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
				<label for=can_cuoc>
					<b>Số căn cước công dân</b>
				</label>
				<input type="number" name="can_cuoc" placeholder="Ex: 172166666666">
				<br>
				<label for=password>
					<b>Mật khẩu</b>
				</label>
				<input type="password" name="password" placeholder="Enter your password">
				<br>
				<label for=level>
					<b>Cấp độ</b>
				</label>
				<input type="number" name="level" placeholder="Enter your level">
				<br>
				<br>
				<button type="submit" class="btn">Đăng ký</button>
			</form>
		</div>
	</div>
</body>
</html>