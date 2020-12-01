<?php 
	$name = $_POST['name'];
	$email = $_POST['email'];

	$connect = mysqli_connect('localhost','root','','bkd01');
	mysqli_set_charset($connect,'utf8');
	$sql = "insert into khach_hang(name,email) values ('$name','$email')";
	mysqli_query($connect,$sql);
	mysqli_close($connect);
	header('location:../index.php');
 ?>