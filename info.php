<?php
session_start();
require './components/header.php';
?>

<div class="me_info" id="me_info">
    <div class="container">
        <div class="about__inner">
            <img class="photo__about photo__about-border" src="./MyResume_files/stage_w1.jpg" alt="">
            <div class="about__content about__content-form">
                <h3 class="about__title">Обратная</h3>
                <h2 class="about__subtitle">Связь</h2>
                <div class="contact">
                    <form class="contact__body" action="../components/check_post.php" method="post">
                        <div class="contact__inner">
                            <label class="contact__label" for="text">Имя</label>
                            <input class="contact__input" value="<?= $_SESSION['username']?>" type="text" name="username" id="">
                        </div>
                        <span class="conctact__error"><?=$_SESSION['error__name']?></span>
                        <div class="contact__inner">
                            <label class="contact__label" for="email">Почта</label>
                            <input class="contact__input" value="<?= $_SESSION['email']?>" type="email" name="email" id="">
                        </div>
                        <span class="conctact__error"><?=$_SESSION['error__email']?></span>
                        <div class="contact__inner">
                            <label class="contact__label" for="message">Ваш вопрос</label>
                            <textarea class="contact__input" value="<?= $_SESSION['message']?>" type="text" name="message" id=""></textarea>
                        </div>
                        <span class="conctact__error"><?=$_SESSION['error__message']?></span>
                        <button class="btn btn-center btn-contact" type="submit">Отправить</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>


<?php
require './components/footer.php';
?>