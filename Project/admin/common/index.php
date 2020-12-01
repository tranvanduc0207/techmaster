<!DOCTYPE html>
<html>
<head>
	<title>Header</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet" type="text/css" href="menu.css">
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

</head>
<body>
	<div class="view_all_menu">
		<div class="wellcome">
			<?php 
			// $xin_chao = $_GET['name'];
			echo "Chào mừng đến với trang admin";
			?>

		</div>
		<div class="menu">
			<ul>
				<li>
					<a href="#" data-hover="Trang chủ">
						Trang chủ
					</a>
				</li>
				<li>
					<a href="#" class="first-down">Quản lí nhân viên
						<span class="fas fa-caret-down first"></span>
					</a>
					<ul class="first-show">
						<li>
							<a href="../staff_manage/index.php">Tất cả nhân viên
							</a>
						</li>
						<li>
							<a href="../staff_manage/view_insert.php">Thêm nhân viên
							</a>
						</li>
						<li>
							<a href="../staff_manage/index.php">Sửa thông tin
							</a>
						</li>
						<li>
							<a href="../staff_manage/index.php">Xóa nhân viên
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#" class="second-down">Quản lí khách hàng
						<span class="fas fa-caret-down second"></span>
					</a>
					<ul class="second-show">
						<li>
							<a href="../customer_manage/index.php">Tất cả khách hàng
							</a>
						</li>
						<li>
							<a href="../customer_manage/view_insert.php">Thêm khách hàng
							</a>
						</li>
						<li>
							<a href="../customer_manage/index.php">Sửa thông tin
							</a>
						</li>
						<li>
							<a href="../customer_manage/index.php">Xóa khách hàng
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#" class="third-down">Sản phẩm
						<span class="fas fa-caret-down third"></span>
					</a>
					<ul class="third-show">
						<li>
							<a href="../product_manage/index.php">Tất cả sản phẩm
							</a>
						</li>
						<li>
							<a href="../product_manage/view_insert.php">Thêm sản phẩm
							</a>
						</li>
						<li>
							<a href="../product_manage/index.php">Sửa thông tin
							</a>
						</li>
						<li>
							<a href="../product_manage/index.php">Xóa sản phẩm
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">Quản lí tin tức
					</a>
				</li>
				<li>
					<a href="#">Quản lí ảnh
					</a>
				</li>
				<li>
					<a href="#">Đăng xuất
					</a>
				</li>

			</ul>
		</div>
	</div>
	<!-- <div class="content">
		
	</div> -->
	<script type="text/javascript">
		$('.first-down').click(function(){
			$('div ul .first-show').toggleClass("show1")
		})
		$('.second-down').click(function(){
			$('div ul .second-show').toggleClass("show2")
		})
		$('.third-down').click(function(){
			$('div ul .third-show').toggleClass("show3")
		})
	</script>
</body>
</html>