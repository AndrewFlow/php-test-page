<?php
$rurl = $_SERVER["REQUEST_URI"];

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./adaptive.css">

    <title>Site2</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="header__inner">
                <div class="user">
                    <img class="user__avatar" src="MyResume_files/icon_logo.png" alt="">
                    <div class="user__content">
                        <div class="user__name">Andrew <br>Flow</div>
                        <div class="user__prof">Lorem * Lorem * Lorem</div>

                    </div>
                </div>
                <div class="nav" id="nav">
                    <a class="nav__link" href="#" data-scroll="#work">
                        <?php if ($rurl == "/") {
                            echo 'Work';
                        } else {
                            echo '';
                        } ?>
                    </a>
                    <a class="nav__link" href="#" data-scroll="#me_info">
                        <?php if ($rurl == "/") {
                            echo 'About me';
                        } else {
                            echo '';
                        } ?>
                    </a>
                    <a class="nav__link" href="#" data-scroll="#workstage">
                        <?php if ($rurl == "/") {
                            echo 'Process';
                        } else {
                            echo '';
                        } ?>
                    </a>
                    <a class="nav__link" href="/" style="<?php if ($rurl == "/") {
                        echo 'display: none';
                    } else {
                        echo 'display: visible';
                    } ?>">На главную
                    </a>
                    <a class="nav__link" href="info.php">Contact</a>
                </div>
            </div>
        </div>
    </div>