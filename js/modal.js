const modalLogin = document.querySelector('.backdrop-login');
const modalSign = document.querySelector('.backdrop-signup');
const modalLoginOpenBtns = document.querySelectorAll('.modal-open-btn');
const modalCloseBtns = document.querySelectorAll('.modal-close-btn');
const modalSignOpenBtns = document.querySelectorAll('.modal-sign-open-btn');

modalSignOpenBtns.forEach(el => {
    el.addEventListener('click', () => {
        modalLogin.classList.add('is-hidden');
        modalSign.classList.remove('is-hidden');
    });
});

modalLoginOpenBtns.forEach(el => {
    el.addEventListener('click', () => {
        modalLogin.classList.remove('is-hidden');
        modalSign.classList.add('is-hidden');
    });
});

modalCloseBtns.forEach(el => {
    el.addEventListener('click', () => {
        modalLogin.classList.add('is-hidden')
        modalSign.classList.add('is-hidden')
    })
})