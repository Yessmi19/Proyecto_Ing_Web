
const nombreUsuario = document.querySelector('.nombre-usuario');
const imagenUsuario = document.querySelector('.imagen-usuario');
const dropDownUsuario = document.querySelector('.dropdown-usuario');
const dropdownMenu = document.querySelector('.dropdown-menu');

// Add click event listeners to both elements
nombreUsuario.addEventListener('click', toggleDropdown);
imagenUsuario.addEventListener('click', toggleDropdown);
dropDownUsuario.addEventListener('click', toggleDropdown);

// Function to toggle the dropdown menu's visibility
function toggleDropdown() {

  if (dropdownMenu.style.display === 'block') {
    dropdownMenu.style.display = 'none'; // Hide the menu
  } else {
    dropdownMenu.style.display = 'block'; // Show the menu
  }
}

// Close the menu when clicking outside of it
document.addEventListener('click', function (event) {
  if (!nombreUsuario.contains(event.target) && !imagenUsuario.contains(event.target) && !dropDownUsuario.contains(event.target)) {
    dropdownMenu.style.display = 'none';
  }
});

// Prevent clicks inside the menu from closing it
dropdownMenu.addEventListener('click', function (event) {
  event.stopPropagation();
});



// BUSQUEDA AVANZADA 

const toggleSubmenus = document.querySelectorAll("#toggle-submenus");
const submenuTitles = document.querySelectorAll('.menu-item');
const submenuTitlesH3 = document.querySelectorAll('.menu-item>h3');
const submenus = document.querySelectorAll('.submenu');
const busqueda = document.querySelectorAll('.busqueda-avanzada');


// Add click event listeners to toggle visibility of submenu titles
toggleSubmenus.forEach((toggle) => {
  toggle.addEventListener('click', () => {
    submenuTitles.forEach((title) => {
      title.classList.toggle('visible');
      submenuTitles.forEach((title, index) => {
        submenus[index].classList.remove('visible');
      });
    });
    busqueda.classList.toggle('open');

  });
});

// Add click event listeners to toggle visibility of submenus
submenuTitlesH3.forEach((title, index) => {
  title.addEventListener('click', () => {
    submenus[index].classList.toggle('visible');
  });
});

