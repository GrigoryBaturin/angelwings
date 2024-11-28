// Navbar

const navmenu_burger = document.querySelector('.navmenu_burger');
const mainMenu = document.querySelector('.mainMenu');

navmenu_burger.addEventListener('click', () => {
    navmenu_burger.classList.toggle('burger_active');
    mainMenu.classList.toggle('burger_active');
})


//End navbar

