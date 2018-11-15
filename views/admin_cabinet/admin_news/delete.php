<?php require_once ROOT . '/views/layouts/header_admin.php' ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Удалить новость</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <h4>Вы точно хотите удалить новость  <span class="bg-red" style="padding: 2px 10px"><?= $news['title']?></span> ?</h4>

                        <div class="form-group">
                            <div class="col-sm-3">
                                <img src="<?php echo $news['path'] . $news['img'] ?>" width="200" alt="">
                            </div>
                        </div>

                        <div class="form-group">
                            <form method="post" action="">
                                <a href="/admin/news" class="btn btn-reddit">Отмена</a>
                                <input type="submit" class="btn btn-adn" name="delete" value="Удалить"/>
                            </form>
                        </div>

                    </div><!-- /.box-body -->


                </div><!-- /.box -->
            </div>
        </div><!-- /.row -->
        <!-- Main row -->


    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<?php require_once ROOT . '/views/layouts/footer_admin.php'?>

