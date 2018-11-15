<?php require_once ROOT . '/views/layouts/header_admin.php' ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Редактировать видео => <?=$video['title']?></h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <div class="form-update-product" style="margin-top: 30px">

                        <form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="archive" class="col-sm-2 control-label">Архив</label>
                                <div class="col-sm-3">
                                    <select name="archive" class="form-control" id="archive">
                                        <option <?php if ($video['archive'] == '0') echo ' selected="selected"'; ?> value="0">В видео галерею</option>
                                        <option <?php if ($video['archive'] == '1') echo ' selected="selected"'; ?> value="1">В архив</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Название</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" class="form-control" id="title"
                                           value="<?php echo $video['title'] ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="url" class="col-sm-2 control-label">Url youtube</label>
                                <div class="col-sm-10">
                                    <input type="text" name="url" class="form-control" id="url"
                                           value="<?php echo $video['url'] ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="sort" class="col-sm-2 control-label">Сортировка</label>
                                <div class="col-sm-2">
                                    <input type="text" name="sort" class="form-control" id="sort"
                                           value="<?php echo $video['sort'] ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-9 col-md-offset-2">
                                    <img src="<?php echo $video['path'] . $video['img']?>" width="200" alt="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="exampleInputFile">Изменить
                                    изображения</label>
                                <div class="col-sm-9">
                                    <input type="file" data-placement="right" data-toggle="tooltip" title="Изображение 780х440 px" name="image" id="exampleInputFile">
                                </div>
                            </div>

                            <div class="form-group button-group">
                                <button name="update" class="btn btn-primary pull-right">Сохранить</button>
                                &nbsp;
                                <a href="" onclick="window.history.back();" class="btn btn-default pull-right">Отмена
                                </a>
                            </div>
                        </form>
                    </div>
                </div><!-- /.box -->
            </div>
        </div><!-- /.row -->
        <!-- Main row -->


    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<?php require_once ROOT . '/views/layouts/footer_admin.php'?>

