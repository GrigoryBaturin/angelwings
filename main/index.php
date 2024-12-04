<?php
    require_once '../db_connect_php/db.php';
    require_once '../php_components/main.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <title>Angel Wings - проведение свинг вечеринок!</title>
</head>
<body>
    <!--Navbar-->
    <?php
        require_once('../php_components/navbar.php')
    ?>
    <!--End navbar -->
    <div class="container">
        <!--Header-->
        <header>
            <div class="carousel">
                <div class="list">
                    <div class="item" style="background-image: url(../images/slider/6.jpg);">
                        <div class="contentSlide">
                            <div class="sld-title-first">Здесь нет</div>
                            <div class="sld-title-second">Места стеснению!</div>
                        </div>
                    </div>
                    <div class="item" style="background-image: url(../images/slider/2.jpg);">
                        <div class="contentSlide">
                            <div class="sld-title-first">Хочешь познать блаженство</div>
                            <div class="sld-title-second">доступное не всем?</div>
                            <div class="sld-meta">Свинг вечеринки, страсть, секс, желание, эмоции, новые открытия, море удовольствия и ощущений!</div>
                        </div>
                    </div>
                    <div class="item" style="background-image: url(../images/slider/1.jpg);">
                        <div class="contentSlide">
                            <div class="sld-title-first">Не бойся</div>
                            <div class="sld-title-second">Своих желаний!</div>
                        </div>
                    </div>
                    <div class="item" style="background-image: url(../images/slider/3.jpg);">
                        <div class="contentSlide">
                            <div class="sld-title-first">Разожги огонь</div>
                            <div class="sld-title-second">Необузданной страсти!</div>
                        </div>
                    </div>
                    <div class="item" style="background-image: url(../images/slider/4.jpg);">
                        <div class="contentSlide">
                            <div class="sld-title-first">Свинг для тех,</div>
                            <div class="sld-title-second">Кто готов к новым эмоциям!</div>
                        </div>
                    </div>
                    <div class="item" style="background-image: url(../images/slider/5.jpg);">
                        <div class="contentSlide">
                            <div class="sld-title-first">Отпусти свои</div>
                            <div class="sld-title-second">Запреты!</div>
                        </div>
                    </div>
                </div>
                <div class="arrows">
                    <button class="prevBtn"><</button>
                    <button class="nextBtn">></button>
                </div>

            </div>
        </header>
        <!--End header-->
        <!--Welcome-->
        <div class="welcome">
            <div class="md_welcome">
                <h2>Добро пожаловать в мир AngelWings!</h2>
            </div>            
        </div>
        <!--End welcome-->
        <!--Event-->
        <div class="event" id="event">
            <div class="bg-overlay "></div>
            <div class="md_wrapper">
                <div class="md_title">
                    <h2 class="whiteTitleFirst">Мероприятия</h2>
                    <h2 class="whiteTitleSecond">Предстоящая вечеринка</h2>
                </div>
                <?php
                 $sql = 'SELECT * FROM event ORDER BY id LIMIT 1';
                 $query = $pdo->prepare( $sql );
                 $query->execute();
                 $event = $query->fetchAll(PDO::FETCH_OBJ);
                    foreach( $event as $el )
                    echo "
                        <div class='eventModule'>
                            <div class='banner'>
                                    <img src='../images/event/$el->image' style='max-width: 400px; max-height: 400px;' alt=''>
                            </div>
                            <div class='desriptionEvent'>
                                <h2>$el->title</h2>
                                <ul>
                                    $el->text
                                </ul>
                            </div>
                        </div> 
                    ";
                ?>
            </div>
        </div>
        <!--End event-->
        <!--info-->
        <?php
            $sql = 'SELECT * FROM swingInfo';
            $query = $pdo->prepare( $sql );
            $query->execute();
            $swingInfo = $query->fetchAll(PDO::FETCH_OBJ);
            foreach( $swingInfo as $el_info )
        ?>
        <div class="md_dark info" id="info">
            <div class="md_wrapper">
                <div class="md_title">
                    <h2 class="whiteTitleFirst"><?php echo $el_info->title; ?></h2>
                    <h2 class="whiteTitleSecond"><?php echo $el_info->description; ?></h2>
                </div>
                <div class="blockFirst">
                    <div class="md_left">
                    <?php echo $el_info->varieties; ?>
                    </div>
                    <div class="md_right">
                    <?php echo $el_info->additions; ?>
                    </div>
                </div>
                <div class="blockSecond">
                <?php echo $el_info->text; ?>
                </div>
            </div>
        </div>
        <!--End info-->
        <!--Swing theme-->
        <div class="md_white info" id="swingTheme">
            <div class="md_wrapper">
                <div class="md_title">
                    <h2 class="whiteTitleFirst"><span style="color: #111517;">Объединяем и помогаем в теме свинга</span></h2>                    
                </div>
                <div class="md_swingTheme">
                    <div class="accordion">
                        <?php
                        $sql = 'SELECT * FROM swingTheme';
                        $query = $pdo->prepare( $sql );
                        $query->execute();
                        $swingTheme = $query->fetchAll(PDO::FETCH_OBJ);
                        foreach( $swingTheme as $el_theme )
                        echo "<div class='contentBx'>
                                <div class='label'>$el_theme->title</div>
                                <div class='contentSwing'>
                                    $el_theme->text
                                </div>
                            </div>";
                    ?>
                    </div>
                </div> 
                </div> 
            </div>
        <!--End Swing theme-->
    </div>
    <!--Footer-->
    <?php
        require_once('../php_components/footer.php')
    ?>
    <!--End footer-->
<script src="../scripts/main.js"></script>
<script src="../scripts/slider.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
</body>
</html>