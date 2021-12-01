function loadCarousel() {
    $('.owl-carousel').owlCarousel({
        items: 1,
        loop:false,
        //nav:true,
        autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 3500,
        autoplaySpeed: 1500,
        navSpeed: 1000,
        navText: ["anterior","próximo"],
        navElement: "div",
        dotsClass: "owl-dots carousel__dotsContainer",
        dotClass: "owl-dot carousel__dot"
    });
}

function imageLoadError(img) {
    var last_src = img.src;

    img.src = "./assets/couldnt-load-image.png";
    img.style.padding = "0px 28rem";
    
    // tenta recarregar a imagem novamente
    setTimeout(()=>{
        img.src = last_src;
        img.style.padding = "0";
    }, 5000);
}

function showHideNav() {
    document.querySelectorAll('.nav').forEach(element => {
        element.style.transition = "0.8s ease all";

        if (element.classList.contains('show')) {
            element.classList.remove('show');
        } else {
            element.classList.add('show');
        }
    });
}

$(document).ready(function() {
    loadCarousel();

    document.querySelectorAll('.button-toggle-menu').forEach(element => {
        element.addEventListener("click", showHideNav);
    });
    
});