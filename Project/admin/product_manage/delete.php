<!DOCTYPE html>
<html>
<head>
	<title>
		Delete staff
	</title>
</head>
<body>
	<?php 
		$ma = $_GET['ma'];
		require '../../connect.php';
		$sql = "delete from san_pham where ma ='$ma'";
		$result = mysqli_query($connect,$sql);
	 ?>
	 
	<?php mysqli_close($connect); ?>

</body>
</html>