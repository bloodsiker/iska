<?php require_once ROOT . '/views/layouts/header_admin.php' ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title pull-left">Список фотографий в <?=$album['title']?></h3>
                            <a href="" data-toggle="modal" data-target=".modal_create_banner" class="btn btn-primary pull-right"><small class="glyphicon glyphicon-plus"></small>&nbsp;Добавить</a>
                    </div><!-- /.box-header -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
            <?php if (is_array($photoList)): ?>
                <?php foreach ($photoList as $photo): ?>
                    <div class="col-xs-4">
                        <div class="box"
                             style="background: url('<?=$photo['path'] . $photo['img']?>') no-repeat; background-size: cover;height: 210px; position: relative">
                            <a href="/admin/media/photo/delete/<?=$photo['id']?>"
                               onclick="return confirm('Вы уверены, что хотите удалить фото ?')"
                               style="display: block; position: absolute; bottom: 0; background: red; width: 100%; text-align: center; color: #fff">Удалить<i
                                    class="glyphicon glyphicon-trash delete"></i></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

    </section>


    <div class="modal modal_create_banner fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header modal-ovs">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Добавить фотографию</h4>
                </div>
                <div class="modal-body">
                    <div class="container-modal clearfix">
                        <form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-sm-3" for="exampleInputFile">Загрузите изображения</label>
                                <div class="col-sm-4">
                                    <input type="file" data-placement="right" data-toggle="tooltip" title="Изображение 800х530 px" name="image" id="exampleInputFile">
                                </div>
                            </div>
                            <div class="form-group button-group clearfix">
                                <button name="add_photo" class="btn btn-primary pull-right">Сохранить</button>
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


</div><!-- /.content-wrapper -->

<?php require_once ROOT . '/views/layouts/footer_admin.php'?>

