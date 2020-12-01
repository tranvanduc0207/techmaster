<!DOCTYPE html>
<html>
<head>
	<title>
		Sửa thông tin khách hàng
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../common/form_style.css">
</head>
<body>
	<?php 
	$ma = $_GET['ma'];
	require '../../connect.php';
	$sql = "select*from khach_hang where ma ='$ma'";
	$result = mysqli_query($connect,$sql);
	$each = mysqli_fetch_array($result);
	$gender = $each['gender'];
	?>
	<div class="container">
		<form method="post" action="process_update.php">
			<input type="hidden" name="ma" value="<?php echo($ma) ?>">
			Nhập Họ và Tên
			<input type="text" name="name" value="<?php echo $each['name'] ?>">
			<br>
			Nhập ngày sinh
			<input type="date" name="age" value="<?php echo $each['age'] ?>">
			<br>
			Giới tính
			<select name="gender">
				<option value="Nam" <?php if($gender=='Nam') echo "selected"; ?>>Nam</option>
				<option value="Nữ" <?php if($gender=='Nữ') echo "selected"; ?>>Nữ</option>
			</select>
			Nhập Email
			<input type="email" name="email" value="<?php echo $each['email'] ?>">
			<br>
			Nhập số điện thoại
			<input type="number" name="phone" value="<?php echo $each['phone'] ?>">
			<br>
			Địa chỉ
			<input type="text" name="address" value="<?php echo $each['address'] ?>">
			Ý kiến của bạn
			<textarea name="comment"><?php echo $each['comment']?></textarea>
			<br>
			<button>Sửa</button>
		</form>
	</div>
	<?php mysqli_close($connect); ?>

</body>
</html>