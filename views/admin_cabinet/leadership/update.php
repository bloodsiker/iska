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
                        <h3 class="box-title">Редактировать руководителя</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <div class="form-update-product">

                        <form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name_cat" class="col-sm-2 control-label">Статус</label>
                                <div class="col-sm-4">
                                    <select name="status" class="form-control">
                                        <option <?php if ($item['status'] == 1) echo ' selected="selected"'; ?>
                                            value="1">Отображена
                                        </option>
                                        <option <?php if ($item['status'] == 0) echo ' selected="selected"'; ?>
                                            value="0">Скрыта
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Имя, Фамилия</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" class="form-control" id="name"
                                           value="<?= $item['name'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="position" class="col-sm-2 control-label">Посада</label>
                                <div class="col-sm-9">
                                    <input type="text" name="position" class="form-control" id="position"
                                           value="<?= $item['position'] ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-9 col-md-offset-2">
                                    <img src="<?= $item['photo']?>" width="200" alt="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="exampleInputFile">Загрузите изображения</label>
                                <div class="col-sm-9">
                                    <input type="file" data-placement="right" data-toggle="tooltip" title="Изображение 500х500 px" name="image" id="exampleInputFile">
                                </div>
                            </div>

                            <div class="form-group button-group">
                                <input type="submit" name="update" value="Сохранить" class="btn btn-primary pull-right">
                                &nbsp;
                                <a href="/admin/federation/leadership" class="btn btn-default pull-right">Отмена
                                </a>
                            </div>
                        </form>
                    </div>
                </div><!-- /.box -->
            </div>
        </div><!-- /.row -->

    </section>
</div>

<?php require_once ROOT . '/views/layouts/footer_admin.php'?>

