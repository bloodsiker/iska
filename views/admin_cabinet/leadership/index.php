<?php require_once ROOT . '/views/layouts/header_admin.php' ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class="content">
        <div class="row">
            <div class="col-xs-12">


                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Список руководителей</h3>
                        <a href="" data-toggle="modal" data-target=".modal_create_news" class="btn btn-primary pull-right"><small class="glyphicon glyphicon-plus"></small>&nbsp;Создать</a>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-banners">
                            <thead>
                            <tr class="bg-orange">
                                <th>Фото</th>
                                <th>ID</th>
                                <th>Имя</th>
                                <th>Посада</th>
                                <th>Статус</th>
                                <th width="20px"></th>
                                <th width="20px"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (is_array($list)): ?>
                                <?php foreach ($list as $item): ?>
                                    <tr>
                                        <td width="120"><img width="120" src="<?= $item['photo'] ?>" alt=""></td>
                                        <td><?php echo $item['id']?></td>
                                        <td><?php echo $item['name']?></td>
                                        <td><?= $item['position']?></td>
                                        <td><div class="<?= App\app\Models\Leadership::getColor($item['status'])?>"><?= App\app\Models\Leadership::getStatus($item['status'])?></div></td>
                                        <td class="text-center">
                                            <a href="/admin/federation/leadership/update/<?php echo $item['id']; ?>" data-toggle="tooltip" title="Редактировать">
                                                <i class="fa fa-pencil-square-o"></i>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href="/admin/federation/leadership/delete/<?php echo $item['id']; ?>" data-toggle="tooltip" title="Удалить">
                                                <i class="glyphicon glyphicon-trash delete"></i>
                                            </a>
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
                <h4 class="modal-title">Добавить руководителя</h4>
            </div>
            <div class="modal-body">
                <div class="container-modal clearfix">
                    <form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">Статус</label>
                            <div class="col-sm-4">
                                <select name="status" class="form-control" id="status">
                                    <option value="1">Отображать</option>
                                    <option value="0">Скрыть</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-3 control-label">Имя</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" class="form-control" id="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="position" class="col-sm-3 control-label">Посада</label>
                            <div class="col-sm-9">
                                <input type="text" name="position" class="form-control" id="position">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="addimg" class="col-sm-3 control-label">Загрузите изображения</label>
                            <div class="col-sm-9">
                                <input type="file" data-placement="right" data-toggle="tooltip" title="Изображение 500х500 px" name="image" id="addimg">
                            </div>
                        </div>
                        <div class="form-group button-group">
                            <input type="submit" name="create" value="Сохранить" class="btn btn-primary pull-right">
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

