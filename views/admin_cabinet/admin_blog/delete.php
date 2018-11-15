<?php require_once ROOT . '/views/layouts/header_admin.php' ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="display: none;">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Удалить товар</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <h4>Вы точно хотите удалить публикацию  <span class="bg-red" style="padding: 2px 10px"><?php echo $blog['title']?></span> ?</h4>
                        <h4>Автор: <?php echo $blog['author']?></h4>
                        <h4>Дата публикации: <?php echo $blog['data_create']?></h4>

                        <div class="form-group">
                            <form method="post">
                                <a href="/admin/blog" class="btn btn-reddit">Отмена</a>
                                <input type="submit" class="btn btn-adn" name="delete" value="Удалить"/>
                            </form>
                        </div>

                    </div><!-- /.box-body -->


                </div><!-- /.box -->
            </div>
        </div><!-- /.row -->
        <!-- Main row -->


    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<?php require_once ROOT . '/views/layouts/footer_admin.php'?>

