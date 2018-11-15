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
    <link href="/template/site/css/imagehover.min.css" rel="stylesheet" type="text/css" />



    <script src="/template/site/js/jquery.js"></script>
    <script src="/template/site/js/jquery.cycle2.min.js"></script>
    <script src="/template/site/js/jquery.cycle2.carousel.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
    <script type="text/javascript" src="/template/site/js/jquery.colorbox.js"></script>


    <script>
        $(document).ready(function(){
            //Examples of how to assign the Colorbox event to elements

            $(".ajax").colorbox();
            $(".youtube").colorbox({iframe:true, innerWidth:840, innerHeight:490});
            $(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});

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
                <span>Архів - відеогалерея </span>
            </div>
            <div class="block-video">

                <?php if (is_array($videoList)): ?>
                    <?php foreach ($videoList as $video): ?>
                        <figure class="view-video imghvr-shutter-out-vert" style="background: rgba(80, 28, 128, 0.5);">
                            <img src="<?=$video['path'] . $video['img']?>" alt="">
                            <figcaption>
                                <h3>ISKA</h3>
                                <p><?=$video['title']?></p>
                            </figcaption>
                            <a href="<?=$video['url']?>" class="youtube"></a>
                        </figure>

                    <?php endforeach; ?>
                <?php endif; ?>


                <div class="clearfix"></div>
                <div style="height: 200px"></div>
            </div>

        </div>

        <?php require_once ROOT . '/views/layouts/sidebar.php'?>

        <div class="sidebar">
            <ul>
                <li><a class="<?php if(Url::Is_url($_SERVER['REQUEST_URI'], '/archive-foto')) echo 'sidebar-active'?>" href="archive-foto">ФОТОГАЛЕРЕЯ</a></li>
                <li><a class="<?php if(Url::Is_url($_SERVER['REQUEST_URI'], '/archive-video')) echo 'sidebar-active'?>" href="archive-video">ВІДЕОГАЛЕРЕЯ</a></li>
            </ul>
        </div>

    </div>
</section>



<?php require_once ROOT . '/views/layouts/footer.php'?>

</body>
</html>