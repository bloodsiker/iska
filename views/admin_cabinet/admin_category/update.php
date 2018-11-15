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
                        <h3 class="box-title">Изменить категорию</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <form role="form" action="" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Статус</label>
                                <select name="status" class="form-control">
                                    <option <?php if ($categoryId['status'] == 1) echo ' selected="selected"'; ?> value="1">Отображен</option>
                                    <option <?php if ($categoryId['status'] == 0) echo ' selected="selected"'; ?> value="0">Скрыт</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Название</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-folder"></i></span>
                                    <input type="text" name="name" class="form-control" value="<?php echo $categoryId['name']?>" placeholder="Название">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Порядок</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-sort-amount-asc"></i></span>
                                    <input type="text"  name="sort" class="form-control" value="<?php echo $categoryId['sort']?>" placeholder="Порядок">
                                </div>
                            </div>

                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <a href="/admin/category" type="submit" class="btn btn-success">Назад</a>

                            <input type="submit" name="update" class="btn btn-primary" value="Сохранить">
                        </div>
                    </form>
                </div><!-- /.box -->
            </div>
        </div><!-- /.row -->
        <!-- Main row -->


    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<?php require_once ROOT . '/views/layouts/footer_admin.php'?>

