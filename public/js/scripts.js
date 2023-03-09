var list_pc = document.getElementById("list-pc");
var items = list_pc.getElementsByClassName("color-w3");

for (var i = 0; i < items.length; i++) {
    items[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("nav-active");
        current[0].className = current[0].className.replace("nav-active", "");
        this.className += " nav-active";
    });
}
