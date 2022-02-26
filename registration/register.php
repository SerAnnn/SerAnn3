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

	<form method="post" action="register.php">
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Имя Пользователь</label>
			<input type="text" name="username" value="<?php echo $username; ?>" placeholder="Введите логин">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>" placeholder="Введите почту">
		</div>
		<div class="input-group">
			<label>Пароль</label>
			<input type="password" name="password_1" placeholder="Введите пароль">
		</div>
		<div class="input-group">
			<label>Повторите Пороль</label>
			<input type="password" name="password_2" placeholder="Введите пароль ещё раз">
		</div>

		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Зарегистрироваться</button>
		</div>
		<p>
			У вас уже есть акаунт? <a href="login.php">Войти</a>
		</p>
	</form>
</body>

</html>