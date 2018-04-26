function $id(id){
  return document.getElementById(id);
}

function $name(name){
  return document.getElementsByName(name);
}
function YA(){
  var Product_modification = document.getElementById('Product_modification'); //先跟HTML畫面產生關聯//再建事件聆聽的功能
  var Product_modification2 = document.getElementById('Product_modification2');
  var Product_modification3 = document.getElementById('Product_modification3');
  var Product_modification4 = document.getElementById('Product_modification4');
  var Product_modification5 = document.getElementById('Product_modification5');
  Product_modification.addEventListener('click',ProductModification,false);
  Product_modification2.addEventListener('click',ProductModification2,false);
  Product_modification3.addEventListener('click',ProductModification3,false);
  Product_modification4.addEventListener('click',ProductModification4,false);
  Product_modification5.addEventListener('click',ProductModification5,false);
}
function ProductModification(){
  var xhr = new XMLHttpRequest();
  xhr.onload = function (){
    console.log(xhr.responseText);
  } 
  var url="../pages/ProductModification.php";
  var obj={};
  obj.memId = $id("memId").value;
  obj.proName = $id("proName").value;
  obj.proPic = $id("proPic").value;
  obj.proSpec = $id("proSpec").value;
  obj.proInfo = $id("proInfo").value;
  zzzzz = $id("theFile").value;
  obj.proImg = zzzzz.substr(12); 
  console.log(zzzzz);
  console.log(obj.proImg);



  var data_info = "loginInfo=" + JSON.stringify(obj);
  console.log( data_info);
  xhr.open("Post", url, true);
  xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  xhr.send( data_info );

  // alert("好煩阿,阿~~~~~~~~~~~~~~~~");
}
function ProductModification2(){
  var xhr = new XMLHttpRequest();
  xhr.onload = function (){
    console.log(xhr.responseText);
  } 
  var url="../pages/ProductModification2.php";
  var obj={};
  obj.memId = $id("memId").value;
  obj.proName = $id("proName2").value;
  obj.proPic = $id("proPic2").value;
  obj.proSpec = $id("proSpec2").value;
  obj.proInfo = $id("proInfo2").value;
  zzzzz = $id("theFile2").value;
  obj.proImg = zzzzz.substr(12); 



  var data_info = "loginInfo=" + JSON.stringify(obj);
  console.log( data_info);
  xhr.open("Post", url, true);
  xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  xhr.send( data_info );

  // alert("e04e04,阿~~~~~~~~~~~~~~~~");
}
function ProductModification3(){
  var xhr = new XMLHttpRequest();
  xhr.onload = function (){
    console.log(xhr.responseText);
  } 
  var url="../pages/ProductModification3.php";
  var obj={};
  obj.memId = $id("memId").value;
  obj.proName = $id("proName3").value;
  obj.proPic = $id("proPic3").value;
  obj.proSpec = $id("proSpec3").value;
  obj.proInfo = $id("proInfo3").value;
  zzzzz = $id("theFile3").value;
  obj.proImg = zzzzz.substr(12); 



  var data_info = "loginInfo=" + JSON.stringify(obj);
  console.log( data_info);
  xhr.open("Post", url, true);
  xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  xhr.send( data_info );

  // alert("加油吧!,阿~~~~~~~~~~~~~~~~");
}
function ProductModification4(){
  var xhr = new XMLHttpRequest();
  xhr.onload = function (){
    console.log(xhr.responseText);
  } 
  var url="../pages/ProductModification4.php";
  var obj={};
  obj.memId = $id("memId").value;
  obj.proName = $id("proName4").value;
  obj.proPic = $id("proPic4").value;
  obj.proSpec = $id("proSpec4").value;
  obj.proInfo = $id("proInfo4").value;
  zzzzz = $id("theFile4").value;
  obj.proImg = zzzzz.substr(12); 



  var data_info = "loginInfo=" + JSON.stringify(obj);
  console.log( data_info);
  xhr.open("Post", url, true);
  xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  xhr.send( data_info );

  // alert("差一點了!,阿~~~~~~~~~~~~~~~~");
}
function ProductModification5(){
  var xhr = new XMLHttpRequest();
  xhr.onload = function (){
    console.log(xhr.responseText);
  } 
  var url="../pages/ProductModification5.php";
  var obj={};
  obj.memId = $id("memId").value;
  obj.proName = $id("proName5").value;
  obj.proPic = $id("proPic5").value;
  obj.proSpec = $id("proSpec5").value;
  obj.proInfo = $id("proInfo5").value;
  zzzzz = $id("theFile5").value;
  obj.proImg = zzzzz.substr(12); 



  var data_info = "loginInfo=" + JSON.stringify(obj);
  console.log( data_info);
  xhr.open("Post", url, true);
  xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  xhr.send( data_info );

  // alert("終於改好了,阿~~~~~~~~~~~~~~~~");
}

window.addEventListener('load',YA,false);