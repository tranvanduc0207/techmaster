<?php 
include "connect.php";
$sql = "select * from loai_san_pham";
$result = mysqli_query($connect,$sql);
$each = mysqli_fetch_array($result);
?>
<?php foreach ($result as $each) : ?>
		<a class=" btn btn-<?php echo $each['ma'] ?>" value="<?php echo $each['ma'] ?>" name="ma_san_pham" href="index.php?ma_san_pham=<?php echo $each['ma'] ?>#div_san_pham"><?php echo $each['ten'] ?>
	</a>
<?php endforeach ?>