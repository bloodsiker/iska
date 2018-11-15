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
                        <h3 class="box-title">Історія розвитку</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <div class="form-update-product">

                        <form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <textarea name="text" id="comment" cols="30"
                                              rows="10"><?php echo $history['text'] ?></textarea>
                                </div>
                            </div>

                            <div class="form-group button-group">
                                <button name="update" class="btn btn-primary pull-right">Сохранить</button>
                                &nbsp;
                                <a href="/admin" class="btn btn-default pull-right">Отмена
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

