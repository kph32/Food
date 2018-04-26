function shopArea(event, shoppage) {
    var i, tabcontent, tablinks;

    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    document.getElementById(shoppage).style.display = "block";
    event.currentTarget.className += " active";
}

var shopplacetag = document.getElementById("ShopAreaShopInfo-city");
// console.log(shopplacetag);

shopplacetag.onchange=function(){ 
    // alert("要變了噢");
    var chosenshopoption=this.options[this.selectedIndex].innerHTML; 
    // console.log(chosenshopoption);
    // https://blog.wu-boy.com/2011/08/javascript-reference-select-and-option-objects-%E7%94%A8%E6%B3%95%E4%BB%8B%E7%B4%B9/
    var shopmini = document.getElementById("ShopAreaShopInfo-area");
    if(chosenshopoption=="新北市"){
        shopmini.options[0].innerHTML="三重區";
        shopmini.options[1].innerHTML="板橋區";
        shopmini.options[2].innerHTML="中和區";
        shopmini.options[3].innerHTML="樹林區";
        shopmini.options[4].innerHTML="淡水區";
    }else if(chosenshopoption=="桃園市"){
        shopmini.options[0].innerHTML="桃園區";
        shopmini.options[1].innerHTML="龜山區";
        shopmini.options[2].innerHTML="八德區";
        shopmini.options[3].innerHTML="中壢區";
        shopmini.options[4].innerHTML="蘆竹區";
    }else if(chosenshopoption=="台中市"){
        shopmini.options[0].innerHTML="中區";
        shopmini.options[1].innerHTML="東區";
        shopmini.options[2].innerHTML="西區";
        shopmini.options[3].innerHTML="南區";
        shopmini.options[4].innerHTML="北區";
    }else if(chosenshopoption=="台北市"){
        shopmini.options[0].innerHTML="信義區";
        shopmini.options[1].innerHTML="文山區";
        shopmini.options[2].innerHTML="中山區";
        shopmini.options[3].innerHTML="北投區";
        shopmini.options[4].innerHTML="南港區";
    }else{
        shopmini.options[0].innerHTML="三星鄉";
        shopmini.options[1].innerHTML="礁溪鄉";
        shopmini.options[2].innerHTML="宜蘭市";
        shopmini.options[3].innerHTML="蘇澳鎮";
        shopmini.options[4].innerHTML="頭城鎮";
    }
}