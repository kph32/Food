
	//檢查會員帳號是否已存在

		var checkId = document.getElementById('shopRegisteraccount');
		var checkIdDiv = document.getElementById("shopRegister-idDiv");
		checkId.addEventListener('change',function(){
			if(checkId.value.length < 2){
			alert("帳號不得為空值或小於2個字");
			}else{
				var xhr = new XMLHttpRequest();
				xhr.onload = function (){
					if( xhr.status == 200){
						json = JSON.parse(xhr.responseText);
						if(json.count == 1){
							checkIdDiv.innerHTML = "帳號已被使用";
						}
						else{
							checkIdDiv.innerHTML = "帳號可以使用";
						}						
					}else{
						alert(xhr.status);
					}
				}//onload

				var url = '../common/shopCheckId.php?member_id=' + checkId.value;
				xhr.open("get", url, false);
				xhr.send(null);

			}//checkId.value.length

		});

	//確認密碼是否相符

		var checkPsw = document.getElementById('username');
		var checkPsw2 = document.getElementById('shopRegisterPsw2');
		var checkPswDiv2 = document.getElementById("shopRegister-pswDiv2");
		checkPsw2.addEventListener('blur',function(){
		if(checkPsw2.value.length > 1){
			if(checkPsw.value == checkPsw2.value){
				checkPswDiv2.innerHTML = "密碼相符";
			}else{
				checkPswDiv2.innerHTML = "密碼不符";
			}
		}},false);
	//檢查攤商名稱是否重複
		var shopName = document.getElementById('shopName');
		var shopNameDiv2 = document.getElementById("shopName-Div2");
		shopName.addEventListener('change',function(){
			if(shopName.value.length < 2){
				alert("名稱不得為空值或小於2個字");
			}else{
				var xhr = new XMLHttpRequest();
				xhr.onload=function(){
					if(xhr.status==200){
						json=JSON.parse(xhr.responseText);
						if (json.count==1){
							shopNameDiv2.innerHTML = "帳號已被使用";
						}else{
							shopNameDiv2.innerHTML = "帳號可以使用";
						}//count//
					}else{
						alert(xhr.status);
					}//status//
				}//onload
				var url ='../common/shopCheckname.php?shopName='+ shopName.value;
				xhr.open("Get",url,true);
				xhr.send(null);	
				
			}//length

		},false);
	//檢查電話//
		var contect = document.getElementById('contect');
		var phoneDiv2 = document.getElementById("phone-Div2");
		contect.addEventListener('change',function(){
			if(contect.value.length < 8){
				alert("名稱不得為空值或小於8個字");
			}else{
				var xhr = new XMLHttpRequest();
				xhr.onload=function(){
					if(xhr.status==200){
						json=JSON.parse(xhr.responseText);
						if (json.count==1){
							phoneDiv2.innerHTML = "電話已被使用";
						}else{
							phoneDiv2.innerHTML = "電話可以使用";
						}//count//
					}else{
						alert(xhr.status);
					}//status//
				}//onload
				var url ='../common/shopCheckphone.php?phone='+ contect.value;
				xhr.open("Get",url,true);
				xhr.send(null);	
				
			}//length

		},false);

	//檢查信箱//
		var shopRegisteremail = document.getElementById('shopRegisteremail');
		var shopmailDiv = document.getElementById("shop-mailDiv");
		shopRegisteremail.addEventListener('change',function(){
			if(shopRegisteremail.value.length < 1){
				alert("名稱不得為空值或小於1個字");
			}else{
				var xhr = new XMLHttpRequest();
				xhr.onload=function(){
					if(xhr.status==200){
						json=JSON.parse(xhr.responseText);
						if (json.count==1){
							shopmailDiv.innerHTML = "信箱已被使用";
						}else{
							shopmailDiv.innerHTML = "信箱可以使用";
						}//count//
					}else{
						alert(xhr.status);
					}//status//
				}//onload
				var url ='../common/shopCheckMail.php?mail='+ shopRegisteremail.value;
				xhr.open("Get",url,true);
				xhr.send(null);	
				
			}//length

		},false);


		//最後驗證//
		// var	elForm,elFormHint,checkId,checkPsw,checkPsw2,shopName,contect,shopRegisteremail;
		//  	elForm = document.getElementById('ShopRegister-agree');
		//  	console.log(elForm);
		// 	elFormHint = document.getElementById('termsHint');
		// 	checkId = document.getElementById('shopRegisteraccount');
		// 	checkPsw = document.getElementById('username');
		// 	checkPsw2 = document.getElementById('shopRegisterPsw2');
		// 	shopName = document.getElementById('shopName');
		// 	contect = document.getElementById('contect');
		// 	shopRegisteremail = document.getElementById('shopRegisteremail');




		// function checkTerms(event){
		// 	alert('123');
		// 	if(checkId.value.length==0||checkPsw.value.length==0||checkPsw2.value.length==0||shopName.Value.length==0||contect.value.length==0||shopRegisteremail.value.length==0){
		// 		elFormHint.innerHTML="請確認各項欄位是否填寫";
		// 		event.preventDefault();
		// 	}

		// }


		// elForm.addEventListener('submit',checkTerms,false);	









			


