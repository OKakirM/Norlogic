// NAVBAR
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

// POPUP
var popup = document.getElementById("popup");

function closePopup() {
    popup.classList.replace("d-flex", "d-none");
}

function openPopup(info) {
    popup.classList.replace("d-none", "d-flex");
    var versions = document.getElementById("versions");
    var comentario = document.getElementById("comentario");
    var title = document.getElementById("titulo");
    var fullImage = document.getElementById("full-image");
    // var detalhe = document.getElementById("detalhe");

    if (info.getAttribute("drops") == "true") {
        versions.classList.add("d-lg-block");
    } else {
        versions.classList.remove("d-lg-block");
    }

    for (var i = 0; i < 3; i++) {
        var preview = document.getElementById("preview_" + [i + 1]);
        preview.src = info.getAttribute("preview_" + [i + 1]);
        if (i == 0) {
            fullImage.src = info.getAttribute("preview_" + [i + 1]);
        }
    }
    comentario.innerHTML = info.getAttribute("comment");
    title.innerHTML = info.getAttribute("title");
}

var current_version = document.getElementById("version1");

function changeInfo(info) {
    var comentario = document.getElementById("comentario");
    var title = document.getElementById("titulo");
    var fullImage = document.getElementById("full-image");
    // var detalhe = document.getElementById("detalhe");

    if (info.id != current_version.id) {
        info.classList.replace("color-g", "color-w1");
        current_version.classList.replace("color-w1", "color-g");
        current_version = info;
    }

    for (var i = 0; i < 3; i++) {
        var preview = document.getElementById("preview_" + [i + 1]);
        preview.src = info.getAttribute("preview_" + [i + 1]);
        if (i == 0) {
            fullImage.src = info.getAttribute("preview_" + [i + 1]);
        }
    }
    comentario.innerHTML = info.getAttribute("comment");
    title.innerHTML = info.getAttribute("title");
}

function setImage(img) {
    var fullImage = document.getElementById("full-image");
    fullImage.src = img.src;
}

window.addEventListener("click", ({ target }) => {
    if (target.id == "popup") {
        closePopup();
    }
});

// var selectionArea = document.getElementById("selection");
// var current = document.getElementById("hardware-selection");

// function changeSelection(selection) {
//     var hardware = document.getElementById("hardware");
//     var software = document.getElementById("software");

//     if (selection.id != current.id) {
//         selection.classList.add("selection-detalhe");
//         current.classList.remove("selection-detalhe");
//         current.classList.replace("focus", "unfocus");
//         current = selection;
//         if (current.id == "hardware-selection") {
//             software.classList.replace("d-lg-flex", "d-none");
//             hardware.classList.replace("d-none", "d-lg-flex");
//         } else if (current.id == "software-selection") {
//             hardware.classList.replace("d-lg-flex", "d-none");
//             software.classList.replace("d-none", "d-lg-flex");
//         }
//     }
// }

// PRODUTOS SELECTION
var current_selection = document.getElementById("hardware-selection1");

function changeSelection(selection) {
    var hardware = document.getElementById("hardware1");
    var software = document.getElementById("software1");

    if (selection.id != current_selection.id) {
        selection.classList.add("selection-detalhe");
        current_selection.classList.remove("selection-detalhe");
        current_selection.classList.replace("focus", "unfocus");
        current_selection = selection;
        if (current_selection.id == "hardware-selection1") {
            software.classList.replace("focus", "unfocus");
            hardware.classList.replace("unfocus", "focus");
        } else if (current_selection.id == "software-selection1") {
            hardware.classList.replace("focus", "unfocus");
            software.classList.replace("unfocus", "focus");
        }
    }
}
