function $id(id){
	return document.getElementById(id);
}

function $name(name){
	return document.getElementsByName(name);
}

function showLightBox(){
	if($id("spanLogin").innerHTML == "登入"){
		$id("memId").value="";
		$id("memPsw").value="";
		$id("loginBox").style.display = "";
	}else{ //登出
        
        //回server端做登出(將session中的會員資料清掉) 
        var xhr = new XMLHttpRequest();
     
        xhr.onload = function (){
        	console.log('xhr.readyState : ' ,  xhr.readyState);
    		if(xhr.status == 200){
    			$id("memName").innerHTML ="";
    			$id("spanLogin").innerHTML = "登入";
    		}else{
    			alert(xhr.status);
    		}
        }        

        var url = "pages/logout_ajax.php";
        xhr.open("get",url,true);
        xhr.send(null);
	}
}

function showLightBox2(){
  if($id("spanLogin2").innerHTML == "登入"){
    $id("memId").value="";
    $id("memPsw").value="";
    $id("loginBox").style.display = "";
  }else{ //登出
        
        //回server端做登出(將session中的會員資料清掉) 
        var xhr = new XMLHttpRequest();
     
        xhr.onload = function (){
          console.log('xhr.readyState : ' ,  xhr.readyState);
        if(xhr.status == 200){
          $id("memName").innerHTML ="";
          $id("spanLogin2").innerHTML = "登入";
        }else{
          alert(xhr.status);
        }
        }        

        var url = "pages/logout_ajax.php";
        xhr.open("get",url,true);
        xhr.send(null);
  }
}

function closeLightBox(){
	$id("loginBox").style.display = "none";
}

function getAccount(){
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function (){
  	if( xhr.readyState == 4){
  		if( xhr.status == 200){
  			//..............
  			if( xhr.responseText == "error"){
  				alert("查無此帳密");
  			}else{
  				$id("memName").innerHTML = xhr.responseText;
  				closeLightBox();
  				$id("spanLogin").innerHTML = "登出";
  			}
  			
  		}else{
  			alert( xhr.status);
  		}
  	}
  }//onreadystatechange

  var url="pages/ajaxLogin.php";
  var obj={};
  obj.memId = $id("memId").value;
  obj.memPsw = $id("memPsw").value;
  var data_info = "loginInfo=" + JSON.stringify(obj);
  console.log( data_info);
  xhr.open("Post", url, true);
  xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  xhr.send( data_info );
}

window.onload = function (){
	$id("spanLogin").onclick = showLightBox;
  $id("spanLogin2").onclick = showLightBox2;
	$id("btnLoginCancel").onclick = closeLightBox;
	$id("btnLogin").onclick = getAccount;
	
}