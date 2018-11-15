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
                        <h3 class="box-title">Редактировать публикацию </h3>
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
                                <label for="title" class="col-sm-2 control-label">Заголовок</label>
                                <div class="col-sm-9">
                                    <input type="text" name="title" class="form-control" id="title"
                                           value="<?php echo $blog['title'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sort" class="col-sm-2 control-label">Лид</label>
                                <div class="col-sm-9">
                                    <textarea name="description" id="lead" cols="30"
                                              rows="10"><?php echo $blog['description'] ?></textarea>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="sort" class="col-sm-2 control-label">Описание</label>
                                <div class="col-sm-9">
                                    <textarea name="text" id="comment" cols="30"
                                              rows="10"><?php echo $blog['text'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Автор</label>
                                <div class="col-sm-9">
                                    <input type="text" name="author" class="form-control" id="title"
                                           value="<?php echo $blog['author'] ?>">
                                </div>
                            </div>


                            <div class="form-group button-group">
                                <button name="update" class="btn btn-primary pull-right">Сохранить</button>
                                &nbsp;
                                <a href="/admin/news" class="btn btn-default pull-right">Отмена
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

