<!DOCTYPE html>
<html>
<head>
	<title>View update</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../common/form_style.css">
	<style type="text/css">
		.container{
			margin-top: 20px;
			padding: 10px;
		}
		img{
			width: auto;
			height: 200px;
		}
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
</head>
<body>
	<?php 
	$ma = $_GET['ma'];
	$thu_muc_anh = '../../image/product/';

	include '../../connect.php';

	$sql_sp = "select * from san_pham where ma = '$ma'";
	$result_sp = mysqli_query($connect,$sql_sp);
	$each_sp = mysqli_fetch_array($result_sp);

	$sql_lsp = "select * from loai_san_pham";
	$result_lsp = mysqli_query($connect,$sql_lsp);
	?>
	<div class="container">
		<form action="process_update.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="ma" value="<?php echo $ma ?>">
			Tên 
			<input type="text" name="ten" value="<?php echo $each_sp['ten'] ?> ">
			<br>
			Giá
			<input type="number" name="gia" value="<?php echo $each_sp['gia'] ?>">
			<!-- <input type="number" name="gia" value="<?php echo $each['gia'] ?>"> -->
			<br>
			Mô tả
			<textarea name="mo_ta"><?php echo $each_sp['mo_ta'] ?></textarea>
			<br>
			Hình thức
			<select name="ma_loai_san_pham">
				<?php foreach ($result_lsp as $each_lsp) : ?>
					<option value="<?php echo $each_lsp['ma'] ?>"
						<?php if ($each_lsp['ma'] == $each_sp['ma_loai_san_pham']) echo "selected"; ?>
						>
						<?php echo $each_lsp['ten'] ?>
					</option>
				<?php endforeach ?>
				</select>
			<br>
			<input type="hidden" name="anh_cu" value="<?php echo $each_sp['anh'] ?> ">
			<img src="<?php echo $thu_muc_anh . $each_sp['anh'] ?>">
			<br>
			<input class="custom_file_input" type="file" name="anh_moi">
			<br>
			<button>Sửa</button>
		</form>
	</div>
	<?php mysqli_close($connect) ?>
</body>
</html>