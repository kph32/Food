var timerId,opacity;
function showOpacity(){
	opacity += 0.01;
	document.getElementById("ShopResultItem-PicImageBig").style.opacity = opacity;
	if( opacity > 1){
		clearInterval( timerId); 
	}
	console.log( opacity);
}

function showLarge(e){
  // console.log("yoooooo");
  //換圖
  document.getElementById("ShopResultItem-PicImageBig").src = e.target.src;
  //淡入
  opacity = 0;
  // alert("跨出第一步");
  document.getElementById("ShopResultItem-PicImageBig").style.opacity = opacity;
  clearInterval( timerId );
  timerId = setInterval(showOpacity, 10);
}

function ShopResultItem_showa1(){
  // alert("跨出第一步");
  // 為什麼寫javascript不行
  // opacity = #fa0;
  // var a1 = document.getElementById("ShopResultItem-a1");
  // a1.color = #fa0;
  $('#ShopResultItem-a1').css('color','#fa0');
  $('#ShopResultItem-a2').css('color','#fa0');
  $('#ShopResultItem-a3').css('color','#fa0');
  $('#ShopResultItem-a4').css('color','#fa0');
  $('#ShopResultItem-a5').css('color','#fa0');
var xhr = new XMLHttpRequest();
    xhr.onreadystatechange=function (){
      if( xhr.readyState == 4){
        if( xhr.status == 200 ){
          //modify here
          getpointa1(xhr.responseText); 
        }else{
            alert( xhr.status );
        } 
      } 
    } 
  // var url = "getshopResult03.php?shop_place=" + $_SESSION["SearchBox-place"]",shop_miniplace=" + $_SESSION["SearchBox-miniplace"];
  var url = "getpointa1.php";
  xhr.open("Get", url, true);
  xhr.send( null );
}
function getpointa1(jsonStr){
    
    var point = JSON.parse(jsonStr);
    // alert(point);
    // alert(shop.length);
    $_SESSION["point"] = point;
  
}
function ShopResultItem_showa2(){
  $('#ShopResultItem-a1').css('color','#BDB7B7');
  $('#ShopResultItem-a2').css('color','#fa0');
  $('#ShopResultItem-a3').css('color','#fa0');
  $('#ShopResultItem-a4').css('color','#fa0');
  $('#ShopResultItem-a5').css('color','#fa0');
var xhr = new XMLHttpRequest();
    xhr.onreadystatechange=function (){
      if( xhr.readyState == 4){
        if( xhr.status == 200 ){
          //modify here
          getpointa2(xhr.responseText); 
        }else{
            alert( xhr.status );
        } 
      } 
    } 
  // var url = "getshopResult03.php?shop_place=" + $_SESSION["SearchBox-place"]",shop_miniplace=" + $_SESSION["SearchBox-miniplace"];
  var url = "getpointa2.php";
  xhr.open("Get", url, true);
  xhr.send( null );
}
function getpointa2(jsonStr){
    
    var point = JSON.parse(jsonStr);
    // alert(point);
    // alert(shop.length);
    $_SESSION["point"] = point;
  
}
function ShopResultItem_showa3(){
  $('#ShopResultItem-a1').css('color','#BDB7B7');
  $('#ShopResultItem-a2').css('color','#BDB7B7');
  $('#ShopResultItem-a3').css('color','#fa0');
  $('#ShopResultItem-a4').css('color','#fa0');
  $('#ShopResultItem-a5').css('color','#fa0');
var xhr = new XMLHttpRequest();
    xhr.onreadystatechange=function (){
      if( xhr.readyState == 4){
        if( xhr.status == 200 ){
          //modify here
          getpointa3(xhr.responseText); 
        }else{
            alert( xhr.status );
        } 
      } 
    } 
  // var url = "getshopResult03.php?shop_place=" + $_SESSION["SearchBox-place"]",shop_miniplace=" + $_SESSION["SearchBox-miniplace"];
  var url = "getpointa3.php";
  xhr.open("Get", url, true);
  xhr.send( null );
}
function getpointa3(jsonStr){
    
    var point = JSON.parse(jsonStr);
    // alert(point);
    // alert(shop.length);
    $_SESSION["point"] = point;
  
}
function ShopResultItem_showa4(){
  $('#ShopResultItem-a1').css('color','#BDB7B7');
  $('#ShopResultItem-a2').css('color','#BDB7B7');
  $('#ShopResultItem-a3').css('color','#BDB7B7');
  $('#ShopResultItem-a4').css('color','#fa0');
  $('#ShopResultItem-a5').css('color','#fa0');
var xhr = new XMLHttpRequest();
    xhr.onreadystatechange=function (){
      if( xhr.readyState == 4){
        if( xhr.status == 200 ){
          //modify here
          getpointa4(xhr.responseText); 
        }else{
            alert( xhr.status );
        } 
      } 
    } 
  // var url = "getshopResult03.php?shop_place=" + $_SESSION["SearchBox-place"]",shop_miniplace=" + $_SESSION["SearchBox-miniplace"];
  var url = "getpointa4.php";
  xhr.open("Get", url, true);
  xhr.send( null );
}
function getpointa4(jsonStr){
    
    var point = JSON.parse(jsonStr);
    // alert(point);
    // alert(shop.length);
    $_SESSION["point"] = point;
  
}
function ShopResultItem_showa5(){
  $('#ShopResultItem-a1').css('color','#BDB7B7');
  $('#ShopResultItem-a2').css('color','#BDB7B7');
  $('#ShopResultItem-a3').css('color','#BDB7B7');
  $('#ShopResultItem-a4').css('color','#BDB7B7');
  $('#ShopResultItem-a5').css('color','#fa0');

  var xhr = new XMLHttpRequest();
    xhr.onreadystatechange=function (){
      if( xhr.readyState == 4){
        if( xhr.status == 200 ){
          //modify here
          getpointa5(xhr.responseText); 
        }else{
            alert( xhr.status );
        } 
      } 
    } 
  // var url = "getshopResult03.php?shop_place=" + $_SESSION["SearchBox-place"]",shop_miniplace=" + $_SESSION["SearchBox-miniplace"];
  var url = "getpointa5.php";
  xhr.open("Get", url, true);
  xhr.send( null );
}
function getpointa5(jsonStr){
    
    var point = JSON.parse(jsonStr);
    // alert(point);
    // alert(shop.length);
    $_SESSION["point"] = point;
  
}



// 後來用PHP
// function switchFavorite(){
//   var heart = document.getElementById("ShopResultItem-ImageToLove");
//   if( heart.title=="加入收藏"){
// 	heart.src = "../assets/images/shopresultitem/shopresultitem_love.png";
// 	heart.title="取消收藏"
//   }else{
// 	heart.src = "../assets/images/shopresultitem/shopresultitem_unlove.png";
// 	heart.title="加入收藏";
//   }
// }



