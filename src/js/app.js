document.addEventListener('DOMContentLoaded', function() {
  darkMode()
eventListeners();
});

function darkMode() {
  const btnDarkMode = document.querySelector('.dark-mode-boton');
  btnDarkMode.addEventListener('click', function () {
    document.body.classList.toggle('dark-mode');
  });
}

function eventListeners () {
   const mobileMenu = document.querySelector('.mobile-menu');

   mobileMenu.addEventListener('click', navegacionResponsiva)
}

function navegacionResponsiva() {
  const navegacion =  document.querySelector('.navegacion')
//   if(navegacion.classList.contains('mostrar')) {
//     navegacion.classList.remove('mostrar');
// }
// else {
//     navegacion.classList.add('mostrar') ;
// }
navegacion.classList.toggle('mostrar')
}