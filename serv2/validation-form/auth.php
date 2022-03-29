<?php
  $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
  $pass2=$pass;
  $pass = md5($pass."dlczV");

  $mysql= new mysqli('127.0.0.1','root','root','register-bg');
  $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` ='$pass'");
  $user=$result-> fetch_assoc();
  if(count($user)  == 0){
    echo  "Пользователь не существует ошибка при вводе почты или пароля";
    exit();
  }
  setcookie('user', $user['name'],time() + 3600,"/");
  setcookie('id', $user['id'],time() + 3600,"/");
  setcookie('login', $user['login'],time() + 3600,"/");
  setcookie('idp', $user['idp'],time() + 3600,"/");
  setcookie('pass', $pass2,time() + 3600,"/");
  $mysql ->close();
  header('Location: /')
?>
