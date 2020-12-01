
<body>
	<?php 
	$name = $_POST['name'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$can_cuoc = $_POST['can_cuoc'];
	$password = $_POST['password'];
	$level = $_POST['level'];

	$connect = mysqli_connect('localhost', 'root', '', 'bkd01');
	mysqli_set_charset($connect, 'utf8');
		// include '../../connect.php'

	$sql = "insert into admin(name,age,gender,phone,email,address,can_cuoc,password,level) 
	values ( '$name', '$age','$gender', '$phone', '$email', '$address','$can_cuoc','$password','$level');";
	mysqli_query($connect, $sql);
	mysqli_close($connect);
		// header('location:index.php');
	?>

</body>
