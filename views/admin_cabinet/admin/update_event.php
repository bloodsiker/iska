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
                                        <option <?php if ($event['status'] == 1) echo ' selected="selected"'; ?> value="1">Отображен</option>
                                        <option <?php if ($event['status'] == 0) echo ' selected="selected"'; ?> value="0">Скрыт</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name_cat" class="col-sm-2 control-label">Ссылка</label>
                                <div class="col-sm-4">
                                    <input type="text" name="title" class="form-control" value="<?php echo $event['title']?>">
                                </div>
                            </div>


                            <div class="form-group button-group">
                                <input type="submit" name="update" class="btn btn-primary pull-right" value="Сохранить">
                                &nbsp;
                                <a href="" onclick="window.history.back();" type="submit" class="btn btn-success pull-right">Назад</a>

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

