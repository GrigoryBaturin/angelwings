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
    <title>Angel Wings - медиа</title>
</head>
<body>
    <!--Navbar-->
    <?php
        require_once('../php_components/navbar.php')
    ?>
    <!--End navbar-->
    <div class="container">
        <!--About me-->
        <?php
            $sql = 'SELECT * FROM about';
            $query = $pdo->prepare( $sql );
            $query->execute();
            $about = $query->fetchAll(PDO::FETCH_OBJ);
            foreach( $about as $el_about )
        ?>
        <div class="md_white party" id="aboutMe">
            <div class="md_wrapper">
                <div class="md_title">
                    <h2 class="darkTitleFirst"><?php echo $el_about->title ?></h2>
                </div>
                <div class="md_aboutMe">
                <?php echo $el_about->text ?>
                </div> 
            </div>
        </div>
        <!--End about me-->
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