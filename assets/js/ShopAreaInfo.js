function $id(id){
	return document.getElementById(id);
}

function $name(name){
	return document.getElementsByName(name);
}
function infoUpdate(){
  alert("更新完成");
  var xhr = new XMLHttpRequest();
  var url="../pages/upInfo.php";
  var obj={};
  // obj.memId = $id("memId").value;
  obj.shopPass = $id("shopPass").value;
  obj.shopMail = $id("shopMail").value;
  obj.shop_phone = $id("shop_phone").value;
  var data_info = "loginInfo=" + JSON.stringify(obj);
  console.log( data_info);
  xhr.onload = function(){
    console.log( xhr.responseText );
  }
  xhr.open("Post", url, true);
  xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  xhr.send( data_info );

}

function doFirst(){
	var aghe = document.getElementById('aghe');	//先跟HTML畫面產生關聯//再建事件聆聽的功能
	
	aghe.addEventListener('click',infoUpdate,false);
	
}


window.addEventListener('load',doFirst,false);
//window.onload = doFirst;