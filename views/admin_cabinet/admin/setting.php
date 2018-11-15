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
                    <div class="box-header with-border">
                        <h3 class="box-title">Favicon</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <div class="form-update-product">

                        <form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
                            <div class="form-group">
                                <div class="col-sm-9 col-md-offset-2">
                                    <div class="product-info-img">
                                        <img src="/template/site/img/<?php echo $favicon['favicon'] ?>" width="16">
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label" for="exampleInputFile">Изменить
                                    изображения</label>
                                <div class="col-sm-9">
                                    <input type="file" data-placement="right" data-toggle="tooltip" title="размер favicon 16х16px или 32х32px" name="favicon" id="exampleInputFile">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Title</label>
                                <div class="col-sm-9">
                                    <input type="text" name="title" class="form-control" id="title"
                                           value="<?php echo $favicon['title'] ?>">
                                </div>
                            </div>


                            <div class="form-group button-group">
                                <button name="update_favicon" class="btn btn-primary pull-right">Сохранить</button>
                            </div>
                        </form>
                    </div>
                </div><!-- /.box -->
            </div>
        </div><!-- /.row -->


        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Контактный телефон в шапке</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <div class="form-update-product">

                        <form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="head_phone" class="col-sm-2 control-label">Телефон(моб)</label>
                                <div class="col-sm-9">
                                    <input type="text" name="head_phone" class="form-control" id="head_phone"
                                           value="<?php echo $head_phone['head_phone'] ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="head_phone_2" class="col-sm-2 control-label">Телефон(моб)</label>
                                <div class="col-sm-9">
                                    <input type="text" name="head_phone_2" class="form-control" id="head_phone_2"
                                           value="<?php echo $head_phone['head_phone_2'] ?>">
                                </div>
                            </div>


                            <div class="form-group button-group">
                                <button name="update_phone" class="btn btn-primary pull-right">Сохранить</button>
                                </a>
                            </div>
                        </form>
                    </div>
                </div><!-- /.box -->
            </div>
        </div><!-- /.row -->
        <!-- Main row -->


        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Информация в футере</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <div class="form-update-product">

                        <form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="sort" class="col-sm-2 control-label">Текст</label>
                                <div class="col-sm-9">
                                    <textarea name="text" id="comment" cols="30"
                                              rows="10"><?php echo $footer['text'] ?></textarea>
                                </div>
                            </div>


                            <div class="form-group button-group">
                                <button name="update_footer" class="btn btn-primary pull-right">Сохранить</button>
                                </a>
                            </div>
                        </form>
                    </div>
                </div><!-- /.box -->
            </div>
        </div><!-- /.row -->


    </section><!-- /.content -->

</div><!-- /.content-wrapper -->

<?php require_once ROOT . '/views/layouts/footer_admin.php'?>

