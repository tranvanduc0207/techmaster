
<body>
	<?php 
	$ma = $_GET['ma'];
	require '../../connect.php';
	$sql = "delete from khach_hang where ma ='$ma'";
	$result = mysqli_query($connect,$sql);
		// $each = mysqli_fetch_array($result);
	?>
	
	<?php mysqli_close($connect); ?>

</body>
</html>