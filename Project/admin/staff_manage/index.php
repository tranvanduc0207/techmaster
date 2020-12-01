<!DOCTYPE html>
<html>
<head>
	<title>Account user</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../common/table_style.css">
</head>
<body>
	<div class="admin_view">
		<h1 align="center">Thông tin nhân viên</h1>
		<a href="view_insert.php"><button>Thêm nhân viên</button></a>
		<?php 
		$connect = mysqli_connect('localhost','root','','bkd01');
		mysqli_set_charset($connect,'utf8');
		$sql = "select * from admin";
		$result = mysqli_query($connect,$sql);
		?>
		<table border="1px">
			<tr>
				<th>Mã</th>
				<th>Họ và tên</th>
				<th>Tuổi</th>
				<th>Giới tính</th>
				<th>Số điện thoại</th>
				<th>E-mail</th>
				<th>Địa chỉ</th>
				<th>Căn cước công dân</th>
				<th>Mật khẩu</th>
				<th>Cấp độ</th>
				<td>Sửa</td>
				<td>Xóa</td>
			</tr>
			<?php foreach ($result as $each):  ?>
				<tr>
					<td>
						<?php echo $each['ma']; ?>
					</td>
					<td>
						<?php echo $each['name']; ?>
					</td>
					<td>
						<?php echo $each['age']; ?>
					</td>
					<td>
						<?php echo $each['gender']; ?>
					</td>
					<td>
						<?php echo $each['phone']; ?>
					</td>
					<td>
						<?php echo $each['email']; ?>
					</td>
					<td>
						<?php echo $each['address'];?>
					</td>
					<td>
						<?php echo $each['can_cuoc'];?>
					</td>
					<td>
						<?php echo $each['password'];?>
					</td>
					<td>
						<?php echo $each['level'];?>
					</td>
					<td>
						<a href="view_update.php?ma=<?php echo $each['ma'] ?>">Sửa</a>
					</td>
					<td>
						<a href="delete.php?ma=<?php echo $each['ma'] ?>">Xóa</a>
					</td>
				</tr>
			<?php endforeach ?>

		</table>
	</div>
	<?php mysqli_close($connect) ?>

</body>
</html>