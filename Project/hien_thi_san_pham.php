<?php include "title_chung.php" ?>
<body>
	<div style="text-align:center; margin-bottom: 25px;">
		<?php include "include/loai_san_pham.php" ?>
	</div>
	
		<?php 
		//Lấy mã loại sản phẩm để lọc sản phẩm theo danh mục loại sản phẩm
		$san_phamm = '1';
		if (isset($_GET['ma_san_pham'])) {
			$san_phamm = $_GET['ma_san_pham'];
		}
		//Đổi màu cho thẻ a
		echo "<style> .btn-$san_phamm{color:#e500b2}</style>";
		
		/*--*/
		$thu_muc_anh = 'image/product/';
		include 'connect.php';
		$tim_kiem = '';
		if (isset($_GET['tim_kiem'])) {
			$tim_kiem = $_GET['tim_kiem'];
		}
		
		//lấy sản phẩm phù hợp với loại sản phẩm và tìm kiếm
		$sql = "select 
		san_pham.*,loai_san_pham.ten as 'ten_loai_san_pham' from san_pham 
		join loai_san_pham on 
		loai_san_pham.ma = san_pham.ma_loai_san_pham where san_pham.ma_loai_san_pham = '$san_phamm'";
		$result = mysqli_query($connect,$sql);
		//đếm số sản phẩm đang có
		$tong_so_san_pham = mysqli_num_rows($result);

		$so_san_pham_1_trang = 8;
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

		<div class="grid-container">
			
			<?php foreach ($result as $each): ?>
				<div class="grid-item">
					<p>
						<img class="anh_san_pham" src="<?php echo $thu_muc_anh . $each['anh'] ?>">
					</p>
					<p><?php echo $each['ten']; ?></p>
					<p><?php echo $each['gia']; ?></p>
					<button>Đặt dịch vụ</button>
				</div>
			<?php endforeach ?>
		</div>
		<!--Kết thúc phần hiển thị sản phẩm-->
		<p align="center" class="so_trang">
			<?php for($i = 1; $i <=$tong_so_trang; $i++){ ?>
				<a href="?trang=<?php echo $i ?>#div_san_pham"><?php echo $i ?></a>
			<?php } ?>
		</p>
		<?php mysqli_close($connect) ?>
	</body>
