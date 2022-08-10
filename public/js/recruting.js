const selectFile = document.getElementById('contact-form-file');
selectFile.addEventListener('change', (event) => {
    if (selectFile.files[0].size > 2200000){
       alert('The file is too large, please upload a smaller file!');
       selectFile.value = "";
    } else {
        document.querySelector('.contact-form__file-label').classList.add('active');
    }
});

document.querySelector('.header-burger').addEventListener('click', () => {
    this.classList.toggle('active')
    document.querySelector('.body-wrp').classList.toggle('no_overflow')
    document.getElementById('nav').classList.toggle('show')
})

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
