<?php require_once ROOT . '/views/layouts/header.php'?>
<body>
<?php require_once ROOT . '/views/layouts/tagmanager.php'?>

<?php require_once ROOT . '/views/layouts/menu-header.php'?>

<section class="displ-slide">
    <div class="container main">
        <div class="slider-block calendar-block">
            <div class="bookmark bookmark-video">
                <span>Діяльність - наукова</span>
            </div>
            <div class="position">
                <ul class="list-position">
                    <?php if (is_array($listDocuments)): ?>
                        <?php foreach ($listDocuments as $document): ?>
                            <li>
                                <img src="/template/site/img/docs.png" width="18px" alt="docs">
                                <a href="<?=$document['path'] . $document['file']?>" class="view_doc" data-doc-id="<?= $document['id'] ?>" target="_blank"><?=$document['title']?></a>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <?php require_once ROOT . '/views/layouts/sidebar.php'?>

    </div>
</section>
<?php require_once ROOT . '/views/layouts/footer.php'?>
</body>
</html>

