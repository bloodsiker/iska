<?php require_once ROOT . '/views/layouts/header.php'?>
<body>
<?php require_once ROOT . '/views/layouts/tagmanager.php'?>
<!-- HEAD AND MENU  -->
<?php require_once ROOT . '/views/layouts/menu-header.php'?>



<section class="displ-slide">
    <div class="container main">
        <div class="slider-block calendar-block">
            <div class="bookmark bookmark-video">
                <span>Історія розвитку ФЕДЕРАЦІЇ КІКБОКСИНГУ УКРАЇНИ «ІСКА» </span>
            </div>
            <div class="position scientific">
                <?=$history['text']?>
            </div>
        </div>
        <?php require_once ROOT . '/views/layouts/sidebar.php'?>

    </div>
</section>


<?php require_once ROOT . '/views/layouts/footer.php'?>

</body>
</html>