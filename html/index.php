<?php
$db = new PDO("mysql:host=localhost;dbname=Forum", "root", '');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Форум</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@200;300;400;700&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="../scss/style.css" />
</head>

<body>
  <header class="header">
    <div class="container">
      <div class="header__inner">
        <a class="logo" href="../html/index.php">
          <img class="logo__img" src="../images/logo.svg" alt=" Logo" />
        </a>
        <nav>
          <ul class="header__items">
            <li class="header__item">
              <a class="header__link" href="personal.html">Personal</a>
            </li>
            <li class="header__item">
              <a class="header__link" href="nature.html">Nature</a>
            </li>
            <li class="header__item">
              <a class="header__link" href="movies.html">Movies</a>
            </li>
            <li class="header__item">
              <a class="header__link" href="books.html">Books</a>
            </li>
            <li class="header__item">
              <a class="header__link" href="philosophy.html">Philosophy</a>
            </li>
            <li class="header__item">
              <a class="header__link" href="studying.html">Studying</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <main class="main">
    <div class="container">
      <section class="posts">
        <ul class="posts__list">
          <li class="posts__item">
            <article class="post">
              <div class="topic topic-personal">Personal</div>
              <div class="profile">
                <img class="profile__img" src="../images/persons/1.png" alt="" />
                <div class="profile__info">
                  <p class="profile__name">Person Name</p>
                  <p class="profile__email">personemail@gmail.com</p>
                </div>
              </div>
              <h5 class="post__title">My wife beats me</h5>
              <p class="post__text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in elit consectetur,
                commodo ex eget, maximus ex. Nulla lacus turpis, faucibus at turpis ut, pulvinar
                dapibus massa. In hac habitasse platea dictumst. Pellentesque luctus urna sed nisl
                aliquam rhoncus. Suspendisse tincidunt blandit lectus varius hendrerit. Nullam nec
                sem vel turpis tincidunt lacinia eget in leo.
              </p>
              <div class="rating">
                <p class="rating__counter">14</p>
                <button class="rating__btn">
                  <img class="rating__img" src="../images/like.svg" alt="" />
                </button>
                <button class="rating__btn">
                  <img class="rating__img" src="../images/dislike.svg" alt="" />
                </button>
              </div>
              <a class="comment-btn" href="#">
                <img class="comment-img" src="../images/comment.svg" alt="" />
              </a>
            </article>
          </li>
          <li class="posts__item">
            <article class="post">
              <div class="topic topic-nature">Nature</div>
              <div class="profile">
                <img class="profile__img" src="../images/persons/3.png" alt="" />
                <div class="profile__info">
                  <p class="profile__name">Person Name</p>
                  <p class="profile__email">personemail@gmail.com</p>
                </div>
              </div>
              <h5 class="post__title">Environmental problems</h5>
              <p class="post__text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in elit consectetur,
                commodo ex eget, maximus ex. Nulla lacus turpis, faucibus at turpis ut, pulvinar
                dapibus massa. In hac habitasse platea dictumst.
              </p>
              <div class="rating">
                <p class="rating__counter">8</p>
                <button class="rating__btn">
                  <img class="rating__img" src="../images/like.svg" alt="" />
                </button>
                <button class="rating__btn">
                  <img class="rating__img" src="../images/dislike.svg" alt="" />
                </button>
              </div>
              <a class="comment-btn" href="#">
                <img class="comment-img" src="../images/comment.svg" alt="" />
              </a>
            </article>
          </li>
        </ul>
      </section>
    </div>
  </main>
  <aside class="aside">
    <ul class="aside__items">
      <li>
        <a class="aside__item" href="../html/create.html">
          <img class="aside__item-img" src="../images/aside/1.svg" alt="" />
          Create
        </a>
      </li>
      <li>
        <a class="aside__item" href="#">
          <img class="aside__item-img" src="../images/aside/2.svg" alt="" />
          Find</a>
      </li>
      <li class="aside__item">
        <button class="modal-open-btn">
          <img class="aside__item-img" src="../images/aside/3.svg" alt="" />
          Login
        </button>
      </li>
      <li>
        <a class="aside__item aside__item-profile" href="profile.html">
          <img class="aside__item-img" src="../images/aside/4.svg" alt="" />
          Guest
        </a>
      </li>
    </ul>
  </aside>
  <div class="backdrop backdrop-login is-hidden">
    <div class="modal">
      <h2 class="modal__title">Log In</h2>
      <form id="loginForm" class="form" action="#" autocomplete="off">
        <div class="form__field">
          <label class="label visually-hidden" for="loginEmail">Email Address</label>
          <input class="input" id="loginEmail" name="loginEmail" type="email" placeholder="Email Address" required />
        </div>
        <div class="form__field">
          <label class="label visually-hidden" for="loginPassword">Password</label>
          <input class="input" id="loginPassword" name="loginPassword" type="password" placeholder="Password"
            minlength="6" maxlength="20" required />
        </div>
        <p class="form__link-text">
          Don’t have an account?
          <button type="button" class="form__link modal-sign-open-btn" href="#">Sign Up</button>
        </p>
        <button class="form__btn" type="submit">Log In</button>
      </form>
      <button class="modal-close-btn">
        <svg class="modal__icon">
          <use href="../images/icons.svg#icon-cross"></use>
        </svg>
      </button>
    </div>
  </div>
  <div class="backdrop backdrop-signup is-hidden">
    <div class="modal-signin">
      <h2 class="modal__title">Sign Up</h2>
      <form id="signupForm" class="form" action="#" autocomplete="off">
        <div class="form__field">
          <label class="label visually-hidden" for="signupName">First Name</label>
          <input class="input" id="signupName" name="signupName" type="text" placeholder="First Name" required />
        </div>
        <div class="form__field">
          <label class="label visually-hidden" for="signupSurname">Last Name</label>
          <input class="input" id="signupSurname" name="signupSurname" type="text" placeholder="Last Name" required />
        </div>
        <div class="form__field">
          <label class="label visually-hidden" for="signupEmail">Email Address</label>
          <input class="input" id="signupEmail" name="signupEmail" type="email" placeholder="Email Address" required />
        </div>
        <div class="form__field">
          <label class="label visually-hidden" for="signupPassword">Password</label>
          <input class="input" id="signupPassword" name="signupPassword" type="password" placeholder="Password"
            minlength="6" maxlength="20" required />
        </div>
        <p class="form__link-text">
          Already have an account?
          <button type="button" class="form__link modal-open-btn" href="#">Log In</button>
        </p>
        <button class="form__btn" type="submit">Sign up</button>
      </form>
      <button class="modal-close-btn">
        <svg class="modal__icon">
          <use href="../images/icons.svg#icon-cross"></use>
        </svg>
      </button>
    </div>
  </div>
  <script src="../js/modal.js"></script>
  <script src="../js/account.js"></script>
  <!-- <script src="../js/main.js"></script> -->
</body>

</html>