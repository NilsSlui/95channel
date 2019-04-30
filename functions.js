function showStartMenu() {
    var x = document.getElementById("startmenucontainer");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
function hideStartMenu(){
    var startmenu = document.getElementById("startmenucontainer");

        startmenu.style.display = "none";
}
function hideWindow(id){
    var x = document.getElementById(id);
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}