<x-header></x-header>
    <div class="container">
        <h2 class="text-center mt-3">Регистрация</h2>
        <form class="mt-2" style="max-width: 60% margin:auto" action="signup_valid" method="POST">
          @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Логин</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="login">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Пароль</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">ФИО</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="fio">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Телефон</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">e-mail</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
          </div>
          <button type="submit" class="btn btn-primary mt-3">Зарегистрироваться</button>
        </form>
    </div>