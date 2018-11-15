<?php require_once ROOT . '/views/layouts/header_admin.php' ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class="content">
        <div class="row">
            <div class="col-xs-12">


                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Список пользователей</h3>
                        <a href="" data-toggle="modal" data-target=".modal_create_category" class="btn btn-primary pull-right"><small class="glyphicon glyphicon-plus"></small>&nbsp;Добавить</a>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered table-banners">
                            <thead>
                            <tr class="bg-orange">
                                <th>Роль</th>
                                <th>Логин</th>
                                <th>Имя</th>
                                <th>E-mail</th>
                                <th>Создан</th>
                                <th>Редактирован</th>
                                <th width="50px"></th>
                                <th width="50px"></th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php if (is_array($users)): ?>
                                <?php foreach ($users as $user): ?>
                                    <tr>
                                        <td><?php echo App\app\Models\User::getAvailabilityRole($user['role']) ?></td>
                                        <td><?php echo $user['login'] ?></td>
                                        <td><?php echo $user['name'] ?></td>
                                        <td><?php echo $user['email'] ?></td>
                                        <td><?php echo $user['data_create']; ?></td>
                                        <td>
                                            <?php
                                            if (empty($user['data_update'])) {
                                                echo $user['data_create'];
                                            } else {
                                                echo $user['data_update'];
                                            }
                                            ?>

                                        </td>
                                        <td><a href="user/update/<?php echo $user['id']; ?>" data-toggle="tooltip"
                                               title="Редактировать"><i
                                                    class="fa fa-pencil-square-o"></i></a>
                                        </td>
                                        <td>
                                            <a href="user/delete/<?php echo $user['id']; ?>" data-toggle="tooltip"
                                               title="Удалить"><i class="glyphicon glyphicon-trash delete"></i></a>
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

<div class="modal modal_create_category fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header modal-ovs">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Добавить нового пользователя</h4>
            </div>
            <div class="modal-body">
                <div class="container-modal clearfix">
                    <form class="form-horizontal" method="post" role="form">
                        <div class="form-group">
                            <label for="name_cat" class="col-sm-3 control-label">Роль</label>
                            <div class="col-sm-4">
                                <select name="role" class="form-control">
                                    <option value="admin">Администратор</option>
                                    <option value="manager">Менеджер</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name_cat" class="col-sm-3 control-label">Имя</label>
                            <div class="col-sm-4">
                                <input type="text" name="name" class="form-control" id="name_cat">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sort" class="col-sm-3 control-label">Логин</label>
                            <div class="col-sm-4">
                                <input type="text" name="login" class="form-control" id="sort" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sort" class="col-sm-3 control-label">Пароль</label>
                            <div class="col-sm-4">
                                <input type="password" name="password" class="form-control" id="sort" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sort" class="col-sm-3 control-label">E-mail</label>
                            <div class="col-sm-4">
                                <input type="text" name="email" class="form-control" id="sort" >
                            </div>
                        </div>

                        <div class="form-group button-group">
                            <button name="create" class="btn btn-primary pull-right">Сохранить</button>
                            &nbsp;
                            <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Отмена
                            </button>
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

