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
		<h1 align="center">Thông tin khách hàng</h1>
		<a href="view_insert.php"><button>Thêm khách hàng</button></a>
		<?php 
		$connect = mysqli_connect('localhost','root','','bkd01');
		mysqli_set_charset($connect,'utf8');
		$sql = "select * from khach_hang";
		$result = mysqli_query($connect,$sql);
		?>
		
		<table border="1px">
			<tr>
				<th>Mã</th>
				<th>Họ tên</th>
				<th>Ngày sinh</th>
				<th>Giới tính</th>
				<th>Email</th>
				<th>Số điện thoại</th>
				<th>Địa chỉ</th>
				<th>Comment</th>
				<th>Sửa</th>
				<th>Xóa</th>
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
						<?php echo $each['email']; ?>
					</td>
					<td>
						<?php echo $each['phone']; ?>
					</td>
					<td>
						<?php echo $each['address']; ?>
					</td>
					<td>
						<?php echo $each['comment']; ?>
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
</body>
</html>