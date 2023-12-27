class User {
    constructor(firstName, lastName, email, password) {
        this.firstName = firstName
        this.lastName = lastName
        this.email = email
        this.password = password
    }
}

const loginForm = document.getElementById('loginForm')
const signupForm = document.getElementById('signupForm')

signupForm.addEventListener('submit', function (e) {
    e.preventDefault()
    const userName = document.getElementById('signupName').value
    const userLastName = document.getElementById('signupSurname').value
    const userEmail = document.getElementById('signupEmail').value
    const userPassword = document.getElementById('signupPassword').value

    let user = new User(userName, userLastName, userEmail, userPassword)
    signupForm.reset()
})

// loginForm.addEventListener('submit', function (e) {
//     e.preventDefault
//     const userEmail = document.getElementById('loginEmail').value
//     const userPassword = document.getElementById('loginPassword').value
//     //шуршимо бд
//     // for () {
//     let found = false
//     const searchedEmail = //витягнутий з бд
//     const searchedPassword = //витягнутий з бд
//     if (searchedEmail === userEmail) {
//         found = true
//         if (searchedPassword === userPassword) {
//             alert("Ви ввійшли")
//         }
//         else {
//             alert("Паролі не співпадають")
//         }
//     }
//     if (!found) {
//         alert("Така пошта не зареєстрована")
//     }
//     // }
// })