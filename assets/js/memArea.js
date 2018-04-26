
function memArea(event, mempage) {
	 var i, tabcontent, tablinks;

	 tabcontent = document.getElementsByClassName("memArea-contain3");
	 for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    tablinks = document.getElementsByClassName("memArea-tab");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    document.getElementById(mempage).style.display = "block";
    event.currentTarget.className += " active";


}

//刪除留言 ajax

function deleteMsg(id,item){
    fetch('../common/memMsgDel.php?id=' + id, {credentials: 'include'} );
    $(item).closest('.memArea-box3').remove();

}   



//取消收藏ajax

function deleteCollect(shopId,item){
    fetch('../common/memcollectDel.php?shopId=' + shopId, {credentials: 'include'} );
    $(item).closest('.memArea-box3').remove();

}   

