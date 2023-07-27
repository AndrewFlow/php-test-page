<?php
session_start();
function redirect () {
    header('Location: ../info.php');
    exit;
}
$name = htmlspecialchars(trim($_POST['username'])); // htmlchars удаляет html теги если такие есть в полях . Так же удаляет пробелы
$email = htmlspecialchars(trim($_POST['email']));
$message = htmlspecialchars(trim($_POST['message']));
$mailregex = "/^[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}$/i";

$_SESSION['username'] = $name;
$_SESSION['email'] = $email;
$_SESSION['message'] = $message;


if ($name == "") {
    $_SESSION['error__name'] = 'Заполните поле';
    redirect();
} else if (strlen($name) <= 1 || strlen($name) > 30) {
    $_SESSION['error__name'] = 'Имя должно содержать минимум 2 символа и максимум 30';
    redirect();
} else if (trim(!preg_match($mailregex, $email))) {
    $_SESSION['error__email'] = 'ВВедите корректный email';
    redirect();
} else if ($message == "" ) {
    $_SESSION['error__message'] = 'Заполните поле';
    redirect();
} else if (strlen($message) <= 4 || strlen($message) > 70) {
    $_SESSION['error__message'] = 'Сообщение должно содержать быть более емким!(но не слишком большим)';
    redirect();
} else {
    /* отправка письма 
    $message = "=?utf-8?B?".base64_encode($message);
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type:text/plain; charset=utf-8\r\r";
    mail('test123@mail.ru',$message,$headers);
    */
    $_SESSION['error__name'] = '';
    $_SESSION['error__email'] = '';
    $_SESSION['error__message'] = '';
    echo ('<div class="success">
    <div class="success__body">
        <h2 class="success__text">Ваше сообщение успешно отправлено. Мы с вами свяжемся!</h2>
        <a class="success__container" href="/">
            <img class ="success__img" src="../MyResume_files/success.gif" alt="">
        </a>
        <a class="succes__link" href="/"> На главную</a>
    </div>
</div>');
}

?>
<link rel="stylesheet" href="./check_post.css">