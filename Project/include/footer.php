	<div class="wrap">
		<div class="footer footer-left">
			<ul>
				<li>
					<h1>Liên hệ</h1>
				</li>
				<li>

					<i class="fas fa-map-marker-alt"></i>
					Địa chỉ: số 17 Tạ Quang Bửu, Bách Khoa, Hai Bà Trưng, Hà Nội
				</li>
				<li>

					<i class="fas fa-phone" style="transform: rotate(90deg);"></i>
					Điện thoại: 0988888888

				</li>
				<li>
					<i class="fas fa-envelope"></i>
					Email: ductran0207.bkhn@gmail.com
				</li>
			</ul>
		</div>
		<div class="footer footer-mid">
			<form method="post" action="include/nhan_tin.php" onsubmit="alert('Cám ơn nha.')">
				<table>
					<tr>
						<td>
							<h1>Đăng kí nhận ưu đãi</h1>
						</td>
						<td></td>
					</tr>
					<tr>
						<td>
							<input class="inPut" name="name" placeholder="Họ và tên" pattern="^[a-zA-Z'-'\sáàảãạăâắằấầặẵẫậéèẻ ẽẹếềểễệóòỏõọôốồổỗộ ơớờởỡợíìỉĩịđùúủũụưứ� �ửữựÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠ ƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼ� ��ỀỂỄỆỈỊỌỎỐỒỔỖỘỚỜỞ ỠỢỤỨỪỬỮỰỲỴÝỶỸửữựỵ ỷỹ]*$" required title="Vui lòng nhập vào họ và tên.">
						</td> 
						<td></td>
					</tr>
					<tr>
						<td>
							<input class="inPut" name="email" placeholder="Email" required pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$" title="Vui lòng nhập đúng email của bạn!">
						</td>
						<td></td>
					</tr>
					<tr>
						<td style="text-align: center;">
							
							<button type="submit">Nhận ưu đãi</button>
						</td>
					</tr>
				</table>

			</form>
		</div>
		<div class="footer footer-right">
			<h1>Liên kết</h1>
			<div>
				<p>
					<a href="https://facebook.com" target="_blank">
						<i class="fab fa-facebook"></i>
						Facebook
					</a>
				</p>
				
				<p>
					<a href="https://youtube.com" target="_blank">
						<i class="fab fa-youtube"></i>
						Youtube
					</a>
				</p>
				<p>
					<a href="https://twitter.com" target="_blank">
						<i class="fab fa-twitter"></i>
						Twitter
					</a>
				</p>
			</div>
		</div>
	</div>
	<!-- Function alert cám ơn -->
	<script type="text/javascript">
		if(!valid) {
			alert('Please correct the errors in the form!');
			return false;
		}
		else {
			return confirm('Do you really want to submit the form?');
		}
	</script>