var menuNavbar = document.getElementById("menuNavbar");

menuNavbar.style.maxHeight = "0px";

function menucelular() {
    if (menuNavbar.style.maxHeight == "0px") {
        menuNavbar.style.maxHeight = "250px";
    } else {
        menuNavbar.style.maxHeight = "0px";
    }
}

var produtoImg = document.getElementById("produtoImg");
var produtoMiniatura = document.getElementsByClassName("produtoMiniatura");

produtoMiniatura[0].onclick = function () {
    produtoImg.src = produtoMiniatura[0].src;
}

produtoMiniatura[1].onclick = function () {
    produtoImg.src = produtoMiniatura[1].src;
}

produtoMiniatura[2].onclick = function () {
    produtoImg.src = produtoMiniatura[2].src;
}

produtoMiniatura[3].onclick = function () {
    produtoImg.src = produtoMiniatura[3].src;
}
