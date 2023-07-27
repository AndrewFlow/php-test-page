<link rel="stylesheet" href="./check_post.css">

<?php
$name = $_POST['username'];
$email = $_POST['email'];
$message = $_POST['message'];



if (trim($name) == "" || trim($email) == "" || trim($message) == "") {
    echo ('<div class="error">
    <div class="error__body">
        <h3 class="error__text">Заполните все поля и повторите отправку</h2>
        <a class="error__container" href="../info.php">
            <img class ="error__img" src="../MyResume_files/error.gif" alt="">
        </a>
        <a class="error__link" href="../info.php"> 	&LT; Обратно к заявке</a>
    </div>
</div>');
} else if (strlen(trim($name)) <= 1 || strlen(trim($name)) > 30) {
    echo ('<div class="error">
    <div class="error__body">
        <h3 class="error__text">Имя должно содержать не менее 2 символов и не более 30</h3>
        <a class="error__container" href="../info.php">
            <img class ="error__img" src="../MyResume_files/error.gif" alt="">
        </a>
        <a class="error__link" href="../info.php"> Обратно к заявке</a>
    </div>
</div>');
} else if (trim(!preg_match("/^[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}$/i", $email))) {
    echo ('<div class="error">
    <div class="error__body">
        <h3 class="error__text">Введите корректный email</h3>
        <a class="error__container" href="../info.php">
            <img class ="error__img" src="../MyResume_files/error.gif" alt="">
        </a>
        <a class="error__link" href="../info.php"> Обратно к заявке</a>
    </div>
</div>');
} else {
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