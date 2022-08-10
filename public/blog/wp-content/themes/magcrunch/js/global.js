function isWebp() {
    function testWebP(callback) {
        let webP = new Image();
        webP.onload = webP.onerror = function() {
            callback(webP.height == 2);
        };
        webP.src = "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
    }
    testWebP(function(support) {
        let webPClass = support === true ? 'webp' : 'no-webp';
        document.documentElement.classList.add(webPClass);
    });
}
isWebp();

$(document).ready(function() {
    $(".drop-x").click(function () {
        $(".drop-m").toggleClass("active");
    });
    $(".drop-r").click(function () {
        $(".drop-els1").toggleClass("active");
    });
    $(".drop-r2").click(function () {
        $(".drop-els2").toggleClass("active");
    });
    $(".drop-x2").click(function () {
        $(".drop-m2").toggleClass("active");
    });
    $(".drop-r3").click(function () {
        $(".drop-els3").toggleClass("active");
    });
    $(".drop-x3").click(function () {
        $(".drop-m3").toggleClass("active");
    });
    $(".header-burger").click(function () {
        $(".header-burger").toggleClass("active");
        $(".body-wrp").toggleClass("no_overflow");
        $("#nav").toggleClass("show");
    })
})