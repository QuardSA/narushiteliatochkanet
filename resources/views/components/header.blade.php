<div>
    <x-alert></x-alert>
    <x-links></x-links>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Нарушителям нет</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                @guest
                <a class="nav-link active" aria-current="page" href="signup">Регистрация</a>
                <a class="nav-link  active" href="/signin">Авторизация</a>
                @endguest
                @auth
                <a class="nav-link active" href="/application">Написать заявление</a>
                <a class="nav-link active" href="/personal-data">Личный кабинет</a>
                <a class="nav-link active" href="/sign_out">Выход</a>
                @endauth
            </div>
          </div>
        </div>
      </nav>
</div>
