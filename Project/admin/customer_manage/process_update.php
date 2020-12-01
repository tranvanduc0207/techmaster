
<body>
	<?php 
	if (isset($_POST['ma'])) {
		$ma = $_POST['ma'];
	}
	$name = $_POST['name'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$comment = $_POST['comment'];
	
	require '../../connect.php';

	$sql = "update khach_hang
	set
	name = '$name',
	age = '$age',
	gender = '$gender',
	phone = '$phone',
	email ='$email',
	address = '$address',
	comment = '$comment'
	where ma = '$ma'";
		// die($sql);
	mysqli_query($connect, $sql);
	mysqli_close($connect);
		// header('location:index.php');
	?>

</body>
