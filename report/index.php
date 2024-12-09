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
        <div class="md_white party" id="party">
            <div class="md_wrapper">
                <div class="md_title">
                    <h2 class="darkTitleFirst reportTitle">Результаты прошедших вечеринок</h2>
                </div>
                <?php
                        $sql = 'SELECT * FROM report ORDER BY date DESC LIMIT 1';
                        $query = $pdo->prepare( $sql );
                        $query->execute();
                        $report = $query->fetchAll(PDO::FETCH_OBJ);
                        foreach( $report as $el_report )
                        echo "<div class='report' id='lastReport'>
                    <div class='report_container'>
                        <div class='report_block'>
                            <div class='report_img'>
                                <img src='../images/report/$el_report->image' alt=''>
                            </div>
                            <div class='report_content'>
                                $el_report->text
                            </div>
                        </div>
                        <div class='report_data'>
                            <div class='report_autor'>АВТОР ПОСТА: <span>ANGEL</span></div>
                            <div class='report_date'>$el_report->date</div>
                        </div>
                    </div>
                 </div>";
                    ?>
                 <div class="show_reports"><span class="showButton">Открыть другие отчёты</span></div>
                 <div class="hide_other_reports hideActive">
                 <?php
                        $count = 
                        $sql = 'SELECT * FROM report ORDER BY date DESC';
                        $query = $pdo->prepare( $sql );
                        $query->execute();
                        $report = $query->fetchAll(PDO::FETCH_OBJ);
                        foreach( $report as $el_report )
                        
                            echo "<div class='report'>
                                     <div class='report_container'>
                                        <div class='report_block'>
                                        <div class='report_img'>
                                            <img src='../images/report/$el_report->image' alt=''>
                                        </div>
                                         <div class='report_content'>
                                            $el_report->text
                                        </div>
                                </div>
                                <div class='report_data'>
                                    <div class='report_autor'>АВТОР ПОСТА: <span>ANGEL</span></div>
                                    <div class='report_date'>$el_report->date</div>
                                </div>
                                </div>
                            </div>";
                            
                    ?>
                 </div>
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
<script src="../scripts/report.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>  
</html>