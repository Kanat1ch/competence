// Spoilers
const spoilers = document.querySelectorAll('.spoiler')

if (spoilers) {
  spoilers.forEach(spoiler => {
    const spoilerHeader = spoiler.querySelector('.spoiler__header')
    spoilerHeader.addEventListener('click', () => {
      spoiler.classList.toggle('active')
    })
  })
}