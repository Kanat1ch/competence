document.addEventListener('DOMContentLoaded', () => {
  document.querySelector('.loading').classList.remove('loading')
})

const menuBtn = document.querySelector('.menu-btn')
const closeBtn = document.querySelector('.close-btn')
const menu = document.querySelector('.header__content')
const overlay = document.querySelector('.overlay')

const openMenu = () => {
  menu.classList.add('active')
  overlay.classList.add('active')
  document.documentElement.style.overflow = 'hidden'
}

const closeMenu = () => {
  menu.classList.remove('active')
  overlay.classList.remove('active')
  document.documentElement.style.overflow = ''
}

menuBtn.addEventListener('click', openMenu)
closeBtn.addEventListener('click', closeMenu)
overlay.addEventListener('click', closeMenu)