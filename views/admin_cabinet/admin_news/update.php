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
                        <h3 class="box-title">Редактировать новость</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <div class="form-update-product">

                        <form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="date_create" class="col-sm-2 control-label">Дата создания</label>
                                <div class="col-sm-4">
                                    <input type="date" name="data_create" class="form-control" id="date_create" value="<?= $news['data_create'] ?>">
                                </div>
                                <label class="col-sm-1 control-label">Просмотры</label>
                                <div class="col-sm-2">
                                    <input type="text" name="views" class="form-control" readonly disabled value="<?= $news['views'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name_cat" class="col-sm-2 control-label">Статус</label>
                                <div class="col-sm-4">
                                    <select name="status" class="form-control">
                                        <option <?php if ($news['status'] == 1) echo ' selected="selected"'; ?>
                                            value="1">Отображена
                                        </option>
                                        <option <?php if ($news['status'] == 0) echo ' selected="selected"'; ?>
                                            value="0">Скрыта
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name_cat" class="col-sm-2 control-label">Категория</label>
                                <div class="col-sm-4">
                                    <select name="category_id" class="form-control">
                                        <?php foreach($categoryList as $cat): ?>
                                            <option <?php if ($news['category_id'] == $cat['id']) echo ' selected="selected"'; ?> value="<?= $cat['id'] ?>"><?= $cat['name'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Заголовок</label>
                                <div class="col-sm-9">
                                    <input type="text" name="title" class="form-control" id="title"
                                           value="<?= $news['title'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="slug" class="col-sm-2 control-label">Slug</label>
                                <div class="col-sm-9">
                                    <input type="text" readonly name="slug" class="form-control" id="slug"
                                           value="<?= $news['slug'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sort" class="col-sm-2 control-label">Лид</label>
                                <div class="col-sm-9">
                                    <textarea name="description" style="width: 100%"
                                              rows="3"><?= $news['description'] ?></textarea>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="sort" class="col-sm-2 control-label">Описание</label>
                                <div class="col-sm-9">
                                    <textarea name="text" id="comment" cols="30"
                                              rows="10"><?php echo $news['text'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-9 col-md-offset-2">
                                    <img src="<?php echo $news['path'] . $news['img']?>" width="200" alt="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="exampleInputFile">Загрузите
                                    изображения</label>
                                <div class="col-sm-9">
                                    <input type="file" data-placement="right" data-toggle="tooltip" title="Изображение 650х360 px" name="image" id="exampleInputFile">
                                </div>
                            </div>

                            <div class="form-group button-group">
                                <input type="submit" name="update" value="Сохранить" class="btn btn-primary pull-right">
                                &nbsp;
                                <a href="/admin/news" class="btn btn-default pull-right">Отмена
                                </a>
                            </div>
                        </form>
                    </div>
                </div><!-- /.box -->


                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Дополнительные изображение в слайдер новости</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <div class="form-update-product">

                        <form class="form-horizontal" method="post" role="form" enctype="multipart/form-data"
                              style="background: #fff; padding: 10px; border-radius: 3px">
                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="exampleInputFile">Добавить
                                    изображения</label>
                                <div class="col-sm-9">
                                    <input type="file" data-placement="right" data-toggle="tooltip"
                                           title="размер изображения 650х360px" name="image" id="exampleInputFile">
                                </div>
                            </div>

                            <div class="form-group button-group">
                                <input type="submit" name="add_img" value="Добавить изображение" class="btn btn-primary pull-right">
                            </div>
                        </form>

                        <div class="img-product-block clearfix">
                            <?php if (is_array($imgListNews)): ?>
                                <?php foreach ($imgListNews as $newsImg): ?>
                                    <div class="small-box img-products"
                                         style="width: 150px; height: 120px; margin: 10px; float: left; border: 1px solid #fff; position: relative; ">
                                        <img width="150"
                                             src="<?php echo $newsImg['path'] . $newsImg['img'] ?>"
                                             alt="">
                                        <a href="/admin/news/img-delete/<?php echo $newsImg['id']; ?>"
                                           onclick="return confirm('Вы уверены, что хотите удалить изображение ?')"
                                           style="display: block; position: absolute; bottom: 0; background: red; width: 100%; text-align: center; color: #fff"
                                        >Удалить<i
                                                class="glyphicon glyphicon-trash delete"></i></a>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>

                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div><!-- /.row -->

    </section>
</div>

<?php require_once ROOT . '/views/layouts/footer_admin.php'?>

