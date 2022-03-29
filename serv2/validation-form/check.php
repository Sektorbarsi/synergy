<?php
  $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
  $name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
  $idp = filter_var(trim($_POST['idp']),FILTER_SANITIZE_STRING);

  if(mb_strlen($login) < 3 || mb_strlen($login) > 150){
    echo "Error long email(от 3 до 150 символов)";
    exit();
  } else if(mb_strlen($login) < 3 || mb_strlen($login) > 150){
    echo "Error long fio(от 3 до 150 символов)";
    exit();
  } else if(mb_strlen($pass) < 3 || mb_strlen($pass) > 8){
    echo "Error long password(от 3 до 8 символов)";
    exit();
  }
    else if(mb_strlen($idp) != 10){
    echo "Error long pasport(строго  10 символов)";
    exit();
  }

  $pass = md5($pass."dlczV");

  $mysql= new mysqli('127.0.0.1','root','root','register-bg');
  $mysql ->query("INSERT INTO `users`(`login`,`pass`,`name`,`idp`)VALUES('$login','$pass','$name','$idp')");

  $mysql ->close();
  header('Location: /')
?>
