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
        <?php
            $sql = 'SELECT * FROM rules';
            $query = $pdo->prepare( $sql );
            $query->execute();
            $rules = $query->fetchAll(PDO::FETCH_OBJ);
            foreach( $rules as $el_rules )
        ?>
        <div class="md_dark party" id="party">
            <div class="md_wrapper">
                <div class="md_title">
                <?php echo $el_rules->title; ?>
                </div>
                <section class="clubRules">
                <?php echo $el_rules->text; ?>
                </section>
            </div>
        </div>
        <div class="md_white party" id="party">
            <div class="md_wrapper">
                <div class="md_title">
                    <h2 class="darkTitleFirst">Как попасть на вечеринку?</h2>
                </div>
                <section class="blockFirst">
                <?php
                    $sql = 'SELECT * FROM howgetparty WHERE id = 1';
                    $query = $pdo->prepare( $sql );
                    $query->execute();
                    $double = $query->fetchAll(PDO::FETCH_OBJ);
                    foreach( $double as $el_double )
                ?>
                    <div class="md_left">
                        <h3><span><?php echo $el_double->list; ?>:</span></h3>
                        <h3 class="double"><span><?php echo $el_double->type; ?></span></h3>
                        <p class="doubleDescrip"><?php echo $el_double->text; ?></p>
                    </div>
                    <div class="md_right">
                        <img src="../images/rules/<?php echo $el_double->image; ?>">
                    </div>
                </section>
                <section class="blockTwo">
                <?php
                    $sql = 'SELECT * FROM howgetparty WHERE id = 2';
                    $query = $pdo->prepare( $sql );
                    $query->execute();
                    $man = $query->fetchAll(PDO::FETCH_OBJ);
                    foreach( $man as $el_man )
                ?>
                    <div class="md_left">
                        <img src="../images/rules/<?php echo $el_man->image; ?>">
                    </div>
                    <div class="md_right">
                        <h3><span><?php echo $el_man->list; ?>:</span></h3>
                        <h3 class="double"><span><?php echo $el_man->type; ?></span></h3>
                        <p class="doubleDescrip"><?php echo $el_man->text; ?></p>
                    </div>
                </section>
                <section class="blockThree">
                <?php
                    $sql = 'SELECT * FROM howgetparty WHERE id = 3';
                    $query = $pdo->prepare( $sql );
                    $query->execute();
                    $girl = $query->fetchAll(PDO::FETCH_OBJ);
                    foreach( $girl as $el_girl )
                ?>
                    <div class="md_left">
                        <h3><span><?php echo $el_girl->list; ?>:</span></h3>
                        <h3 class="double"><span><?php echo $el_girl->type; ?></span></h3>
                        <p class="doubleDescrip"><?php echo $el_girl->text; ?></p>
                    </div>
                    <div class="md_right">
                        <img src="../images/rules/<?php echo $el_girl->image; ?>">
                    </div>
                </section>
                <section class="blockFour">
                <?php
                    $sql = 'SELECT * FROM howgetparty WHERE id = 4';
                    $query = $pdo->prepare( $sql );
                    $query->execute();
                    $dress = $query->fetchAll(PDO::FETCH_OBJ);
                    foreach( $dress as $el_dress )
                ?>
                    <div class="md_left">
                        <img src="../images/rules/<?php echo $el_dress->image; ?>">
                    </div>
                    <div class="md_right">
                        <h3><span><?php echo $el_dress->list; ?>:</span></h3>
                        <h3 class="double"><span><?php echo $el_dress->type; ?></span></h3>
                        <p class="doubleDescrip"><?php echo $el_dress->text; ?></p>
                    </div>
                </section>
                <section class="blockFive">
                <?php
                    $sql = 'SELECT * FROM howgetparty WHERE id = 5';
                    $query = $pdo->prepare( $sql );
                    $query->execute();
                    $face = $query->fetchAll(PDO::FETCH_OBJ);
                    foreach( $face as $el_face )
                ?>
                    <div class="md_left">
                        <h3><span><?php echo $el_face->list; ?>:</span></h3>
                        <h3 class="double"><span><?php echo $el_face->type; ?></span></h3>
                        <p class="doubleDescrip"><?php echo $el_face->text; ?></p>
                    </div>
                    <div class="md_right">
                        <img src="../images/rules/<?php echo $el_face->image; ?>">
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