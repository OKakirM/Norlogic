const li = document.querySelectorAll("#nav-items");
const section = document.querySelectorAll("section");

function activeMenu() {
    let len = section.length;
    while (--len && window.scrollY + 300 < section[len].offsetTop) {}
    li.forEach((ltx) => ltx.classList.remove("nav-active"));
    li[len].classList.add("nav-active");
}

activeMenu();
window.addEventListener("scroll", activeMenu);

var popup = document.getElementById("popup");

function closePopup() {
    popup.classList.replace("d-flex", "d-none");
}

function openPopup(info) {
    popup.classList.replace("d-none", "d-flex");
    var comentario = document.getElementById("comentario");
    var title = document.getElementById("titulo");
    var fullImage = document.getElementById("full-image");
    // var detalhe = document.getElementById("detalhe");

    for (var i = 0; i < 3; i++) {
        var preview = document.getElementById("preview_" + [i + 1]);
        preview.src = info.firstElementChild.getAttribute("preview_" + [i + 1]);
        console.log(preview);
    }
    fullImage.src = info.children[2].src;
    comentario.innerHTML = info.firstElementChild.getAttribute("comment");
    title.innerHTML = info.firstElementChild.getAttribute("title");
}

function setImage(img) {
    var last = img;
    console.log(last);
    var fullImage = document.getElementById("full-image");
    fullImage.src = img.src;
}

var selectionArea = document.getElementById("selection");
var current = document.getElementById("hardware-selection");

function changeSelection(selection) {
    var hardware = document.getElementById("hardware");
    var software = document.getElementById("software");

    if (selection.id != current.id) {
        selection.classList.add("selection-detalhe");
        current.classList.remove("selection-detalhe");
        current = selection;
        if (current.id == "hardware-selection") {
            software.classList.replace("d-lg-flex", "d-none");
            hardware.classList.replace("d-none", "d-lg-flex");
        } else if (current.id == "software-selection") {
            hardware.classList.replace("d-lg-flex", "d-none");
            software.classList.replace("d-none", "d-lg-flex");
        }
    }
}
