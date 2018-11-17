<?php require_once ROOT . '/views/layouts/header_admin.php' ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">


        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Список баннеров на главной</h3>
                        <a href="" data-toggle="modal" data-target=".modal_create_banner" class="btn btn-primary pull-right"><small class="glyphicon glyphicon-plus"></small>&nbsp;Добавить</a>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered table-banners example">
                            <thead>
                            <tr class="bg-orange">
                                <th width="70px">#</th>
                                <th width="120px">Изображение</th>
                                <th>Текст</th>
                                <th>Ссылка</th>
                                <th width="100px">Статус</th>
                                <th width="50px">Порядок</th>
                                <th width="50px"></th>
                                <th width="50px"></th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php if (is_array($bannersList)): ?>
                                <?php foreach ($bannersList as $banner): ?>
                                    <tr>
                                        <td><?php echo $banner['id']?></td>
                                        <td><img width="120" src="<?php echo $banner['path'] . $banner['img']?>" style="display: block" alt=""></td>
                                        <td><?php echo $banner['text']?></td>
                                        <td><?php echo $banner['link']?></td>
                                        <td><div class="<?= App\app\Models\Banner::getColorBanner($banner['status']); ?>"><?= App\app\Models\Banner::getStatusBanner($banner['status']); ?></div></td>
                                        <td><?php echo $banner['sort']; ?></td>
                                        <td><a href="/admin/banner/update/<?php echo $banner['id']; ?>" data-toggle="tooltip" title="Редактировать"><i
                                                    class="fa fa-pencil-square-o"></i></a>
                                        </td>
                                        <td>
                                            <a href="/admin/banner/delete/<?php echo $banner['id']; ?>" onclick="return confirm('Вы уверены, что хотите удалить баннер ?')" data-toggle="tooltip" title="Удалить"><i class="glyphicon glyphicon-trash delete"></i></a>
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

        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Список событий</h3>
                        <a href="" data-toggle="modal" data-target=".modal_create_event" class="btn btn-primary pull-right"><small class="glyphicon glyphicon-plus"></small>&nbsp;Добавить</a>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2"  class="table table-bordered table-banners">
                            <thead>
                            <tr class="bg-orange">
                                <th>#</th>
                                <th width="120px">Изображение</th>
                                <th>Название</th>
                                <th>Статус</th>
                                <th width="50px"></th>
                                <th width="50px"></th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php if (is_array($eventList)): ?>
                                <?php foreach ($eventList as $event): ?>
                                    <tr>
                                        <td><?php echo $event['id']?></td>
                                        <td><img width="100" src="<?php echo $event['path'] . $event['img']?>" style="display: block" alt=""></td>
                                        <td><?php echo $event['title']?></td>
                                        <td><div class="<?= App\app\Models\Banner::getColorBanner($event['status']); ?>"><?= App\app\Models\Banner::getStatusBanner($event['status']); ?></div></td>
                                        <td><a href="/admin/event-update/<?php echo $event['id']; ?>" data-toggle="tooltip" title="Редактировать"><i
                                                    class="fa fa-pencil-square-o"></i></a>
                                        </td>
                                        <td>
                                            <a href="/admin/event-delete/<?php echo $event['id']; ?>" onclick="return confirm('Вы уверены, что хотите удалить событие ?')" data-toggle="tooltip" title="Удалить"><i class="glyphicon glyphicon-trash delete"></i></a>
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

    </section>


    <div class="modal modal_create_banner fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header modal-ovs">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Добавить новый баннер на главную</h4>
                </div>
                <div class="modal-body">
                    <div class="container-modal clearfix">
                        <form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name_cat" class="col-sm-3 control-label">Статус</label>
                                <div class="col-sm-4">
                                    <select name="status" class="form-control">
                                        <option value="1">Отображена</option>
                                        <option value="0">Скрыта</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="link" class="col-sm-3 control-label">Ссылка</label>
                                <div class="col-sm-4">
                                    <input type="text" name="link" class="form-control" id="link" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sort" class="col-sm-3 control-label">Порядковый номер</label>
                                <div class="col-sm-4">
                                    <input type="text" name="sort" class="form-control" id="sort" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sort" class="col-sm-3 control-label">Текст на баннере</label>
                                <div class="col-sm-9">
                                    <textarea name="text" cols="90" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3" for="exampleInputFile">Загрузите изображения</label>
                                <div class="col-sm-4">
                                    <input type="file" data-placement="right" data-toggle="tooltip" title="Изображение 660х350 px" name="image" id="exampleInputFile">
                                </div>
                            </div>
                            <div class="form-group button-group clearfix">
                                <input type="submit" name="add_banner" value="Сохранить" class="btn btn-primary pull-right">
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

    <div class="modal modal_create_event fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header modal-ovs">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Добавить новое событие</h4>
                </div>
                <div class="modal-body">
                    <div class="container-modal clearfix">
                        <form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name_cat" class="col-sm-3 control-label">Статус</label>
                                <div class="col-sm-4">
                                    <select name="status" class="form-control">
                                        <option value="1">Отображена</option>
                                        <option value="0">Скрыта</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name_cat" class="col-sm-3 control-label">Название</label>
                                <div class="col-sm-4">
                                    <input type="text" name="title" class="form-control" id="name_cat">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3" for="exampleInputFile">Загрузите изображения</label>
                                <div class="col-sm-4">
                                    <input type="file" data-placement="right" data-toggle="tooltip" title="Изображение 600х850 px" name="image" id="exampleInputFile">
                                </div>
                            </div>
                            <div class="form-group button-group clearfix">
                                <input type="submit" name="add_event" value="Сохранить" class="btn btn-primary pull-right">
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

