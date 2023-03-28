// NAVBAR
const li = document.querySelectorAll("#nav-items");
const section = document.querySelectorAll("section");

function activeMenu() {
    if (window.location.pathname == "/academia") {
        li[4].classList.add("nav-active");
        li[0].classList.remove("nav-active");
    } else {
        let len = section.length;
        while (--len && window.scrollY + 300 < section[len].offsetTop) {}
        li.forEach((ltx) => ltx.classList.remove("nav-active"));
        li[len].classList.add("nav-active");
    }
}

activeMenu();
window.addEventListener("scroll", activeMenu);

// Top Button
let calcScrollValue = () => {
    let scrollProgress = document.getElementById("progress");
    let progressStyle = document.getElementById("progressStyle");
    let pos = document.documentElement.scrollTop;
    let calcHeight =
        document.documentElement.scrollHeight -
        document.documentElement.clientHeight;
    let scrollValue = Math.round((pos * 100) / calcHeight);
    if (pos > 100) {
        scrollProgress.style.display = "grid";
    } else {
        scrollProgress.style.display = "none";
    }
    scrollProgress.addEventListener("click", () => {
        document.documentElement.scrollTop = 0;
    });
    if (scrollValue == 100) {
        progressStyle.style.backgroundColor = "#cc0033";
    } else {
        progressStyle.style.backgroundColor = "#333";
    }
    scrollProgress.style.background = `conic-gradient(#cc0033 ${scrollValue}%, #333333 ${scrollValue}%)`;
};
window.onscroll = calcScrollValue;
window.onload = calcScrollValue;

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
            .classList.replace("color-redNor", "color-w1");
    }
    currentInfo.classList.replace("color-redNor", "color-w1");
    info.classList.replace("color-w1", "color-redNor");
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

        drops.classList.replace("d-none", "d-lg-flex");
        currentArea = drops;

        currentImage.parentElement.classList.replace(
            "img-selected",
            "img-deselected"
        );
        currentImage = document.getElementById("preview_1");
    } else if (select.id == "dqpool_selection") {
        currentArea.classList.replace("d-lg-flex", "d-none");
        dqpool.classList.replace("d-none", "d-lg-flex");
        currentArea = dqpool;

        currentImage.parentElement.classList.replace(
            "img-selected",
            "img-deselected"
        );
        currentImage = document.getElementById("preview_4");
    } else if (select.id == "adspot_selection") {
        currentArea.classList.replace("d-lg-flex", "d-none");
        adspot.classList.replace("d-none", "d-lg-flex");
        currentArea = adspot;

        currentImage.parentElement.classList.replace(
            "img-selected",
            "img-deselected"
        );
        currentImage = document.getElementById("preview_7");
    }
}

// Soluções
var currentService;
if (document.documentElement.offsetWidth < 700) {
    var serviceClass = document.querySelectorAll(".unfocus");
    var rowSettingsService = document.getElementById("rowSettingsService");
    for (i = 0; i < serviceClass.length; i++) {
        serviceClass[i].classList.replace("unfocus", "focus");
        serviceClass[i].style.cursor = "";
    }
    rowSettingsService.style.gap = "30px";
}

function setService(service) {
    if (document.documentElement.offsetWidth > 700) {
        service.classList.replace("unfocus", "focus");
        if (currentService && currentService != service) {
            currentService.classList.replace("focus", "unfocus");
        }
        currentService = service;
    }
}

// Tradução
var pt = document.querySelectorAll("#pt");
var en = document.querySelectorAll("#en");

function changeLanguage() {
    for (i = 0; i < document.cookie.split(";").length; i++) {
        if (document.cookie.split(";")[i] == "language=pt") {
            for (e = 0; e < 2; e++) {
                pt[e].classList.replace("color-w3", "color-redNor");
                en[e].classList.replace("color-redNor", "color-w3");
            }
        }

        if (document.cookie.split(";")[i] == "language=en") {
            for (e = 0; e < 2; e++) {
                en[e].classList.replace("color-w3", "color-redNor");
                pt[e].classList.replace("color-redNor", "color-w3");
            }
        }
    }
}
changeLanguage();
