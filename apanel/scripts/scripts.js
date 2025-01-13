
const navmenu_burger = document.querySelector('.navmenu_burger');
const mainMenu = document.querySelector('.mainMenu');

navmenu_burger.addEventListener('click', () => {
    navmenu_burger.classList.toggle('burger_active');
    mainMenu.classList.toggle('burger_active');
})

const user = document.querySelector('.user');
const exitSession = document.querySelector('.exitSession');

user.addEventListener('mouseover', () => {
    exitSession.classList.add('mouseover')
});

user.addEventListener('mouseout', () => {
    exitSession.classList.remove('mouseover')
});


