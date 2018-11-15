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
                        <h3 class="box-title">Федерація -> Положення -> Спортивні клуби (<?= $region['name_list'] ?>)</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="box">
                    <div class="box-body">
                        <form action="" method="post" class="form-horizontal">
                            <div class="form-group">
                                <div class="col-sm-11">
                                    <input type="text" name="representative" class="form-control" value="<?= $region['representative'] ?>">
                                </div>
                                <input type="hidden" name="edit_representative">
                                <div class="col-sm-1">
                                    <button class="btn btn-primary pull-right">Изменить</button>
                                </div>
                            </div>

                        </form>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.box -->
            <div class="col-md-6">
                <div class="box">
                    <div class="box-header">
                        <a href="" data-toggle="modal" data-target=".modal_create_club" class="btn btn-primary pull-right"><small class="glyphicon glyphicon-plus"></small>&nbsp; Добавити спортивний клуб</a>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered table-user">
                            <thead>
                            <tr class="bg-gray">
                                <th width="50px">ID</th>
                                <th>Місто</th>
                                <th>Спортивний клуб</th>
                                <th width="50px"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (is_array($regionClubs)): ?>
                                <?php foreach ($regionClubs as $club): ?>
                                <form action="" method="post">
                                    <tr>
                                        <td><?=$club['id']; ?></td>
                                        <td><?=$club['city']; ?></td>
                                        <td><?=$club['club']; ?></td>
                                        <td>
                                            <input type="hidden" name="delete_club" value="true">
                                            <input type="hidden" name="id" value="<?=$club['id']; ?>">
                                            <button data-toggle="tooltip" title="Удалить" onclick="return confirm('Вы уверены что хотите удалить?') ? true : false;">
                                                <i class="glyphicon glyphicon-trash delete"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </form>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.box -->
            <div class="col-md-3">
                <div class="box">
                    <div class="box-header">
                        <a href="" data-toggle="modal" data-target=".modal_add_phone" class="btn btn-primary pull-right"><small class="glyphicon glyphicon-plus"></small>&nbsp; Добавити телефон</a>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered table-user">
                            <thead>
                            <tr class="bg-gray">
                                <th width="50px">ID</th>
                                <th>Тнлефон</th>
                                <th width="50px"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (is_array($regionPhones)): ?>
                                <?php foreach ($regionPhones as $phone): ?>
                                    <form action="" method="post">
                                        <tr>
                                            <td><?=$phone['id']; ?></td>
                                            <td><?=$phone['phone']; ?></td>
                                            <td>
                                                <input type="hidden" name="delete_phone" value="true">
                                                <input type="hidden" name="id" value="<?=$phone['id']; ?>">
                                                <button data-toggle="tooltip" title="Удалить" onclick="return confirm('Вы уверены что хотите удалить?') ? true : false;">
                                                    <i class="glyphicon glyphicon-trash delete"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </form>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.box -->
            <div class="col-md-3">
                <div class="box">
                    <div class="box-header">
                        <a href="" data-toggle="modal" data-target=".modal_add_email" class="btn btn-primary pull-right"><small class="glyphicon glyphicon-plus"></small>&nbsp; Добавити E-mail</a>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered table-user">
                            <thead>
                            <tr class="bg-gray">
                                <th width="50px">ID</th>
                                <th>E-mail</th>
                                <th width="50px"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (is_array($regionEmails)): ?>
                                <?php foreach ($regionEmails as $email): ?>
                                    <form action="" method="post">
                                        <tr>
                                            <td><?=$email['id']; ?></td>
                                            <td><?=$email['email']; ?></td>
                                            <td>
                                                <input type="hidden" name="delete_email" value="true">
                                                <input type="hidden" name="id" value="<?=$email['id']; ?>">
                                                <button data-toggle="tooltip" title="Удалить" onclick="return confirm('Вы уверены что хотите удалить?') ? true : false;">
                                                    <i class="glyphicon glyphicon-trash delete"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </form>
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

<div class="modal modal_create_club fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header modal-ovs">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Добавить клуб</h4>
            </div>
            <div class="modal-body">
                <div class="container-modal clearfix">
                    <form action="" class="form-horizontal" method="post" role="form">
                        <div class="form-group">
                            <label for="title" class="col-sm-3 control-label">Місто</label>
                            <div class="col-sm-9">
                                <input type="text" name="city" class="form-control" id="title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title" class="col-sm-3 control-label">Спортивний клуб</label>
                            <div class="col-sm-9">
                                <input type="text" name="club" class="form-control" id="title">
                            </div>
                        </div>
                        <div class="form-group button-group">
                            <button name="add_club" class="btn btn-primary pull-right">Добавить</button>
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

<div class="modal modal_add_phone fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header modal-ovs">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Добавить телефон</h4>
            </div>
            <div class="modal-body">
                <div class="container-modal clearfix">
                    <form action="" class="form-horizontal" method="post" role="form">
                        <div class="form-group">
                            <label for="phone" class="col-sm-3 control-label">Телефон</label>
                            <div class="col-sm-9">
                                <input type="text" name="phone" class="form-control" id="phone">
                            </div>
                        </div>
                        <div class="form-group button-group">
                            <button name="add_phone" class="btn btn-primary pull-right">Добавить</button>
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

<div class="modal modal_add_email fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header modal-ovs">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Добавить Email</h4>
            </div>
            <div class="modal-body">
                <div class="container-modal clearfix">
                    <form action="" class="form-horizontal" method="post" role="form">
                        <div class="form-group">
                            <label for="phone" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" name="email" class="form-control" id="phone">
                            </div>
                        </div>
                        <div class="form-group button-group">
                            <button name="add_email" class="btn btn-primary pull-right">Добавить</button>
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

