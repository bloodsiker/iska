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
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Статистика посещений сайта</h3>
                        <a href="" data-toggle="modal" data-target=".modal_create_position" class="btn btn-primary pull-right hidden"><small class="glyphicon glyphicon-plus"></small>&nbsp; Добавить регламент</a>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered table-user">
                            <thead>
                            <tr class="bg-gray">
                                <th>Дата</th>
                                <th width="100px">Уникальных посетителей</th>
                                <th width="100px">Всего просмотров</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (is_array($statistics)): ?>
                                <?php foreach ($statistics as $stats): ?>
                                    <tr>
                                        <td><?= $stats['dates'] ?></td>
                                        <td class="text-center"><?= $stats['uniq_visit'] ?></td>
                                        <td class="text-center"><?= $stats['views'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.box -->
        </div><!-- /.row -->
        <!-- Main row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<div class="modal modal_create_position fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header modal-ovs">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Добавить регламента</h4>
            </div>
            <div class="modal-body">
                <div class="container-modal clearfix">
                    <form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title" class="col-sm-3 control-label">Название регламента</label>
                            <div class="col-sm-9">
                                <input type="text" name="title" class="form-control" id="title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="addimg" class="col-sm-3 control-label">Файл pdf</label>
                            <div class="col-sm-9">
                                <input type="file" name="file" id="addimg">
                            </div>
                        </div>
                        <div class="form-group button-group">
                            <input type="submit" name="add_position" value="Сохранить" class="btn btn-primary pull-right">
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

<div class="modal modal_update_position fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header modal-ovs">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Редактировать регламента</h4>
            </div>
            <div class="modal-body">
                <div class="container-modal clearfix">
                    <form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="title_position" class="col-sm-12 control-label">Название регламента</label>
                            <div class="col-sm-12">
                                <input type="text" name="title" class="form-control" id="title_position">
                            </div>
                            <div class="col-sm-12">
                                <input type="text" name="id_position" class="form-control hidden" id="id_position">
                            </div>
                        </div>
                        <div class="form-group button-group">
                            <input type="submit" name="update_position" value="Сохранить" class="btn btn-primary pull-right">
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

