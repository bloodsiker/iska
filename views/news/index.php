<?php require_once ROOT . '/views/layouts/header.php'?>
<body>
<?php include_once ROOT . '/views/layouts/tagmanager.php'?>

<?php include_once ROOT . '/views/layouts/menu-header.php'?>

<section class="displ-slide">
    <div class="container main">
        <div class="slider-block">
            <div class="bookmark bookmark-video">
                <span><?= $bookmark; ?></span>
            </div>

            <ul class="news-list">

                <?php if (is_array($newsList)): ?>
                    <?php foreach ($newsList as $news): ?>
                        <li>

                            <div class="news__content">
                                <div class="new__pic">
                                    <a href="/news/<?=$news['category']?>/<?=$news['id'].'-'.$news['slug'] ?>"><img src="<?=$news['path'] . $news['img']?>" width="180px" alt="iska"></a>
                                </div>
                                <div class="news__title">
                                    <a href="/news/<?=$news['category']?>/<?=$news['id'].'-'.$news['slug'] ?>"><?=$news['title']?></a>
                                </div>
                                <time><?= \App\components\Functions::replaceTypeDate($news['data_create'])?></time>
                                <p><?=$news['description']?></p>
                                <div class="clearfix"></div>
                            </div>

                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>

            </ul>

            <div class="pagination-container">
                <?= $pagination->get(); ?>
            </div>

        </div>

        <?php require_once ROOT . '/views/layouts/sidebar.php'?>

    </div>
</section>

<?php require_once ROOT . '/views/layouts/footer.php'?>

</body>
</html>