<?php
    require_once '../db_connect_php/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <title>Angel Wings - как попасть на вечеринку?</title>
</head>
<body>
    <!--Navbar-->
    <?php
        require_once('../php_components/navbar.php')
    ?>
    <!--End navbar-->
    <div class="container">
        <!--Party-->
        <div class="md_dark party" id="party">
            <div class="md_wrapper">
                <div class="md_title">
                    <h2 class="whiteTitleFirst" style="margin-top: 20px;"><span style="color: #ef0d33;">Правила</span> на моих вечеринках</h2>
                </div>
                <section class="clubRules">
                     <ul>
                        <li><i class="fi fi-rr-handshake md_icon"></i><span>Уважайте друг друга находясь на вечеринке.</span></li>
                        <li><i class="fi fi-rr-hand-holding-heart md_icon"></i><span>На моих вечеринках никто никому ничего не должен,
                            всё только по взаимной симпатии и взаимному согласию.</span></li>
                        <li><i class="fi fi-rr-mode-portrait md_icon"></i><span>Если мы замечаем, что ваше поведение стало неадекватным,
                            охрана сразу попросит вас покинуть вечеринку.</span></li>
                        <li><i class="fi fi-rr-ban md_icon"></i><span>Фото и видео съёмка запрещена.</span></li>
                        <li><i class="fi fi-rr-ban md_icon"></i><span>На вечеринке запрещены оказания любых интимных услуг за деньги.</span></li>
                        <li><i class="fi fi-rr-ban md_icon"></i><span>Запрещено употребление и продажа любых наркотических средств.</span></li>
                        <li><i class="fi fi-rr-ban md_icon"></i><span>Запрещены любые действия, нарушающие законы РФ.</span></li>
                        <li><i class="fi fi-rr-broom md_icon"></i><span>Соблюдайте порядок и чистоту. Выбрасывайте использованные средства
                            защиты и личной гигиены в урны (они установлены в каждом привате и туалетах).<br />
                            Бросил на пол - <span style="color: #ef0d33;">штраф 5000 рублей!</span></span></li>
                        <li><i class="fi fi-rr-usd-circle md_icon"></i> <span>Возврат денежных средств  не предусмотрен. Возможен перенос предоплаты на следующую вечеринку.</span></li>
                        <li><i class="fi fi-rr-interrogation md_icon"></i><span>Если у вас возникнет любая непонятная ситуация , вы сразу обращаетесь к администратору вечеринки
                            и мы решим возникшие проблемы.</span></li>
                        <li><i class="fi fi-rr-sign-in-alt md_icon"></i><span>За нарушение правил, мы в праве попросить Вас покинуть
                            вечеринку или сделать первое и последнее предупреждение!</span></li>
                        <li><span><i class="fi fi-rr-social-network md_icon"></i>Соблюдайте правила и не надо портить себе вечер.</span></li>
                    </ul>
                </section>
            </div>
        </div>
        <div class="md_white party" id="party">
            <div class="md_wrapper">
                <div class="md_title">
                    <h2 class="darkTitleFirst">Как попасть на вечеринку?</h2>
                </div>
                <section class="blockFirst">
                    <div class="md_left">
                        <h3><span>ВАРИАНТ:</span></h3>
                        <h3 class="double"><span>ПАРА</span></h3>
                        <p class="doubleDescrip">Чтобы попасть паре на вечеринку, я прошу скинуть на почту или в телеграмм @wings_angel
                            свои фото в полный рост с лицом, без тёмных очков.</p>
                    </div>
                    <div class="md_right">
                        <img src="../images/rules/double.jpg">
                    </div>
                </section>
                <section class="blockTwo">
                    <div class="md_left">
                        <img src="../images/rules/man.jpg">
                    </div>
                    <div class="md_right">
                        <h3><span>ВАРИАНТ:</span></h3>
                        <h3 class="double"><span>МУЖЧИНА</span></h3>
                        <p class="doubleDescrip">Чтобы попасть мужчине  на вечеринку, я прошу скинуть на
                            почту или в телеграмм @wings_angel свои фото в полный рост с лицом, без тёмных
                            очков и обязательно ссылка на любую социальную сеть, чтобы по хронике и истории фотографий
                            и комментариев под ними, можно было понять вашу адекватность или за Вас должны поручится люди которых я знаю лично.</p>
                    </div>
                </section>
                <section class="blockThree">
                    <div class="md_left">
                        <h3><span>ВАРИАНТ:</span></h3>
                        <h3 class="double"><span>ДЕВУШКА</span></h3>
                        <p class="doubleDescrip">Чтобы попасть девушке на вечеринку, я прошу скинуть на почту или
                            в телеграмм @wings_angel своё фото в полный рост с лицом, без тёмных очков.</p>
                    </div>
                    <div class="md_right">
                        <img src="../images/rules/girl.jpg">
                    </div>
                </section>
                <section class="blockFour">
                    <div class="md_left">
                        <img src="../images/rules/dresscode.jpg">
                    </div>
                    <div class="md_right">
                        <h3><span>УСЛОВИЕ:</span></h3>
                        <h3 class="double"><span>DRESS CODE</span></h3>
                        <p class="doubleDescrip">Мужчины — стиль casual. Девушки — сексуальные платья/бельё и туфли на шпильках.</p>
                    </div>
                </section>
                <section class="blockFive">
                    <div class="md_left">
                        <h3><span>УСЛОВИЕ:</span></h3>
                        <h3 class="double"><span>FACE CONTROL</span></h3>
                        <p class="doubleDescrip">Все гости проходят строгий отбор и поэтому у меня на вечеринках
                            собираются только красивые и адекватные люди примерно в одном социальном статусе.</p>
                    </div>
                    <div class="md_right">
                        <img src="../images/rules/facecontrol.jpg">
                    </div>
                </section>
            </div>
        </div>
        <!--End party-->
    </div>
    <!--Footer-->
    <?php
        require_once('../php_components/footer.php')
    ?>
    <!--End footer-->
<script src="../scripts/main.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
</body>
</html>