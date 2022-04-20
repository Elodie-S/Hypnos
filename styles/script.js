/* Menu glissant sur le côté */

function slideMenu () {

    const burger = document.querySelector('.burger');
    const links  = document.querySelector('.links');

    burger.addEventListener('click', () => {
    links.classList.toggle('nav-active');
  });
}

slideMenu();

function offMenu () {

    const links  = document.querySelector('.links');

    links.addEventListener('click', () => {
    links.classList.toggle('nav-active');
  });
}

offMenu();

