<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <div class="header">
    <h2>NARCO University</h2>
  </div>

  <form method="post" action="login.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Логин</label>
      <input type="text" name="username">
    </div>
    <div class="input-group">
      <label>Пароль</label>
      <input type="password" name="password">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="login_user">Войти</button>
    </div>
    <p>
      У вас не акаунта ? <a href="register.php">Зарегистрироваться</a>
    </p>
  </form>
</body>

</html>