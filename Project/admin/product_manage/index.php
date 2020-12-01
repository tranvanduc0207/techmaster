<!DOCTYPE html>
<html>
<head>
	<title>Product</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../common/table_style.css">
</head>
<body>
	<div class="admin_view">
		<h1 align="center">Thông tin sản phẩm</h1>
		<a href="view_insert.php">
			<button>Thêm sản phẩm</button>
		</a>
		

		<?php 
		$thu_muc_anh = '../../image/product/';
		include '../../connect.php';
		$tim_kiem = '';
		if (isset($_GET['tim_kiem'])) {
			$tim_kiem = $_GET['tim_kiem'];
		}
		
		//lấy sản phẩm phù hợp với loại sản phẩm và tìm kiếm
		$sql = "select 
		san_pham.*,loai_san_pham.ten as 'ten_loai_san_pham' from san_pham 
		join loai_san_pham on 
		loai_san_pham.ma = san_pham.ma_loai_san_pham where san_pham.ten like '%$tim_kiem%' or loai_san_pham.ten like '%$tim_kiem%'";
		$result = mysqli_query($connect,$sql);
		//đếm số sản phẩm đang có
	$tong_so_san_pham = mysqli_num_rows($result);
	$so_san_pham_1_trang = 3;
	//tinh số trang hiển thị
	$tong_so_trang = ceil($tong_so_san_pham / $so_san_pham_1_trang);
	$trang_hien_tai = 1;
	if(isset($_GET['trang'])){
		$trang_hien_tai = $_GET['trang'];
	}
	$so_san_pham_can_bo_qua = ($trang_hien_tai-1) * $so_san_pham_1_trang;
	//hiển thị sản phẩm trên từng trang một
	$sql = "$sql limit $so_san_pham_1_trang offset $so_san_pham_can_bo_qua";
	$result = mysqli_query($connect,$sql);

		?>
		<form>
			Tìm kiếm
			<input type="search" name="tim_kiem" value="<?php echo($tim_kiem) ?>">
		</form>

		<table border="1" width="100%">
			<tr>
				<th>Tên</th>
				<th>Giá</th>
				<th>Mô tả</th>
				<th>Hình thức</th>
				<th>Ảnh</th>
				<th>Sửa</th>
				<th>Xóa</th>
			</tr>
			<?php foreach ($result as $each): ?>
				<tr>
					<td>
						<?php echo $each['ten']; ?>
					</td>
					<td>
						<?php echo $each['gia']; ?>
					</td>
					<!--Substring mô tả nếu quá 90 kí tự--->
					<?php 
					$in = $each['mo_ta'];
					$out = strlen($in) > 60 ? substr($in,0,60)."..." : $in; 
					?>
					<td class="truncate-overflow">
						<?php echo $out; ?>
					</td>
					<td>
						<?php echo $each['ten_loai_san_pham']; ?>
					</td>
					<td>
						<img height="200px" src="<?php echo $thu_muc_anh . $each['anh'] ?>">
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
		<p align="center">
		<?php for($i = 1; $i <=$tong_so_trang; $i++){ ?>
			<a href="?trang=<?php echo $i ?>&tim_kiem=<?php echo $tim_kiem ?>#div_san_pham"><?php echo $i ?></a>
		<?php } ?>
	</p>
	</div>
	<?php mysqli_close($connect) ?>
</body>
</html>