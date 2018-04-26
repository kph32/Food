
  	// var placetag = document.getElementById("SearchBox-place").options[0].value;
  	// console.log(placetag);

var placetag = document.getElementById("SearchBox-place");
// console.log(placetag);

placetag.onchange=function(){ 
	// alert("要變了噢");
	var chosenoption=this.options[this.selectedIndex].innerHTML; 
	// console.log(chosenoption);
	// https://blog.wu-boy.com/2011/08/javascript-reference-select-and-option-objects-%E7%94%A8%E6%B3%95%E4%BB%8B%E7%B4%B9/
	var miniplacetag = document.getElementById("SearchBox-miniplace");
	if(chosenoption=="新北市"){
		miniplacetag.options[0].innerHTML="三重區";
		miniplacetag.options[1].innerHTML="板橋區";
		miniplacetag.options[2].innerHTML="中和區";
		miniplacetag.options[3].innerHTML="樹林區";
		miniplacetag.options[4].innerHTML="淡水區";
	}else if(chosenoption=="桃園市"){
		miniplacetag.options[0].innerHTML="桃園區";
		miniplacetag.options[1].innerHTML="龜山區";
		miniplacetag.options[2].innerHTML="八德區";
		miniplacetag.options[3].innerHTML="中壢區";
		miniplacetag.options[4].innerHTML="蘆竹區";
	}else if(chosenoption=="台中市"){
		miniplacetag.options[0].innerHTML="中區";
		miniplacetag.options[1].innerHTML="東區";
		miniplacetag.options[2].innerHTML="西區";
		miniplacetag.options[3].innerHTML="南區";
		miniplacetag.options[4].innerHTML="北區";
	}else if(chosenoption=="台北市"){
		miniplacetag.options[0].innerHTML="信義區";
		miniplacetag.options[1].innerHTML="文山區";
		miniplacetag.options[2].innerHTML="中山區";
		miniplacetag.options[3].innerHTML="北投區";
		miniplacetag.options[4].innerHTML="南港區";
	}else{
		miniplacetag.options[0].innerHTML="三星鄉";
		miniplacetag.options[1].innerHTML="礁溪鄉";
		miniplacetag.options[2].innerHTML="宜蘭市";
		miniplacetag.options[3].innerHTML="蘇澳鎮";
		miniplacetag.options[4].innerHTML="頭城鎮";
	}
}
