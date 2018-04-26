<?php 
	// include '../common/memLoginf.php';
	include '../views/header.php';
    include '../common/Navbar.php';
    include '../common/Searchbox.php';

?>
	<div class="memLogin">
		<div class="memLogin-container">
			<div class="memLogin-contain">
				<img src="../assets/images/Searchbox-pon.png">
				<!-- 登入開始 -->
				<form method="post" action="../common/memLoginf.php">
					<div class="memLogin-account">
						帳號： <input type="text" name="memId" size="18" maxlength="15">
					</div>
					<div class="memLogin-psw">
						密碼： <input type="password" name="memPsw" size="18" maxlength="15">
					</div>
					<div class="memLogin-submit">
						<input type="submit" name="memSubmit" value="登入">
					</div>
				</form>
				<!-- 登入結束 -->
			</div>
		</div>
	</div>


<?php 
	include '../views/footer.php';
?>