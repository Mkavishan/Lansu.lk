// WHEN CLICK A DISTRICT BUTTON, TO HIDE THE POPUP WINDOW
$(document).ready(function(){
    $("#amparaId").click(function(){
        $("#myModal1").modal("hide");
    });
});

//ITEM SEARCH BY DISTRICT AJAX CODE
function showItem(str) {
    if (str == "") {
        document.getElementById("item_area").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("item_area").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","items_search_ajax.php?district="+str,true);
        xmlhttp.send();
    }
}
//ITEM SEARCH BY ITEM AJAX CODE
function showItem2(str) {
    if (str == "") {
        document.getElementById("item_area").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("item_area").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","items_search_ajax.php?district="+str,true);
        xmlhttp.send();
    }
}



