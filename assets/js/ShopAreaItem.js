function openItem(evt, item) {
    // Declare all variables
    var i, itemcontent, itemlinks;

    // Get all elements with class="itemcontent" and hide them
    itemcontent = document.getElementsByClassName("itemcontent");
    for (i = 0; i < itemcontent.length; i++) {
        itemcontent[i].style.display = "none";
    }

    // Get all elements with class="itemlinks" and remove the class "active"
    itemlinks = document.getElementsByClassName("itemlinks");
    for (i = 0; i < itemlinks.length; i++) {
        itemlinks[i].className = itemlinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(item).style.display = "block";
    evt.currentTarget.className += " active";
}