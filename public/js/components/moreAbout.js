function moreAbout() {
  const btnMoreAbout = document.querySelector('#more-about');
  const pMoreAbout = document.querySelector('#under-text');
  btnMoreAbout.addEventListener('click', function () {
    pMoreAbout.classList.toggle('not-seen');
  });
}
export { moreAbout };