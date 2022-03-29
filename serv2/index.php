<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма регистрации</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container mt-4">
      <?php
      if($_COOKIE['user']==''):
       ?>
      <div class="row">
        <div class="col">
          <h1>Форма  регистрации</h1>
          <form action="validation-form/check.php" method="post">
            <input type="text" name="login" id="login" class="form-control" placeholder="Введите почту">
            <input type="text" name="name" id="name" class="form-control" placeholder="Введите фио">
            <input type="text" name="idp" id="idp" class="form-control" placeholder="Введите паспортные данные">
            <input type="text" name="pass" id="pass" class="form-control" placeholder="Введите пароль">
            <button class="btn btn-success" type="submit">Зарегестрировать</button>
          </form>
        </div>
        <div class="col">
          <h1>Авторизация</h1>
          <form action="validation-form/auth.php" method="post">
            <input type="text" name="login" id="login" class="form-control" placeholder="Введите почту">
            <input type="text" name="pass" id="pass" class="form-control" placeholder="Введите пароль">
            <button class="btn btn-success" type="submit">Войти</button>
          </form>
        </div>
        <div>
      <?php else: ?>
        <h1>Личный кабинет</h1>
        <p>Фио <?=$_COOKIE['user'] ?></p>
        <p>Почта <?=$_COOKIE['login'] ?></p>
        <p>Паспортные данные <?=$_COOKIE['idp'] ?></p>
        <p>Пароль <?=$_COOKIE['pass'] ?></p>
        <p><a href="/exit.php">Выйди</a>.</p>
        <<?php $id=$_COOKIE['pass'] ?>
        <h0>Введите те данные ниже которые надо изменить если нечего менять не нужно нажмите кнопку выйди.</h0>
        <form action="validation-form/relapse.php" method="post">
          <input type="hidden" name="id" id="id" value=<?=$_COOKIE['id'] ?>>
          <input type="text" name="login" id="login" class="form-control" placeholder="Введите новую почту">
          <input type="text" name="name" id="name" class="form-control" placeholder="Введите новое фио">
          <input type="text" name="idp" id="idp" class="form-control" placeholder="Введите новые паспортные данные">
          <input type="text" name="pass" id="pass" class="form-control" placeholder="Введите новый пароль">
          <button class="btn btn-success" type="submit">Изменить</button>
        </form>
      <?php endif; ?>
          </div>
      </div>
    </div>
  </body>
</html>
