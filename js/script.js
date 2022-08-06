/**При клике трансформирует burger в крестик*/
const menu = document.querySelector('.menu__nav')
const menuBtn = document.querySelector('.menu__burger')

const body = document.body

if (menu && menuBtn) {
  menuBtn.addEventListener('click', () => {
    menu.classList.toggle('active')
    menuBtn.classList.toggle('active')
    nav.classList.toggle('lock')
  })
}