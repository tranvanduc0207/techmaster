
<body>
	<?php 
	$name = $_POST['name'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$comment = $_POST['comment'];

	$connect = mysqli_connect('localhost', 'root', '', 'bkd01');
	mysqli_set_charset($connect, 'utf8');
	$sql = "insert into khach_hang (name, age,gender,phone,email,address,comment) values ('$name', '$age', '$gender', '$phone','$email','$address','$comment')";
		// print_r($sql);
		// die();
	mysqli_query($connect, $sql);
	mysqli_close($connect);
		// header('location:index.php');
	?>

</body>
