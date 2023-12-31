<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Форум</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@200;300;400;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Varta:wght@200;300;400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../scss/slick.css" />
    <link rel="stylesheet" href="../scss/style.css" />
  </head>
  <body>
    <header class="header">
      <div class="container">
        <div class="header__inner">
          <a class="logo" href="../html/index.php">
            <img class="logo__img" src="../images/logo.svg" alt="Logo" />
          </a>
          <nav>
            <ul class="header__items">
              <li class="header__item">
                <a class="header__link header__link-active" href="personal.html">Personal</a>
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
          <div class="category">Topic: Personal</div>
          <div class="post">
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
              aliquam rhoncus. Suspendisse tincidunt blandit lectus varius hendrerit. Nullam nec sem
              vel turpis tincidunt lacinia eget in leo.
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
          </div>
          <div class="post">
            <div class="topic topic-personal">Personal</div>
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
          </div>
        </section>
      </div>
    </main>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/main.js"></script>
  </body>
</html>
