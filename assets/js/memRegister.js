
// window.onload = function() {

// 	//檢查會員帳號是否已存在
// 	document.getElementById('memRegisteraccount').onblur = function() {
// 		var checkId = document.getElementById('memRegisteraccount');
// 		var checkIdDiv = document.getElementById("memRegister-idDiv");
// 		if(checkId.value.length > 1){
// 			if(checkId.value.length < 8){
// 			alert("帳號不得為空值或小於8個字");
// 			}else{
				
// 				fetch('../common/memCheckId.php?memId=' + checkId.value).then(function(response){
// 					return response.json();
// 					console.log(response.json());
// 				}).then(function(json){
// 					if(json.count == 1){
// 						checkIdDiv.innerHTML = "帳號已被使用";
// 					}
// 					else{
// 						checkIdDiv.innerHTML = "帳號可以使用";
// 					}
// 				});
// 			}
// 		}
		
		
// 	};

// 	//檢查密碼是否有8個英數 && 確認密碼是否相符
// 	document.getElementById('memRegisterPsw').onblur = function() {
// 		var checkPsw = document.getElementById('memRegisterPsw');
// 		var checkPsw2 = document.getElementById('memRegisterPsw2');
// 		var checkPswDiv = document.getElementById("memRegister-pswDiv");
// 		var checkPswDiv2 = document.getElementById("memRegister-pswDiv2");
// 		if(checkPsw.value.length > 1){
// 			if(checkPsw.value.length < 8){
// 				checkPswDiv.innerHTML = "密碼不得小於8個數字";

// 			}else{
// 				checkPswDiv.innerHTML = "";
// 			}
// 		}
		
		
// 	}
// 	document.getElementById('memRegisterPsw2').onblur = function() {
// 		var checkPsw = document.getElementById('memRegisterPsw');
// 		var checkPsw2 = document.getElementById('memRegisterPsw2');
// 		var checkPswDiv2 = document.getElementById("memRegister-pswDiv2");
// 		if(checkPsw2.value.length > 1){
// 			if(checkPsw.value == checkPsw2.value){
// 				checkPswDiv2.innerHTML = "密碼相符讚讚";
// 			}else{
// 				checkPswDiv2.innerHTML = "密碼不相符請重新輸入";
// 			}
// 		}
		
// 	}



// 	//檢查手機是否已被使用過
// 	var checkPhone = document.getElementById('memRegisterphone');
// 	checkPhone.onblur = function(){
// 		if(checkPhone.value.length < 10){
// 			alert("此電話不存在");
// 		}else{
// 			fetch('../common/memCheckPhone.php?phone=' + checkPhone.value).then(function(response){
// 			return response.json();
// 		}).then(function(json){
// 			// console.log(json.count);
// 			var checkPhoneDiv = document.getElementById('memRegister-phoneDiv');

// 			if(json.count == 1){
// 				checkPhoneDiv.innerHTML = "此電話已被使用";
// 			}else{
// 				checkPhoneDiv.innerHTML = "此電話可以使用";
// 			}
// 		})
// 		}
		
// 	};

// 	//檢查電子信箱是否已被使用過
// 	var checkMail = document.getElementById('memRegisteremail');
// 	checkMail.onblur = function(){
// 		fetch('../common/memCheckMail.php?mail=' + checkMail.value).then(function(response){
// 			return response.json();	
// 		}).then(function(json){
// 			var checkMailDiv = document.getElementById('memRegister-mailDiv');
// 			if(json.count == 1){
// 				checkMailDiv.innerHTML = "此電子信箱已被使用";
// 			}else{
// 				checkMailDiv.innerHTML = "此電子信箱可以使用";
// 			}
// 		})
// 	}



// 	document.getElementById('memRegistersend').onclick=function(){ 
//             if( document.getElementById('memRegisteraccount').value ==="" || 
//                 document.getElementById('memRegisterPsw').value ==="" || 
//                 document.getElementById('memRegisterPsw2').value ==="" || 
//                 document.getElementById('memRegistername').value ==="" || 
//                 document.getElementById('memRegisterphone').value ==="" || 
//                 document.getElementById('memRegisteremail').value ==="" || 
//                 document.getElementById('memRegisterarea').value ==="" 
//                 ){
//             	return false; 
//             }else{
//             	memRegistersend.submit();
//             }
            
//         }








// };