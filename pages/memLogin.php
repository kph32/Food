<?php 
	// include '../common/common.php';
	include '../views/header.php';
?>
	<div class="memLogin">
		<div class="memLogin-container">
			<div class="memLogin-contain">
				<img src="../assets/images/Searchbox-pon.png">
				<div class="memLogin-account">
					帳號： <input type="text" name="account">
				</div>
				<div class="memLogin-psw">
					密碼： <input type="text" name="psw">
				</div>
				<div class="memLogin-submit">
					<input type="submit" name="submit" value="登入">
				</div>
			</div>
		</div>
	</div>


<?php 
	include '../views/footer.php';
?>