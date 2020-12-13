<!DOCTYPE html>
<html lang="ru" prefix='og: http://ogp.me/ns#'>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ISKA<?= isset($meta['title']) ? $meta['title'] : null ?></title>
    <meta name="author" content="Овсийчук Дмитрий" />
    <meta name="description" content="<?= isset($meta['description']) ? $meta['description'] : null ?>" />
    <meta name="keywords"  content="<?= isset($meta['keywords']) ? $meta['keywords'] : null ?>" />
    <meta name="Resource-type" content="Document" />
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-rim-auto-match" content="none">
    <meta property="og:type" content="article">
    <meta property="og:url" content="<?= \Josantonius\Url\Url::getCurrentPage() ?>">
    <meta property="og:title" content="<?= isset($news['title']) ? $news['title'] : null ?>">
    <meta property="og:description" content="<?= isset($news['description']) ? $news['description'] : null ?>">
    <meta property="og:image" content="<?= isset($news['path']) ? \Josantonius\Url\Url::getBaseUrl() . $news['path'] . $news['img'] : null?>" />
    <link href="/template/site/img/icon/favicon.png" rel="shortcut icon">

    <link rel="stylesheet" href="/template/site/css/style.css?v.1.6">
    <link rel="stylesheet" href="/template/site/css/colorbox.css">
    <link rel="stylesheet" href="/template/site/css/galleriffic.css?v1.2" />
    <link rel="stylesheet" href="/template/site/css/screen.css">
    <link rel="stylesheet" href="/template/site/css/style-map.css">

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<!--    <script src="/template/site/js/jquery.js"></script>-->
    <script src="/template/site/js/jquery.cycle2.min.js"></script>
    <script src="/template/site/js/jquery.cycle2.carousel.min.js"></script>
    <script type="text/javascript" src="/template/site/js/main-map.js"></script>

<!--    <script src="/template/site/js/jquery.min.js"></script>-->
<!--    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>-->
    <script type="text/javascript" src="/template/site/js/jquery.colorbox.js"></script>
    <script type="text/javascript" src="/template/site/js/jquery.galleriffic.js"></script>
    <script src="/template/site/js/common.js?v.1.0.2"></script>
    <script src="/template/site/js/lightbox.js"></script>

    <script>
        $(document).ready(function(){
            $(".ajax").colorbox();
        });
    </script>
    <?php require_once ROOT . '/views/layouts/analytics.php'?>
</head>