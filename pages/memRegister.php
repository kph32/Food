<?php 
	// include '../common/common.php';
	include '../views/header.php';
?>
	<div class="memRegister">
		<div class="memRegister-container">
			<div class="memRegister-container">
				<img src="../assets/images/Searchbox-pon.png">
				<div class="memRegister-title">會員註冊</div>
				<div class="memRegister-input">
					<label for="memRegisteraccount">帳號：</label>
					<input type="text" name="memaccount" id="memRegisteraccount">
				</div>
				<div class="memRegister-input">
					<label for="memRegisterPsw">密碼：</label>
					<input type="text" name="mempsw" id="memRegisterPsw">
				</div>
				<div class="memRegister-input">
					<label for="memRegisterPsw2">確認密碼：</label>
					<input type="text" name="mempsw2" id="memRegisterPsw2">
				</div>
				<div class="memRegister-input">
					<label for="memRegisterNickname">暱稱：</label>
					<input type="text" name="memNickname" id="memRegisterNickname">
				</div>
				<div class="memRegister-input">
					<label for="memRegisterNickname">暱稱：</label>
					<input type="text" name="memNickname" id="memRegisterNickname">
				</div>
				<div class="memRegister-input">
					<label for="memRegistername">姓名：</label>
					<input type="text" name="memname" id="memRegistername">
				</div>
				<div class="memRegister-input">
					<label for="memRegisterphone">電話：</label>
					<input type="text" name="memphone" id="memRegisterphone">
				</div>
				<div class="memRegister-input">
					<label for="memRegisteremail">電子信箱：</label>
					<input type="text" name="mememail" id="memRegisteremail">
				</div>
				<div class="memRegister-input">
					<label for="memRegisterarea">所在地區：</label>
					<input type="text" name="memarea" id="memRegisterarea">
				</div>
				<div class="memRegister-input2">
					<input type="submit" name="memsend" id="memRegistersend" value="註冊">
				</div>
			</div>
		</div>
	</div>

<?php 
	include '../views/footer.php';
?>