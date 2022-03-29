<?php
  setcookie('user', $user['name'],time() - 3600,"/");
  setcookie('id', $user['id'],time() - 3600,"/");
  setcookie('login', $user['login'],time() - 3600,"/");
  setcookie('idp', $user['idp'],time() - 3600,"/");
  setcookie('pass', $pass2,time() - 3600,"/");
  header('Location: /  ')
?>
