
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
                        <h3 class="box-title">Редактирование пользователя</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <form role="form" action="" method="post" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Роль</label>
                                <select name="role" class="form-control">
                                    <option <?php if ($user['role'] == 'admin') echo ' selected="selected"'; ?> value="admin">Администратор</option>
                                    <option <?php if ($user['role'] == 'manager') echo ' selected="selected"'; ?> value="manager">Менеджер</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Имя</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" name="name" class="form-control" value="<?php echo $user['name']?>" placeholder="Имя">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Логин</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" name="login" class="form-control" value="<?php echo $user['login']?>" placeholder="Логин">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Пароль</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-exclamation"></i></span>
                                    <input type="password" name="password" class="form-control" value="<?php echo $user['password']?>" placeholder="Пароль">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">E-mail</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                    <input type="text" name="email" class="form-control" value="<?php echo $user['email']?>" placeholder="E-mail">
                                </div>
                            </div>

                            <div class="form-group button-group pull-right">
                                <a href="/admin/user" type="submit" class="btn btn-success">Назад</a>

                                <input type="submit" name="update" class="btn btn-primary" value="Обновить">
                            </div>

                        </div><!-- /.box-body -->
                    </form>
                </div><!-- /.box -->
            </div>
        </div><!-- /.row -->
        <!-- Main row -->


    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<?php require_once ROOT . '/views/layouts/footer_admin.php'?>

