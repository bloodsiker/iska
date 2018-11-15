<?php require_once ROOT . '/views/layouts/header_admin.php' ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class="content">
        <div class="row">
            <div class="col-xs-12">


                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Список публикаций</h3>
                        <a href="" data-toggle="modal" data-target=".modal_create_news" class="btn btn-primary pull-right"><small class="glyphicon glyphicon-plus"></small>&nbsp;Создать</a>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-banners">
                            <thead>
                            <tr class="bg-orange">
                                <th>ID</th>
                                <th>Автор</th>
                                <th>Заголовок</th>
                                <th>Дата</th>
                                <th>Действия</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php if (is_array($blogList)): ?>
                                <?php foreach ($blogList as $blog): ?>
                                    <tr>
                                        <td><?php echo $blog['id']?></td>
                                        <td><?php echo $blog['author']?></td>
                                        <td><?php echo $blog['title']?></td>
                                        <td><?php echo $blog['data_create']; ?></td>
                                        <td><a href="blog/update/<?php echo $blog['id']; ?>" data-toggle="tooltip" title="Редактировать"><i
                                                    class="fa fa-pencil-square-o"></i></a>
                                            &nbsp;
                                            <a href="blog/delete/<?php echo $blog['id']; ?>" data-toggle="tooltip" title="Удалить"><i class="glyphicon glyphicon-trash delete"></i></a>
                                        </td>

                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


<div class="modal modal_create_news fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header modal-ovs">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Добавить статью</h4>
            </div>
            <div class="modal-body">
                <div class="container-modal clearfix">
                    <form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title" class="col-sm-3 control-label">Заголовок</label>
                            <div class="col-sm-9">
                                <input type="text" name="title" class="form-control" id="title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lead" class="col-sm-3 control-label">Лид</label>
                            <div class="col-sm-9">
                                <textarea name="description" id="lead" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sort" class="col-sm-3 control-label">Полный текст</label>
                            <div class="col-sm-9">
                                <textarea name="text" id="comment" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title" class="col-sm-3 control-label">Автор</label>
                            <div class="col-sm-9">
                                <input type="text" name="author" class="form-control" id="title">
                            </div>
                        </div>

                        <div class="form-group button-group">
                            <button name="create" class="btn btn-primary pull-right">Сохранить</button>
                            <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Отмена</button>
                        </div>
                    </form>
                </div>

            </div>
            <div class="modal-footer">
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php require_once ROOT . '/views/layouts/footer_admin.php'?>

