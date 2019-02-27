<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ISKA - Міжнародні досягнення</title>
    <meta name="author" content="Овсийчук Дмитрий" />
    <meta name="description" content="" />
    <meta name="keywords"  content="" />
    <meta name="Resource-type" content="Document" />
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-rim-auto-match" content="none">
    <link href="/template/site/img/icon/favicon.png" rel="shortcut icon">
    <link rel="stylesheet" href="/template/site/css/style.css">
    <link rel="stylesheet" href="/template/site/css/colorbox.css">

    <link href="/template/site/css/galleriffic.css" rel="stylesheet" type="text/css" />
    <link href="/template/site/css/main.css" rel="stylesheet" type="text/css" />

    <script src="/template/site/js/jquery.js"></script>
    <script src="/template/site/js/jquery.cycle2.min.js"></script>
    <script src="/template/site/js/jquery.cycle2.carousel.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
    <script type="text/javascript" src="/template/site/js/jquery.colorbox.js"></script>


    <script>
        $(document).ready(function(){
            //Examples of how to assign the Colorbox event to elements

            $(".ajax").colorbox();

        });
    </script>


    <?php require_once ROOT . '/views/layouts/analytics.php'?>
</head>
<body>
<?php require_once ROOT . '/views/layouts/tagmanager.php'?>
<!-- HEAD AND MENU  -->
<?php require_once ROOT . '/views/layouts/menu-header.php'?>



<section class="displ-slide">
    <div class="container main">
        <div class="slider-block calendar-block">
            <div class="bookmark bookmark-video">
                <span>Міжнародні досягнення</span>
            </div>
            <div class="position">
                <?=$achievement['text']?>
            </div>
        </div>

        <?php require_once ROOT . '/views/layouts/sidebar.php'?>

        <div class="sidebar">
            <ul>
                <?php if (is_array($achievementCategory)): ?>
                    <?php foreach ($achievementCategory as $category): ?>
                        <li>
                            <a class="<?= App\components\Url::isActive("/achievement/international/{$category['alias']}", 'sidebar-active')?>"
                               href="/achievement/international/<?=$category['alias']?>"><?=$category['title']?></a></li>

                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>

    </div>
</section>



<?php require_once ROOT . '/views/layouts/footer.php'?>

</body>
</html>