<?php require_once ROOT . '/views/layouts/header.php'?>
<script>
    $(document).ready(function(){
        $(".view_doc").colorbox({iframe:true, innerWidth:'80%', innerHeight:'90%'});
    });
</script>
<body>
<?php require_once ROOT . '/views/layouts/tagmanager.php'?>

<?php require_once ROOT . '/views/layouts/menu-header.php'?>

<section class="displ-slide">
    <div class="container main">
        <div class="slider-block calendar-block">
            <div class="bookmark bookmark-video">
                <span>Правила змагань</span>
            </div>
            <div class="position">
                <ul class="list-position">
                    <?php if (is_array($listPosition)): ?>
                        <?php foreach ($listPosition as $position): ?>
                            <li>
                                <img src="/template/site/img/docs.png" width="18px" alt="docs">
                                <a href="<?=$position['path'] . $position['file']?>" class="view_doc" data-doc-id="<?= $position['id'] ?>" target="_blank"><?=$position['title']?></a>
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

