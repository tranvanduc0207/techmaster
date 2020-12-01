	<div class="menu">
		<div class="logo">
			<a href="#">
				<img alt="Sun Studio" title="Sun Studio" src="image/logo.jpg">
			</a>
		</div>
		<ul class="menu_chinh">
			<li>
				<a href="index.php" data-hover="Trang chủ">
					Trang chủ
					
				</a>
			</li>
			<li>
				<a href="#">Album ảnh
					
				</a>
			</li>
			<li>
				<a href="index.php#div_san_pham">Báo giá dịch vụ
				</a>
				<ul class="sub-menu">
					<li>
						<?php include "loai_san_pham.php" ?><!--Danh sách các loại sản phẩm hiện có-->
					</li>
					
				</ul>
			</li>
			
			<li>
				<a href="#">Contact Us
					
				</a>
			</li>
			<li>
				<a href="#">Contact Us
					
				</a>
			</li>
			
		</ul>
		<div class="dang_nhap">
			<a href="#">Đăng nhập</a>
		</div>
		
			<a id="cart" href="">
				<i class="fas fa-shopping-cart"></i>
			</a>
		<!-- Nhận value ô tìm kiếm-->
		<?php 
		$tim_kiem = '';
		if (isset($_GET['tim_kiem'])) {
			$tim_kiem = $_GET['tim_kiem'];
		}
		?>

		<div class="search-container">
			<form action="ket_qua_tim_kiem.php">
				<input type="search" placeholder="Search.." name="tim_kiem" value="<?php echo($tim_kiem) ?>">
				<button type="submit"><i class="fa fa-search"></i></button>
			</form>
		</div>

	</div>