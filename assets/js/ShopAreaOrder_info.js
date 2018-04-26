function ya(){

	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange=function(){
		if(xhr.readyState==4){
			if(xhr.status==200){
				document.getElementById("ShopAreaOrder-order").innerHTML=xhr.responseText;
			}else{
				alert(xhr.status);
			}

		}
	}
	var url = "../common/shopOrder.php?";
	xhr.open("Get",url,false);
	xhr.send(null);
}

