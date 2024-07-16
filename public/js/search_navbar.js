const search = document.querySelector('.search')
const buttons = document.querySelector('.buttons')
const txt = document.querySelector('.input')

buttons.addEventListener('click', () => {
    search.classList.toggle('active')
    input.focus()
})