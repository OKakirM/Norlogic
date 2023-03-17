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

// PRODUTOS
var fullImage = document.querySelectorAll("#fullImage");
var currentImage = document.getElementById("preview_1");
var currentInfo = document.getElementById("info1");
var currentSelection = document.getElementById("drops_selection");
var currentArea = document.getElementById("drops");

function setImage(img) {
    if (currentSelection.id == "drops_selection") {
        fullImage[0].src = img.src;
    } else if (currentSelection.id == "dqpool_selection") {
        fullImage[1].src = img.src;
    } else if (currentSelection.id == "adspot_selection") {
        fullImage[2].src = img.src;
    }
    currentImage.parentElement.classList.replace(
        "img-selected",
        "img-deselected"
    );
    img.parentElement.classList.replace("img-deselected", "img-selected");
    currentImage = img;
}

function changeInfo(info) {
    for (var i = 0; i < 3; i++) {
        var preview = document.getElementById("preview_" + [i + 1]);
        var previewC = document.getElementById("preview_c" + [i + 1]);
        preview.src = info.getAttribute("preview_" + [i + 1]);
        previewC.src = info.getAttribute("preview_" + [i + 1]);
    }
    fullImage[0].src = info.getAttribute("preview_1");
    if (info.id == "info5" || info.id == "info6") {
        document
            .getElementById("info4")
            .classList.replace("color-redNor", "color-cinzaNor");
    }
    currentInfo.classList.replace("color-redNor", "color-cinzaNor");
    info.classList.replace("color-cinzaNor", "color-redNor");
    currentInfo = info;
}

function changeSelection(select) {
    var drops = document.getElementById("drops");
    var dqpool = document.getElementById("dqpool");
    var adspot = document.getElementById("spot");

    currentSelection.classList.replace("selected", "unselected");
    select.classList.replace("unselected", "selected");
    currentSelection = select;

    if (select.id == "drops_selection") {
        currentArea.classList.replace("d-lg-flex", "d-none");
        currentImage = document.getElementById("preview_1");
        drops.classList.replace("d-none", "d-lg-flex");
        currentArea = drops;
    } else if (select.id == "dqpool_selection") {
        currentArea.classList.replace("d-lg-flex", "d-none");
        currentImage = document.getElementById("preview_4");
        dqpool.classList.replace("d-none", "d-lg-flex");
        currentArea = dqpool;
    } else if (select.id == "adspot_selection") {
        currentArea.classList.replace("d-lg-flex", "d-none");
        currentImage = document.getElementById("preview_7");
        adspot.classList.replace("d-none", "d-lg-flex");
        currentArea = adspot;
    }
}
