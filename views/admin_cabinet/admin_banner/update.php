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
                        <h3 class="box-title">Редактировать баннер</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <div class="form-update-product">


                        <?php if (isset($errors) && is_array($errors)): ?>
                            <ul>
                                <?php foreach ($errors as $error): ?>
                                    <li> - <?php echo $error; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>

                        <form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name_cat" class="col-sm-2 control-label">Статус</label>
                                <div class="col-sm-4">
                                    <select name="status" class="form-control">
                                        <option <?php if ($banner['status'] == 1) echo ' selected="selected"'; ?> value="1">Отображен</option>
                                        <option <?php if ($banner['status'] == 0) echo ' selected="selected"'; ?> value="0">Скрыт</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name_cat" class="col-sm-2 control-label">Ссылка</label>
                                <div class="col-sm-4">
                                    <input type="text" name="link" class="form-control" value="<?php echo $banner['link']?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="sort" class="col-sm-2 control-label">Порядок</label>
                                <div class="col-sm-4">
                                    <input type="text" name="sort" class="form-control" value="<?php echo $banner['sort']?>" placeholder="Порядок">
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="sort" class="col-sm-2 control-label">Описание</label>
                                <div class="col-sm-9">
                                    <textarea name="text" cols="90"
                                              rows="10"><?php echo $banner['text'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-9 col-md-offset-2">
                                    <img src="<?php echo $banner['path'] . $banner['img']?>" width="250" alt="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="exampleInputFile">Загрузите
                                    изображения</label>
                                <div class="col-sm-9">
                                    <input type="file" data-placement="right" data-toggle="tooltip" title="Изображение 1920х1200 px" name="image" id="exampleInputFile">
                                </div>
                            </div>

                            <div class="form-group button-group">
                                <input type="submit" name="update" class="btn btn-primary pull-right" value="Сохранить">
                                &nbsp;
                                <a href="/admin/index" type="submit" class="btn btn-success pull-right">Назад</a>

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

