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
        $(document).ready(function () {
            //Examples of how to assign the Colorbox event to elements

            $(".ajax").colorbox();

        });
    </script>


    <?php include_once ROOT . '/views/layouts/analytics.php'?>
</head>
<body>
<?php include_once ROOT . '/views/layouts/tagmanager.php'?>

<!-- HEAD AND MENU  -->
<?php include_once ROOT . '/views/layouts/menu-header.php'?>


<section class="displ-slide">
    <div class="container main">
        <div class="slider-block">
            <div class="bookmark bookmark-video">
                <span><?=$bookmark; ?></span>
            </div>

            <ul class="news-list">

                <?php if (is_array($newsList)): ?>
                    <?php foreach ($newsList as $news): ?>
                        <li>
                            <div class="news__title">
                                <a href="/news/<?=$news['category']?>/<?=$news['id']?>"><?=$news['title']?></a>
                            </div>
                            <div class="news__content">
                                <div class="new__pic">
                                    <a href="/news/<?=$news['category']?>/<?=$news['id']?>"><img src="<?=$news['path'] . $news['img']?>" width="180px" alt="iska"></a>
                                </div>
                                <time><?= \App\components\Functions::replaceTypeDate($news['data_create'])?></time>
                                <p><?=$news['description']?></p>
                                <div class="clearfix"></div>
                            </div>

                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>

        </div>
        <?php require_once ROOT . '/views/layouts/sidebar.php'?>

    </div>
</section>






<?php require_once ROOT . '/views/layouts/footer.php'?>


</body>
</html>