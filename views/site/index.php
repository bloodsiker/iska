<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ISKA</title>
    <meta name="author" content="Овсийчук Дмитрий" />
    <meta name="description" content="Аматорський та професійний кікбоксинг. Збірна команда України. Міжнародні та всеукраїнські чемпіонати. Каледнар. Клуби. Новини. " />
    <meta name="keywords"  content="кікбоксинг, федерація кікбоксингу, федерація кікбоксингу ISKA, ISKA, ИСКА," />
    <meta name="Resource-type" content="Document" />
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-rim-auto-match" content="none">
    <link href="/template/site/img/icon/favicon.png" rel="shortcut icon">

    <link rel="stylesheet" href="/template/site/css/style.css?v.1.2">
    <link rel="stylesheet" href="/template/site/css/colorbox.css">
    <link rel="stylesheet" href="/template/site/css/screen.css">
    <script src="/template/site/js/jquery.js"></script>
    <script src="/template/site/js/jquery.cycle2.min.js"></script>
    <script src="/template/site/js/jquery.cycle2.carousel.min.js"></script>

    <script src="/template/site/js/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
    <script type="text/javascript" src="/template/site/js/jquery.colorbox.js"></script>
    <script src="/template/site/js/common.js"></script>
    <script src="/template/site/js/lightbox.js"></script>

    <script>
        $(document).ready(function(){
            $(".ajax").colorbox();
            $(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
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
        <div class="slider-block">
            <div class="new-slider">
                <div class="main-block">

                    <div class="gallery">
                        <?php if (isset($listBanners[0])): ?>
                            <div class="gallery__pic">
                                <a href="<?= $listBanners[0]['link'] ?>">
                                    <img src="<?= $listBanners[0]['path'] . $listBanners[0]['img'] ?>" alt="">
                                </a>
                                <a href="<?= $listBanners[0]['link'] ?>"
                                   class="gallery__link-text"><?= $listBanners[0]['text'] ?></a>
                            </div>
                        <?php endif; ?>

                        <ul class="gallery__navi js-gallery js-gallery-move">

                            <?php if (is_array($listBanners)): ?>
                                <?php foreach ($listBanners as $banner): ?>
                                    <li data-item="<?=$banner['path'] . $banner['img']?>">
                                        <img src="<?=$banner['path'] . $banner['img']?>" width="132"
                                             alt="<?=$banner['img']?>"><i></i>
                                        <a href="<?=$banner['link']?>"><?=$banner['text']?></a>
                                    </li>
                                <?php endforeach; ?>
                            <?php endif; ?>

                        </ul>
                    </div>

                </div>

            </div>

            <div class="news-index">
                <div class="bookmark">
                    <span>останні новини</span>
                </div>

                <div class="row-block-news">


                    <?php if (is_array($listNews)): ?>
                        <?php foreach ($listNews as $news): ?>
                            <div class="news-block">
                                <div class="news-block-image">
                                    <div class="news-date"><span><?= \App\components\Functions::cropDay($news['data_create']);?></span>
                                        <br>
                                        <?= \App\components\Functions::replaceNameMonths(\App\components\Functions::cropMonth($news['data_create']))?></div>
                                    <img src="<?=$news['path'] . $news['img']?>" width="320"
                                         alt="<?=$news['title']?>">
                                    <a href="/news/<?=$news['category']?>/<?=$news['id']?>">Читати повністю</a>
                                </div>
                                <div class="news-breadcrumb">
                                    <span><strong class="color-purpl">НОВИНИ</strong></span>&nbsp;&nbsp;&nbsp;<span><?= \App\app\Models\News::getNameCategory($news['category'])?></span>
                                </div>
                                <div class="new-title">
                                    <h2><a href="/news/<?=$news['category']?>/<?=$news['id']?>"><?=$news['title']?></a></h2>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>

                </div>

            </div>
        </div>

        <!-- sidebar -->
        <div class="sidebar">
            <ul>
                <li><a href="/history">історія розвитку</a></li>
                <li><a href="http://www.iskaworldhq.com/" target="_blank">Міжнародний сайт iska</a></li>
                <li style="display: none"><a href="">міністерство молоді та спорту України</a></li>
                <li style="display: none"><a href="">законодавство України</a></li>
            </ul>

            <div class="congratulation" >
                <div class="bookmark">
                    <span>СЛОВО ПРЕЗИДЕНТА ФЕДЕРАЦІЇ</span>
                </div>
                <div class="congratulation-content" style="font-style: italic">
                    <h2><?=$congratulation['title']?></h2>
                    <img src="/template/site/img/congrats.jpg" align="right" alt="congratulation">
                    <?=$congratulation['text']?>
                </div>
            </div>

            <div style="text-align: center; padding: 10px 30px">
                <img src="/template/site/img/motto.jpg" alt="motto">
            </div>
            <div style="text-align: center; padding:10px 30px">
                <img src="/template/site/img/chemp_world.jpg" width="100%" alt="chemp_world">
            </div>

        </div>

        <div class="clearfix"></div>
    </div>
</section>

<?php require_once ROOT . '/views/layouts/footer.php'?>

</body>
</html>