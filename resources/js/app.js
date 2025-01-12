import Swiper from "swiper/bundle";
import "swiper/css/bundle";

/*=============== SHOW MENU ===============*/
const showMenu = (toggleId, navId) => {
    const toggle = document.getElementById(toggleId),
        nav = document.getElementById(navId)

    toggle.addEventListener('click', () => {
        // Add show-menu class to nav menu
        nav.classList.toggle('show-menu')

        // Add show-icon to show and hide the menu icon
        toggle.classList.toggle('show-icon')
    })
}

showMenu('nav-toggle', 'nav-menu');

// document.body.style.overflow = 'hidden';
// Esperar a que toda la página se cargue
// window.addEventListener('load', function() {
//     // Ocultar el loader y remover overflow al body
//     document.body.style.opacity = '1';
//     const nav = document.querySelector('#navMenu');
//     const main = document.querySelector('#main');
//     nav.style.opacity = '1';
//     main.style.opacity = '1';
//     const loader = document.getElementById('loading');
//     setTimeout(() => { loader.style.display = 'none'; }, 500);
//     // Eliminar overflow: hidden del body para permitir el desplazamiento
//     setTimeout(() => { document.body.style.overflow = 'auto'; }, 500);
// });

/**------------------------------------------------------------------------
 **                     Links deslizar con efecto smooth
 *------------------------------------------------------------------------**/
 document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        const targetId = this.getAttribute('href');
        const targetElement = document.querySelector(targetId);

        window.scrollTo({
            top: targetElement.offsetTop - 180, // Retrocede 180px después de llegar
            behavior: 'smooth'
        });

        // Agregar clase active al enlace clicado
        this.classList.add('active');
    });
});

/**------------------------------------------------------------------------
 *                      Slider para
 *------------------------------------------------------------------------**/
 const sw = new Swiper(".swiper", {
	direction: "horizontal",
	lazy: true,
	loop: false,
    // autoHeight: false,
	slidesPerView: 1,
	keyboard: {
		enabled: true,
	},
	pagination: {
		el: ".swiper-pagination",
		// clickable: true,
        // type: 'fraction',
	},
	breakpoints: {
		320: {
			slidesPerView: 1,
			spaceBetween: 30,
            loop: true,
		},
		768: {
			slidesPerView: 1,
			spaceBetween: 30,
            loop: true,
		},
	}
});


