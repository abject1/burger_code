function navBar() {
  const menuBurger = document.querySelector('#menuBurger');
  const navBar = document.querySelector('#nav');
  menuBurger.addEventListener('click', () => {
    navBar.classList.toggle('not-seen');
  });
}
export { navBar };