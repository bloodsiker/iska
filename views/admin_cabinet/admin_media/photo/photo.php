<?php require_once ROOT . '/views/layouts/header_admin.php' ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class="content">
        <div class="row">
            <div class="col-xs-12">


                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Список фото-альбомов</h3>
                        <a href="" data-toggle="modal" data-target=".modal_create_news" class="btn btn-primary pull-right"><small class="glyphicon glyphicon-plus"></small>&nbsp;Создать</a>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered table-banners no_sort">
                            <thead>
                            <tr class="bg-orange">
                                <th>Обложка</th>
                                <th width="30px">ID</th>
                                <th>Название альбома</th>
                                <th width="30px">Сортировка</th>
                                <th width="70px">Действия</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php if (is_array($albumList)): ?>
                                <?php foreach ($albumList as $album): ?>
                                    <tr>
                                        <td width="140"><img width="140" src="<?php echo $album['path'] . $album['img']?>" alt=""></td>
                                        <td><?php echo $album['id']?></td>
                                        <td><?php echo $album['title']?></td>
                                        <td style="text-align: center"><?php echo $album['sort']?></td>
                                        <td><a href="photo/update/<?php echo $album['id']; ?>" data-toggle="tooltip" title="Редактировать"><i
                                                    class="fa fa-pencil-square-o"></i></a>
                                            &nbsp;
                                            <a href="photo/<?php echo $album['id']; ?>" data-toggle="tooltip" title="Добавить фото"><i
                                                    class="glyphicon glyphicon-plus"></i></a>
                                            &nbsp;
                                            <a href="photo/delete-album/<?php echo $album['id']; ?>" onclick="return confirm('Вы уверены, что хотите удалить фото-альбом ?')" data-toggle="tooltip" title="Удалить"><i class="glyphicon glyphicon-trash delete"></i></a>
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
                <h4 class="modal-title">Добавить альбом</h4>
            </div>
            <div class="modal-body">
                <div class="container-modal clearfix">
                    <form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title" class="col-sm-3 control-label">Название альбома</label>
                            <div class="col-sm-9">
                                <input type="text" name="title" class="form-control" id="title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sort" class="col-sm-3 control-label">Порядок сортировки</label>
                            <div class="col-sm-3">
                                <input type="text" name="sort" class="form-control" id="sort">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="addimg" class="col-sm-3 control-label">Изображения для обложки</label>
                            <div class="col-sm-9">
                                <input type="file" data-placement="right" data-toggle="tooltip" title="Изображение 660х415 px" name="image" id="addimg">
                            </div>
                        </div>
                        <div class="form-group button-group">
                            <button name="add_album" class="btn btn-primary pull-right">Сохранить</button>
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

