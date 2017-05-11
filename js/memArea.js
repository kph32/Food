
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


