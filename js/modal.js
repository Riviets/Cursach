const modal = document.querySelector('.backdrop')
const modalOpenBtn = document.querySelector('.modal-open-btn')
const modalCloseBtn = document.querySelector('.modal-close-btn')

const modalToggle = function () {
    modal.classList.toggle('is-hidden')
}

modalOpenBtn.addEventListener('click', modalToggle);
modalCloseBtn.addEventListener('click', modalToggle);