<?php require_once ROOT . '/views/layouts/header_admin.php' ?>

<div class="content-wrapper">
    <section class="content-header">

    </section>

    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Редактировать категорию</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <div class="form-update-product">

                        <form class="form-horizontal" method="post" role="form">
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Название</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" class="form-control" id="name"
                                           value="<?= $category['name'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="slug" class="col-sm-2 control-label">Slug</label>
                                <div class="col-sm-9">
                                    <input type="text" name="slug" readonly class="form-control" id="slug"
                                           value="<?= $category['slug'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Название в ленте новостей</label>
                                <div class="col-sm-9">
                                    <input type="text" name="title" class="form-control" id="title"
                                           value="<?= $category['title'] ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="sort" class="col-sm-2 control-label">Сортировка</label>
                                <div class="col-sm-4">
                                    <input type="number" name="sort" class="form-control" id="sort"
                                           value="<?= $category['sort'] ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="is_active" class="col-sm-2 control-label">Статус</label>
                                <div class="col-sm-4">
                                    <select name="is_active" class="form-control" id="is_active">
                                        <option <?php if ($category['is_active'] == 1) echo ' selected="selected"'; ?>
                                            value="1">Активна
                                        </option>
                                        <option <?php if ($category['is_active'] == 0) echo ' selected="selected"'; ?>
                                            value="0">Не активна
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group button-group">
                                <input type="submit" name="update" value="Сохранить" class="btn btn-primary pull-right">
                                &nbsp;
                                <a href="/admin/news/category" class="btn btn-default pull-right">Отмена</a>
                            </div>
                        </form>
                    </div>
                </div><!-- /.box -->
            </div>
        </div><!-- /.row -->

    </section>
</div>

<?php require_once ROOT . '/views/layouts/footer_admin.php'?>

