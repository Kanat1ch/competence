// Init animations
document.addEventListener('DOMContentLoaded', () => {
  document.querySelector('.loading').classList.remove('loading')
})

// Menu
const menuBtn = document.querySelector('.menu-btn')
const closeBtn = document.querySelector('.close-btn')
const menu = document.querySelector('.header__content')
const overlay = document.querySelector('.overlay')

const openMenu = () => {
  menu.classList.add('active')
  setOverlay(true)
}

const closeMenu = () => {
  menu.classList.remove('active')
  setOverlay(false)
}

const setOverlay = (isActive) => {
  if (isActive) {
    overlay.classList.add('active')
    document.documentElement.style.overflow = 'hidden'
  } else {
    overlay.classList.remove('active')
    document.documentElement.style.overflow = ''
  }
}

menuBtn.addEventListener('click', openMenu)
closeBtn.addEventListener('click', closeMenu)
overlay.addEventListener('click', closeMenu)

// Popup
const popup = document.querySelector('.popup')
const popupBtn = document.querySelector('.header__contact-btn')
const closePopupBtn = document.querySelector('.popup__close-btn')

const openPopup = () => {
  popup.classList.add('active')
  closeMenu()
  setOverlay(true)
}

const closePopup = () => {
  popup.classList.remove('active')
  setOverlay(false)
}

popupBtn.addEventListener('click', openPopup)
closePopupBtn.addEventListener('click', closePopup)
overlay.addEventListener('click', closePopup)

const phoneMask = IMask(
document.querySelector('input#phone'), {
  mask: '+{7} (000) 000-00-00'
});
