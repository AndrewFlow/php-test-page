<?php
require './components/header.php';
?>
<div class="me_info" id="me_info">
    <div class="container">
        <div class="about__inner">
            <img class="photo__about" src="MyResume_files/second_photo.jpg" alt="">
            <div class="about__content about__content-form">
                <h3 class="about__title">Обратная</h3>
                <h2 class="about__subtitle">Связь</h2>
                <div class="contact">
                    <form class="contact__body">
                        <div class="contact__inner">
                            <label for="text">Имя</label>
                            <input class="contact__input" type="text" name="text" id="">
                        </div>

                        <div class="contact__inner">
                            <label for="text">Почта</label>
                            <input class="contact__input" type="email" name="email" id="">

                        </div>
                        <div class="contact__inner">
                            <label for="text">Ваш вопрос</label>
                            <input class="contact__input" type="text" name="message" id="">
                        </div>
                        <button class="btn btn-center" type="submit" >Отправить</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<?php
require './components/footer.php';
?>