<!DOCTYPE html>
<html>
<head>
	<title>
		Sửa thông tin nhân viên
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../common/form_style.css">
</head>
<body>
	<?php 
	$ma = $_GET['ma'];
	require '../../connect.php';
	$sql = "select*from admin where ma ='$ma'";
	$result = mysqli_query($connect,$sql);
	$each = mysqli_fetch_array($result);
	$gender = $each['gender'];
	?>
	<div class="container">
		<form method="post" action="process_update.php">
			
			<input type="hidden" name="ma" value="<?php echo($ma) ?>">
			Nhập tên
			<input type="text" name="name" value="<?php echo $each['name'] ?>">
			<br>
			Nhập ngày sinh
			<input type="date" name="age" value="<?php echo $each['age'] ?>">
			<br>
			<br>
			Giới tính
			<select name="gender">
				<option value="Nam" <?php if($gender=='Nam') echo "selected"; ?>>Nam</option>
				<option value="Nữ" <?php if($gender=='Nữ') echo "selected"; ?>>Nữ</option>
			</select>
			<br>
			Nhập số điện thoại
			<input type="number" name="phone" value="<?php echo $each['phone'] ?>">
			<br>

			Nhập E-mail
			<input type="email" name="email" value="<?php echo $each['email'] ?>">
			<br>
			Nhập địa chỉ
			<input type="text" name="address" value="<?php echo $each['address'] ?>">
			<br>
			Số căn cước công dân
			<input type="number" name="can_cuoc" value="<?php echo $each['can_cuoc'] ?>">
			<br>
			Mật khẩu
			<input type="password" name="password" value="<?php echo $each['password'] ?>">
			<br>
			Cấp độ
			<input type="number" name="level" value="<?php echo $each['level'] ?>">
			<br>

			<button>Sửa</button>
			
		</form>
	</div>
	<?php mysqli_close($connect); ?>

</body>
</html>