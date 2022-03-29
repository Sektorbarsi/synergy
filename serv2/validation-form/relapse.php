<?php
  $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
  $name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
  $idp = filter_var(trim($_POST['idp']),FILTER_SANITIZE_STRING);
  $id = $_POST['id'];
  $mysql= new mysqli('127.0.0.1','root','root','register-bg');

  if(mb_strlen($login) > 0)
  {
    if(mb_strlen($login) < 3 || mb_strlen($login) > 150)
    {
      echo "Error long email(от 3 до 150 символов)";
      exit();
    }
    $mysql ->query("UPDATE `users` SET `login` = '$login' WHERE `id` = '$id'");
  }
  if(mb_strlen($name) > 0)
  {
    if(mb_strlen($name) < 3 || mb_strlen($name) > 150)
    {
      echo "Error long fio(от 3 до 150 символов)";
      exit();
    }
    $mysql ->query("UPDATE `users` SET `name` = '$name' WHERE `id` = '$id'");
  }
  if(mb_strlen($pass) > 0)
  {
    if(mb_strlen($pass) < 3 || mb_strlen($pass) > 8)
    {
      echo "Error long password(от 3 до 8 символов)";
      exit();
    }
    $pass = md5($pass."dlczV");
    $mysql ->query("UPDATE `users` SET `pass` = '$pass' WHERE `id` = '$id'");
  }
  if(mb_strlen($idp) > 0)
  {
    if(mb_strlen($idp) != 10)
    {
    echo "Error long pasport(строго  10 символов)";
    exit();
    $mysql ->query("UPDATE `users` SET `idp` = '$idp' WHERE `id` = '$id'");
    }
  }

  $mysql ->close();
  header('Location: /')
  ?>
