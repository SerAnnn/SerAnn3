//print_r($_POST);
//$email = $_POST['email'];
$message = $_POST['message'];
$error = '';


if (trim($email) == '')

$error = 'введите ваш email';
else if (trim($meessage) == '')
$error = 'введите само сообшение ';
else if (strlen($message) < 10) $error='больше 10 символов' ; if ($error !='' ) { echo $error; exit; } $subject="?utf8?b?" . base64_encode("текстовое сообшение ") . " ?=";
$header = " From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n"; mail('narcosipehr2004@gmail.com', $subject, $message, $header); header('Loacation: /index.php');