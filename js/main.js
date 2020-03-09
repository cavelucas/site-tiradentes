// Expandir Menu
let menuCabecalho = document.querySelector('header nav');
let botaoMenuCabecalho = document.querySelector('img.icone-menu');

botaoMenuCabecalho.addEventListener("click", mostrarMenu);

function mostrarMenu(){
    menuCabecalho.classList.toggle('menu-cabecalho--show');
}

// Aumentar e reduzir cabeçalho
let corpoDoSite = document.querySelector('body');
let cabecalho = document.querySelector('header');
let logoCabecalho = document.querySelector('img.logo-cabecalho');

    // Reduzir com o scroll
corpoDoSite.addEventListener("wheel", reduzCabecalho);

function reduzCabecalho(){
    cabecalho.classList.add("small");
}

    // Aumentar com o mouseover
cabecalho.addEventListener("mouseover", aumentaMenu);

function aumentaMenu(){
    cabecalho.classList.remove("small");
}

    // Mostrar Landing
// let botaoLanding1 = document.querySelector('#tela1__texto button');
// let botaoLanding2 = document.querySelector('button.abre-landing2');
// let botaoFecharLanding = document.querySelector(".fechar-landing");
// let landingPage = document.querySelector('#landing');

// botaoLanding1.addEventListener("click", mostrarLanding);
// botaoLanding2.addEventListener("click", mostrarLanding);
// botaoFecharLanding.addEventListener("click", fecharLanding);

// function mostrarLanding(){
//     landingPage.style.display = "block";
// }
// function fecharLanding(){
//     landingPage.style.display = "none";
// }

// jQuery
$(document).ready(function(){
    // Slide Fabebook
    $('.fb-slick').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 2,
        slidesToScroll: 2,
        responsive: [
            {
            breakpoint: 1024,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: true,
                dots: true
            }
            },
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
            },
            {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                arrows: false
            }
        }]
    });
});

