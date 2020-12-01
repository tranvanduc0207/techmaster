<!DOCTYPE html>
<html>
<head>
	<title>Process update staff</title>
</head>
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
	$can_cuoc = $_POST['can_cuoc'];
	$password = $_POST['password'];
	$level = $_POST['level'];
	
	require '../../connect.php';

	$sql = "update admin
	set
	name = '$name',
	age = '$age',
	gender = '$gender',
	phone = '$phone',
	email = '$email',
	address = '$address',
	can_cuoc = '$can_cuoc',
	password = '$password',
	level = '$level'
	where ma = '$ma'";
		// die($sql);
	mysqli_query($connect, $sql);
	mysqli_close($connect);
		// header('location:index.php');
	?>

</body>
</html>