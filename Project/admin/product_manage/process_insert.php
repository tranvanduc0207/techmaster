
<?php 
$ten = $_POST['ten'];
$gia = $_POST['gia'];
$mo_ta = $_POST['mo_ta'];
$ma_loai_san_pham = $_POST['ma_loai_san_pham'];
$anh = $_FILES['anh'];
include '../../connect.php';

$thu_muc_anh = '../../image/product/';
$duoi_anh = explode('.',$anh['name'])[1];
$ten_anh = time() . '.'.$duoi_anh;
$duong_dan_anh = $thu_muc_anh . $ten_anh;
move_uploaded_file($anh['tmp_name'], $duong_dan_anh);

		// include '../../connect.php';
		// $connect = mysqli_connect('localhost','root','','bkd01');

$sql = "insert into san_pham (ten, gia,mo_ta,ma_loai_san_pham, anh) values ('$ten', '$gia', '$mo_ta','$ma_loai_san_pham', '$ten_anh')";

mysqli_query($connect, $sql);
mysqli_close($connect);
		// header('location:index.php');
?>