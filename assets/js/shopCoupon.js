function $id(id){
	return document.getElementById(id);
}
function checkCoupon() {
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange=function(){
		if(xhr.readyState==4){
			if(xhr.status==200){
				//showCoupon(xhr.responseText);
				alert("成功參加本活動");
			}else{
				alert(xhr.status);
			}
		}
	}

	if($id("ShopAreaPromo_partYes").checked){
		var coupon = 1;
	}else{
		var coupon = 0;
	}

	//coupon=$id("ShopAreaPromo_partYes").checked?1:0;---三元//

	var url = "../common/coupon.php?coupon="+coupon;
	// alert( url );
	xhr.open("Get", url, true);
	xhr.send( null );

}

// function showCoupon(jsonStr){

// }
window.addEventListener("load", setCoupnClick, false);
function setCoupnClick(){
	var ShopAreaPromo_partYes = $id("ShopAreaPromo_partYes");
	var ShopAreaPromo_partNo = $id("ShopAreaPromo_partNo");
	ShopAreaPromo_partYes.addEventListener('click',checkCoupon,false);
	ShopAreaPromo_partNo.addEventListener('click',checkCoupon,false);	
}
