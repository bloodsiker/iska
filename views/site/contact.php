<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ISKA <?=$title?></title>
    <meta name="author" content="Овсийчук Дмитрий" />
    <meta name="description" content="" />
    <meta name="keywords"  content="" />
    <meta name="Resource-type" content="Document" />
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-rim-auto-match" content="none">
    <link href="/template/site/img/icon/favicon.png" rel="shortcut icon">
    <link rel="stylesheet" href="/template/site/css/style.css?v.1.1">
    <link rel="stylesheet" href="/template/site/css/colorbox.css">

    <script src="/template/site/js/jquery.js"></script>
    <script src="/template/site/js/jquery.cycle2.min.js"></script>
    <script src="/template/site/js/jquery.cycle2.carousel.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
    <script type="text/javascript" src="/template/site/js/jquery.colorbox.js"></script>


    <script>
        $(document).ready(function(){
            $(".ajax").colorbox();
        });
    </script>
    <?php require_once ROOT . '/views/layouts/analytics.php'?>
</head>
<body>
<?php require_once ROOT . '/views/layouts/tagmanager.php'?>

<?php require_once ROOT . '/views/layouts/menu-header.php'?>

<section class="displ-slide">
    <div class="container main">
        <div class="slider-block calendar-block">
            <div class="bookmark bookmark-video">
                <span>Наші контакти</span>
            </div>
            <div class="position">

                <p style="font-size: 20px">тел. +38(067)746-39-83</p>
                <p style="font-size: 20px">тел. +38(063)592-01-01</p>
                <p style="font-size: 20px">email: info@iska.com.ua</p>

                <div class="clearfix"></div>
                <div style="height: 200px"></div>
            </div>

        </div>

        <?php require_once ROOT . '/views/layouts/sidebar.php'?>

    </div>
</section>

<?php require_once ROOT . '/views/layouts/footer.php'?>

</body>
</html>