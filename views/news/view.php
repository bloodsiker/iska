<!DOCTYPE html>
<html lang="en" prefix='og: http://ogp.me/ns#'>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ISKA <?=$title?></title>
    <meta name="author" content="Овсийчук Дмитрий" />
    <meta name="description" content="" />
    <meta name="keywords"  content="" />
    <meta name="Resource-type" content="Document" />
    <meta property="og:type" content="article">
    <meta property="og:url" content="http://<?=$_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']?>">
    <meta property="og:title" content="<?=$title?>">
    <meta property="og:description" content="">
    <meta property="og:image" content="http://iska.com.ua<?=$news['path'] . $news['img']?>" />
    <link href="/template/site/img/icon/favicon.png" rel="shortcut icon">
    <link rel="stylesheet" href="/template/site/css/style.css">
    <link rel="stylesheet" href="/template/site/css/colorbox.css">

    <link href="/template/site/css/galleriffic.css" rel="stylesheet" type="text/css" />
    <link href="/template/site/css/main.css" rel="stylesheet" type="text/css" />

    <script src="/template/site/js/jquery.js"></script>
    <script src="/template/site/js/jquery.cycle2.min.js"></script>
    <script src="/template/site/js/jquery.cycle2.carousel.min.js"></script>

    <script type="text/javascript" src="/template/site/js/jquery-1.5.2.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
    <script type="text/javascript" src="/template/site/js/jquery.colorbox.js"></script>
    <script type="text/javascript" src="/template/site/js/jquery.history.js"></script>
    <script type="text/javascript" src="/template/site/js/jquery.galleriffic.js"></script>
    <script type="text/javascript" src="/template/site/js/jquery.opacityrollover.js"></script>
    <script type="text/javascript" src="/template/site/js/main.js"></script>

    <script>
        $(document).ready(function () {

            $(".ajax").colorbox();

        });
    </script>
    <?php include_once $_SERVER['DOCUMENT_ROOT'] . '/views/layouts/analytics.php'?>
</head>
<body>
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/views/layouts/tagmanager.php'?>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/views/layouts/menu-header.php'?>

<section class="displ-slide">
    <div class="container main">
        <div class="slider-block">
            <div class="new-photo-gallery">

                <div class="content">
                    <div class="slideshow-container">
                        <!--<div id="controls" class="controls"></div>-->
                        <div id="loading" class="loader"></div>
                        <div id="slideshow" class="slideshow"></div>
                    </div>

                </div>
                <div style="clear: both;"></div>

                <div class="navigation-container">
                    <div id="thumbs" class="navigation">
                        <a class="pageLink prev" style="visibility: hidden;" href="#" title="Previous Page"></a>

                        <ul class="thumbs">
                            <li>
                                <a class="thumb" name="photo3" href="<?=$news['path'] . $news['img']?>" title="photo">
                                    <img src="<?=$news['path'] . $news['img']?>" width="90" alt="Title #1" />
                                </a>
                            </li>
                            <?php if (is_array($photoByNews)): ?>
                                <?php foreach ($photoByNews as $photo): ?>
                                    <li>
                                        <a class="thumb" name="photo3" href="<?= $photo['path'] . $photo['img'] ?>"
                                           title="photo">
                                            <img src="<?= $photo['path'] . $photo['img'] ?>" width="90" alt="Title #1"/>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            <?php endif; ?>

                        </ul>
                        <a class="pageLink next" style="visibility: hidden;" href="#" title="Next Page"></a>
                    </div>
                </div>
                <div style="clear: both;"></div>
            </div>

            <div class="news scientific">
                <div class="news-description">
                    <h1><?= $news['title']?></h1>
                    <hr>
                    <div class="news-breadcrumb-title" style="">
                        <span><strong class="color-purpl">НОВИНИ</strong></span>&nbsp;&nbsp;&nbsp;<a href="/news/<?= $news['category_slug']?>"><?= $news['category']?></a>
                    </div>
                    <?= $news['text']?>
                </div>
            </div>

        </div>
        <?php require_once ROOT . '/views/layouts/sidebar.php'?>
    </div>
</section>

<?php require_once ROOT . '/views/layouts/footer.php'?>

</body>
</html>