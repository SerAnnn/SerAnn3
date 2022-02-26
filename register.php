<?php
#$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

#define("DB_HOST", "localhost");
#define("DB_USER", "root");
#define("DB_PASSWORD", "root");
#define("DB_DATABASE", "databasename");



$dbc = mysqli_connect('localhost', 'root', 'root', 'form');
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($dbc, trim($_POST['username']));
    $password1 = mysqli_real_escape_string($dbc, trim($_POST['password1']));
    $password2 = mysqli_real_escape_string($dbc, trim($_POST['password2']));

    if (!empty($username) && !empty($password1) && !empty($password2) && ($password1 == $password2)) {

        $query = "SELECT * FROM 'signup' WHERE username = '$username'";
        $data = mysqli_query($dbc, $query);
        if (mysqli_num_rows($data) == 0) {
            $query = "INSERT INTO 'signup'(username,password) VALUES ('$username','$password1')";
            mysqli_query($dbc, $query);
            echo 'Всё готово можете автаризоваться';
            mysqli_close($dbc);
            exit();
        } else {
            echo 'Логин уже сущуствует';
        }
    }
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>NARCO University</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon" />
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon" />

    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />

</head>




<body style="padding-top: 40px; padding-bottom: 40px">
    <form class="form-signin" action="user.php" style="padding: 15px; margin-left: 464.5px; margin-right: 464.5px">
        <div class="text-center mb-4">
            <img class="mb-4" src="img/apple-touch-icon.png" alt="" width="72" height="72" />
            <h1 class="h3 mb-3 font-weight-normal">
                <font style="vertical-align: inherit">
                    <font style="vertical-align: inherit">NARCO University</font>
                </font>
            </h1>
            <p>
                <font style="vertical-align: inherit">
                    <font style="vertical-align: inherit">
                    </font>
                </font><code></code>
                <font style="vertical-align: inherit">
                    <font style="vertical-align: inherit"> </font>
                </font><a href="https://caniuse.com/#feat=css-placeholder-shown">
                    <font style="vertical-align: inherit">
                        <font style="vertical-align: inherit"></font>
                    </font>
                </a>
            </p>
        </div>

        <div class="form-label-group">
            <input type="email" id="inputEmail" class="form-control" placeholder="Адрес электронной почты" required="" autofocus="" />
            <label for="inputEmail">
                <font style="vertical-align: inherit">
                    <font style="vertical-align: inherit"></font>
                </font>
            </label>
        </div>

        <div class="form-label-group">
            <input type="text" id="" name="username" class="form-control" placeholder="Введите логин" required="" autofocus="" />
            <label for="username">
                <font style="vertical-align: inherit">
                    <font style="vertical-align: inherit"></font>
                </font>
            </label>
        </div>

        <div class="form-label-group">
            <input type="password" name="password1" id="inputPassword" class="form-control" placeholder="Введите пароль" required="" />
            <label for="password">
                <font style="vertical-align: inherit">
                    <font style="vertical-align: inherit"></font>
                </font>
            </label>
        </div>
        <div class="form-label-group">
            <input type="password" name="password2" id="inputPassword" class="form-control" placeholder="Повторите пароль" required="" />
            <label for="password">
                <font style="vertical-align: inherit">
                    <font style="vertical-align: inherit"></font>
                </font>
            </label>
        </div>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me" />
                <font style="vertical-align: inherit">
                    <font style="vertical-align: inherit"> Запомни меня </font>
                </font>
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">
            <font style="vertical-align: inherit">
                <font style="vertical-align: inherit">Регистрация</font>
            </font>
        </button>
        <p class="mt-5 mb-3 text-muted text-center">
            <font style="vertical-align: inherit">
                <font style="vertical-align: inherit">© NARCO University</font>
            </font>
        </p>
    </form>
    <div id="goog-gt-tt" class="skiptranslate" dir="ltr">
        <div style="padding: 8px">
            <div>
                <div class="logo"></div>
            </div>
        </div>
    </div>

    <div class="goog-te-spinner-pos">
        <div class="goog-te-spinner-animation">
            <svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66">
                <circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
            </svg>
        </div>
    </div>
</body>

</html>