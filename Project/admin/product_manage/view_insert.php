<!DOCTYPE html>
<html>
<head>
	<title>Thêm bài đăng</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../common/form_style.css">
</head>
<style type="text/css">
	.custom_file_input::-webkit-file-upload-button {
		visibility: hidden;
	}
	.custom_file_input::before {
		content: 'Chọn file ảnh';
		display: inline-block;
		background: linear-gradient(top, #f9f9f9, #e3e3e3);
		border: 1px solid #999;
		border-radius: 3px;
		padding: 5px 8px;
		outline: none;
		white-space: nowrap;
		-webkit-user-select: none;
		cursor: pointer;
		text-shadow: 1px 1px #fff;
		font-weight: 700;
		font-size: 10pt;
	}
	.custom_file_input:hover::before {
		border-color: black;
	}
	.custom_file_input:active::before {
		background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
	}
</style>
<body>
	<?php 
	include '../../connect.php';
	$sql = "select * from loai_san_pham";
	$result = mysqli_query($connect,$sql);
	?>
	<div class="container" style="top: 50%">
		<form method="post" action="process_insert.php" enctype="multipart/form-data">
			Tên
			<input type="text" name="ten">
			<br>
			Giá
			<input type="number" name="gia">
			<br>
			Mô tả
			<textarea name="mo_ta"></textarea>
			<br>
			Mã loại sản phẩm
			<select name="ma_loai_san_pham">
				<?php foreach ($result as $each) : ?>
					<option value="<?php echo $each['ma'] ?>">
						<?php echo $each['ten'] ?>
					</option>
				<?php endforeach ?>
				</select>
				Ảnh
				<input type="file" name="anh" class="custom_file_input">
				<br>
				<button>Đăng</button>
			</form>
			
		</div>
		<?php mysqli_close($connect) ?>
	</body>
	</html>