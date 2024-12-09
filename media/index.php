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
                        <?php
                        $sql = 'SELECT * FROM posters';
                        $query = $pdo->prepare( $sql );
                        $query->execute();
                        $posters = $query->fetchAll(PDO::FETCH_OBJ);
                        foreach( $posters as $el_posters )
                        echo "<input type='radio' name='slide' id='$el_posters->id' checked>
                            <label for='$el_posters->id' class='card'>
                                <img src='../images/event/$el_posters->image'>
                            </label>";
                        ?>
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
                    <?php
                        $sql = 'SELECT * FROM photo';
                        $query = $pdo->prepare( $sql );
                        $query->execute();
                        $photo = $query->fetchAll(PDO::FETCH_OBJ);
                        foreach( $photo as $el_photo )
                        echo "<a href='../images/photo/$el_photo->image' data-lightbox='models'>
                                <div>
                                    <img src='../images/photo/$el_photo->image' alt=''>
                                </div>
                            </a>";
                        ?>
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