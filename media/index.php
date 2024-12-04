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
    <link rel="stylesheet" href="../css/lightbox.css">
    <title>Angel Wings - медиа</title>
</head>
<body>
    <!--Navbar-->
    <?php
        require_once('../php_components/navbar.php')
    ?>
    <!--End navbar-->
    <div class="container">
        <!--Archive events-->
         <div class="md_dark info" id="archiveEvent">
            <div class="md_wrapper">
                <div class="md_title">
                    <h2 class="whiteTitleFirst">Афиши из архива вечеринок!</h2>                    
                </div>
                <div class="md_archiveSlider">
                    <div class="wrapper">
                        <div class="container block">
                            <input type="radio" name="slide" id="c1" checked>
                            <label for="c1" class="card"></label>

                            <input type="radio" name="slide" id="c2" >
                            <label for="c2" class="card"></label>

                            <input type="radio" name="slide" id="c3" >
                            <label for="c3" class="card"></label>
                            
                            <input type="radio" name="slide" id="c4" >
                            <label for="c4" class="card"></label>

                            <input type="radio" name="slide" id="c5" checked>
                            <label for="c5" class="card"></label>

                            <input type="radio" name="slide" id="c6" >
                            <label for="c6" class="card"></label>

                            <input type="radio" name="slide" id="c7" >
                            <label for="c7" class="card"></label>

                            <input type="radio" name="slide" id="c8" >
                            <label for="c8" class="card"></label>
                        </div>
                        
                    </div>
                </div> 
            </div> 
         </div>
         <!--End Archive events-->
         <!--Photo-->
        <div class="md_white party" id="photoArchive">
            <div class="md_wrapper">
                <div class="md_title">
                    <h2 class="darkTitleFirst"><span style="color: #ef0d33;">Фото</span> с наших вечеринок!</h2>
                </div>
                <div class="container_gallery">
                    <div class="gallery">
                        <a href="../images/photo/ph1.jpg" data-lightbox="models">
                            <div>
                                <img src="../images/photo/ph1.jpg" alt="">
                            </div>
                        </a>
                        <a href="../images/photo/ph2.jpg" data-lightbox="models">
                            <div>
                                <img src="../images/photo/ph2.jpg" alt="">
                            </div>
                        </a>
                        <a href="../images/photo/ph3.jpg" data-lightbox="models">
                            <div>
                                <img src="../images/photo/ph3.jpg" alt="">
                            </div>
                        </a>
                        <a href="../images/photo/ph4.jpg" data-lightbox="models">
                            <div>
                                <img src="../images/photo/ph4.jpg" alt="">
                            </div>
                        </a>
                        <a href="../images/photo/ph5.jpg" data-lightbox="models">
                            <div>
                                <img src="../images/photo/ph5.jpg" alt="">
                            </div>
                        </a>
                        <a href="../images/photo/ph6.jpg" data-lightbox="models">
                            <div>
                                <img src="../images/photo/ph6.jpg" alt="">
                            </div>
                        </a>
                        <a href="../images/photo/ph7.jpg" data-lightbox="models">
                            <div>
                                <img src="../images/photo/ph7.jpg" alt="">
                            </div>
                        </a>
                        <a href="../images/photo/ph8.jpg" data-lightbox="models">
                            <div>
                                <img src="../images/photo/ph8.jpg" alt="">
                            </div>
                        </a>
                        <a href="../images/photo/ph9.jpg" data-lightbox="models">
                            <div>
                                <img src="../images/photo/ph9.jpg" alt="">
                            </div>
                        </a>
                        <a href="../images/photo/ph10.jpg" data-lightbox="models">
                            <div>
                                <img src="../images/photo/ph10.jpg" alt="">
                            </div>
                        </a>
                        <a href="../images/photo/ph10.jpg" data-lightbox="models">
                            <div>
                                <img src="../images/photo/ph10.jpg" alt="">
                            </div>
                        </a>
                        <a href="../images/photo/ph10.jpg" data-lightbox="models">
                            <div>
                                <img src="../images/photo/ph10.jpg" alt="">
                            </div>
                        </a>
                        <a href="../images/photo/ph10.jpg" data-lightbox="models">
                            <div>
                                <img src="../images/photo/ph10.jpg" alt="">
                            </div>
                        </a>
                        <a href="../images/photo/ph10.jpg" data-lightbox="models">
                            <div>
                                <img src="../images/photo/ph10.jpg" alt="">
                            </div>
                        </a>
                        <a href="../images/photo/ph10.jpg" data-lightbox="models">
                            <div>
                                <img src="../images/photo/ph10.jpg" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--End photo-->
    </div>
    <!--Footer-->
    <?php
        require_once('../php_components/footer.php')
    ?>
    <!--End footer-->
<script src="../scripts/main.js"></script>
<script src="../scripts/lightbox-plus-jquery.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>   
</body>
</html>